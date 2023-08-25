<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdatePoll extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'nullable|string',
    ];

    protected $relatedResource = [
        "questions" => UpdatePollQuestion::class,
    ];
}
