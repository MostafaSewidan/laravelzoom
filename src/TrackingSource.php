<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class TrackingSource extends Model
{
    protected $endPoint = '/webinars/{webinar:id}/tracking_sources';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
