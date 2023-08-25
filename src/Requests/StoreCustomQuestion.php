<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class StoreCustomQuestion extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'required|string',
        'value' => 'required|string',
    ];
}
