<?php

namespace MostafaSewidan\Zoom\Support;

use MostafaSewidan\API\Support\ApiResource;

class Model extends ApiResource
{
    protected $apiDataField = '';

    protected $dateFormat = \DateTime::ATOM;
}
