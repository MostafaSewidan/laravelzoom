<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class StoreGlobalDialInNumber extends PersistResource
{
    protected $persistAttributes = [
        "city" => "nullable|string",
        "country" => "nullable|string",
        "country_name" => "nullable|string",
        "number" => "nullable|string",
        "type" => "nullable|in:toll,tollfree",
    ];
}
