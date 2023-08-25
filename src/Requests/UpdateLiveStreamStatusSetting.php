<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateLiveStreamStatusSetting extends PersistResource
{
    protected $persistAttributes = [
        "active_speaker_name" => "nullable|boolean",
        "display_name" => "nullable|string|between:1,50",
    ];
}
