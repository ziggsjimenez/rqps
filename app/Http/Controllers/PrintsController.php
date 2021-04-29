<?php

namespace App\Http\Controllers;

use App\Models\Serviceclient;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Client;
use App\Models\Service;
use Carbon\Carbon;

class PrintsController extends Controller
{
    public function printqr($client_id){
        $client = Client::find($client_id);
        return view('prints.qr',compact('client'));
    }

    public function serviceslip ($client_id,$service_id){
//        $service = Service::find($service_id);
//        $client = Client::find($client_id);
        $serviceclient = new Serviceclient;
        $serviceclient->service_id = $service_id;
        $serviceclient->client_id = $client_id;
        $serviceclient->prioritynum =$this->getPrioNum($service_id);
        $serviceclient->served = 0;
        $serviceclient->save();

        return view('prints.serviceslip',compact('serviceclient'));
    }

    private function getPrioNum($service_id){
        $today = Carbon::now()->format('Y-m-d').'%';
        $count = Serviceclient::where('service_id',$service_id)->where('created_at', 'like', $today)->get();
        return $count->count()+1;
    }
}
