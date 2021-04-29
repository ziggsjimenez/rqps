<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Service;
use Livewire\Component;

class Dashboard extends Component
{
    public $searchToken,$showServices=false,$client_id,$services,$clients,$service,$showPrintModal=false,$client;
    public $service_id,$service_name;

    public function mount(){
        $this->clients = Client::where('refnum',$this->searchToken)->get();
    }
    public function render()
    {
        return view('livewire.dashboard.index');
    }

    public function searchClient(){
        $this->clients = Client::where('refnum',$this->searchToken)->get();

    }

    public function clearSearch(){
        $this->searchToken = '';
        $this->showServices = false;
        $this->clients = Client::where('refnum',$this->searchToken)->get();

    }

    public function printModal($id){
        $service = Service::find($id);
        $this->service_id = $service->id;
        $this->service_name = $service->name;
        $this->client = Client::find($this->client_id);
        $this->showPrintModal = true;
    }

    public function selectClient($id){
        $this->services = Service::all();
        $this->client_id = $id;
        $this->showServices = true;
    }
    public function printServiceSlip(){

        return redirect()->route('print.serviceslip',['client_id'=>$this->client_id,'service_id'=>$this->service_id]);
    }
    public function closeModal(){
        $this->showPrintModal = false;
    }
}
