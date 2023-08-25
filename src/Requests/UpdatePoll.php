<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class UpdatePoll extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'nullable|string',
    ];

    protected $relatedResource = [
        "questions" => UpdatePollQuestion::class,
    ];
}
