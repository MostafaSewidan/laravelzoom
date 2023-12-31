<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class StorePoll extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'nullable|string',
    ];

    protected $relatedResource = [
        "questions" => StorePollQuestion::class,
    ];
}
