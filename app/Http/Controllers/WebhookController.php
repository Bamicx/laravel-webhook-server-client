<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\WebhookServer\WebhookCall;

class WebhookController extends Controller
{
    function server(){
        logger("DD");
        WebhookCall::create()
                ->url("http://127.0.0.1:8000/webhooks")
                ->payload(['key1'=>'value1', "key2"=>"value2"])
                ->useSecret("keyyek")
                ->dispatch();
        return "Served";
    }
}
