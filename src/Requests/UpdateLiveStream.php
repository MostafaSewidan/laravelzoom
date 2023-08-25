<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateLiveStream extends PersistResource
{
    protected $persistAttributes = [
        "stream_url" => "required|string|max:1024",
        "stream_key" => "required|string|max:512",
        "page_url" => "nullable|string|max:1024",
    ];
}
