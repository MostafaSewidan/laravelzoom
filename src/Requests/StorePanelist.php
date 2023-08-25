<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class StorePanelist extends PersistResource
{
    protected $persistAttributes = [
        "email" => "nullable|email",
        "name" => "required|string|max:64",
    ];
}
