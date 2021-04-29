<?php

namespace App\Http\Livewire;
use App\Models\Servicetype;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use Livewire\Component;
use App\Models\Office;

class Officeinfo extends Component
{
    use WithFileUploads;

    public $servicetypes,$office_id,$servicetype_id,$office,$service_id,$name,$isOpen=false,$image,$isOpenEdit=false,$imagefilename,$window;

    public function mount(){

        $this->office = Office::find($this->office_id);
        $this->servicetypes = Servicetype::all();
    }
    public function render()
    {
        $this->office = Office::find($this->office_id);
        return view('livewire.office.index');
    }

    public function store(){
        $this->validate([
            'name'=>'required',
            'servicetype_id'=>'required',
        ]);

        if($this->image){
            $nameOfFile = date("Ymds")."-".$this->image->getClientOriginalName();
            $this->image->storeAs('public/images',$nameOfFile);
        }
        else{
            $nameOfFile = NULL;
        }

        $service = new Service;
        $service->name = $this->name;
        $service->office_id = $this->office_id;
        $service->window = $this->window;
        $service->image = $nameOfFile;
        $service->servicetype_id = $this->servicetype_id;
        $service->save();

        session()->flash('message','Service Created Successfully.');
        $this->resetInputFields();
        $this->closeModal();
    }

    public function update(){

        $service = Service::find($this->service_id);
        $nameOfFile = $service->image;

        if($this->image){
            if($service->image!=NULL){
            Storage::delete('public/images/'.$service->image);
            }
            $nameOfFile = date("Ymds")."-".$this->image->getClientOriginalName();
            $this->image->storeAs('public/images',$nameOfFile);
        }

        $service->name = $this->name;
        $service->window = $this->window;
        $service->office_id = $this->office_id;
        $service->servicetype_id = $this->servicetype_id;
        $service->image = $nameOfFile;
        $service->save();

        session()->flash('message','Service Updated Successfully.');
        $this->resetInputFields();
        $this->closeEditModal();

    }

    public function resetInputFields(){
        $this->name = '';
        $this->service_id = '';
        $this->window = '';
        $this->imagefilename = NULL;
        $this->image = '';
    }

    public function openModal(){
        $this->isOpen=true;
    }

    public function closeModal(){
        $this->isOpen=false;
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $this->service_id = $service->id;
        $this->name = $service->name;
        $this->window = $service->window;
        $this->office_id = $service->office_id;
        $this->imagefilename = $service->image;
        $this->openEditModal();
    }

    public function openEditModal(){
        $this->isOpenEdit = true;
    }

    public function closeEditModal(){
        $this->isOpenEdit = false;
    }
}
