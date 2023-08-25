<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateRegistrationQuestion extends PersistResource
{
    protected $relatedResource = [
        "questions" => UpdateQuestion::class,
        "custom_questions" => UpdateCustomQuestion::class,
    ];
}
