<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class MeetingParticipant extends Model
{
    //protected $insertResource = 'MostafaSewidan\Zoom\Requests\StoreRegistrant';

    protected $endPoint = '/metrics/meetings/{meeting:id}/participants';

    protected $allowedMethods = ['get', 'post', 'put'];

    protected $apiMultipleDataField = 'participants';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
