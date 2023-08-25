<?php

namespace MostafaSewidan\Zoom;

use Macsidigital\API\Support\Resource;

class QA extends Resource
{
    protected $endPoint = '/past_meetings/{meeting:uuid}/qa';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
