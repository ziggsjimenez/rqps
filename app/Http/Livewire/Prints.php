<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class Prints extends Component
{
    public $client_id,$client;

    public function mount(){
        $this->client = Client::find($this->client_id);
    }
    public function render()
    {
        return view('prints.qr');
    }
}
