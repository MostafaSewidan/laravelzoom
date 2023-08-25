<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateCustomQuestion extends PersistResource
{
    protected $persistAttributes = [
        "title" => "nullable|string",
        "type" => "nullable|string|in:short,single",
        'required' => 'nullable|boolean',
        'answers' => 'nullable|array',
    ];
}
