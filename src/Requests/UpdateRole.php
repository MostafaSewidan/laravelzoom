<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class UpdateRole extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'nullable|string|max:128',
        'description' => 'nullable|string|max:128',
        'privileges' => 'nullable|array',
    ];
}
