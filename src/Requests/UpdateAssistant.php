<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateAssistant extends PersistResource
{
    protected $persistAttributes = [
        'id' => '',
        'email' => 'nullable|email',
    ];
}
