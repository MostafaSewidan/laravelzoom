<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class StoreRole extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'required|string|max:128',
        'description' => 'required|string|max:128',
        'privileges' => 'required|array',
    ];
}
