<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdatePollQuestion extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'nullable|string',
        'type' => 'nullable|in:single,multiple',
        'answers' => 'nullable|array',
    ];
}
