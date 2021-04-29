<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office;

class Offices extends Component
{
    public $name,$office_id,$isOpen=false;


    public function render()
    {
        return view('livewire.offices.index',['offices'=>Office::all()]);
    }

    public function store(){
        $this->validate([
            'name'=>'required',
        ]);
        Office::updateOrCreate(['id' => $this->office_id], [
            'name' => $this->name,
        ]);
        session()->flash('message',
            $this->office_id ? 'Office Updated Successfully.' : 'Office Created Successfully.');
        $this->resetInputFields();
        $this->closeModal();
    }

    public function resetInputFields(){
        $this->name = '';
        $this->office_id = '';
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
        $office = Office::find($id);
        $this->office_id = $office->id;
        $this->name = $office->name;
        $this->openModal();
    }
}
