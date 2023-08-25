<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\API\Support\Resource;

class PollResult extends Resource
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/polls';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
