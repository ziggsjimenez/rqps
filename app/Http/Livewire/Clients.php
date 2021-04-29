<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Client;
use App\Models\Barangay;
use App\Models\Zone;
use Livewire\WithPagination;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Clients extends Component
{
    use WithPagination;
    public $isOpen=false,$name,$age,$bday,$zone_id,$barangay_id;
    public $zones,$barangays,$client_id,$searchToken;

    public function mount(){
        $this->barangays = Barangay::all()->sortBy('name');

    }
    public function render()
    {

        $this->zones = Zone::where('barangay_id',$this->barangay_id)->get();

        return view('livewire.clients.index',['clients'=>Client::where('name','LIKE','%'.$this->searchToken.'%')->orWhere('refnum','LIKE','%'.$this->searchToken.'%')->paginate(50)]);
    }

    public function store(){

        $this->validate([
            'name'=>'required',
            'age'=>'required',
            'bday'=>'required',
            'zone_id'=>'required',
        ]);

        Client::updateOrCreate(['id' => $this->client_id], [
            'name' => $this->name,
            'age' => $this->age,
            'bday' => $this->bday,
            'zone_id' => $this->zone_id,
            'barangay_id' => $this->barangay_id,
            'refnum' => $this->generaterefnum(),
        ]);
        session()->flash('message',
            $this->client_id ? 'Client Updated Successfully.' : 'Client Created Successfully.');
        $this->resetInputFields();
        $this->closeModal();
    }

    private function generaterefnum(){

        $count = Client::all()->count()+1;
        return $this->barangay_id.$this->zone_id.$count;
    }

    public function resetInputFields(){
        $this->name = '';
        $this->age = '';
        $this->bday = '';
        $this->zone_id = '';
        $this->client_id = '';
    }
    public function closeModal(){
        $this->isOpen = false;
    }
    public function openModal(){
        $this->isOpen = true;
    }

    public function edit($id){
        $client = Client::find($id);
        $this->name = $client->name;
        $this->age = $client->age;
        $this->bday = $client->bday;
        $this->zone_id = $client->zone_id;
        $this->barangay_id = $client->barangay_id;
        $this->client_id = $client->id;
        $this->openModal();
    }
}
