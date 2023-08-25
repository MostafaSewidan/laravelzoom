<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class StoreTrackingField extends PersistResource
{
    protected $persistAttributes = [
        "field" => "nullable|string",
        "value" => "nullable|string",
    ];
}
