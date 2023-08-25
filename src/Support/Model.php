<?php

namespace MostafaSewidan\Zoom\Support;

use Macsidigital\API\Support\ApiResource;

class Model extends ApiResource
{
    protected $apiDataField = '';

    protected $dateFormat = \DateTime::ATOM;
}
