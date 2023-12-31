<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class UpdateLiveStreamStatus extends PersistResource
{
    protected $persistAttributes = [
        "action" => "required|in:start,stop",
    ];

    protected $relatedResource = [
        "settings" => UpdateLiveStreamStatusSetting::class,
    ];
}
