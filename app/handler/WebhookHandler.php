<?php

namespace App\Handler;

use Spatie\WebhookClient\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob{

    function handle(){
        http_response_code(200);
        logger($this->webhookCall);
    }

}