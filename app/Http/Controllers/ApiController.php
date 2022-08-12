<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    public function  createMember(Request $r){


        $m = new Member;
        $m->firstname = $r->get("firstname");
        $m->cellphone_number = $r->get("cellphone_number");
        $m->signature=$r->get('signature');
        $m->save();
        $message =  "Dear ". $m->firstname. " ". "Dear member, thank you for trusting Tsoga Insurance Brokers with your insurance, your application has been received and we will contact you soon. Regards Tsoga Insurance Brokers ";
        $response = Http::get("https://api.clickatell.com/http/sendmsg?user=mashudu11&password=veNdAEix&api_id=3658349&to=$m->cellphone_number&text='$message");
        return response()->json($m, 200);
       }
}
