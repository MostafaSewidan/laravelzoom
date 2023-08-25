<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class Scheduler extends Model
{
    protected $insertResource = 'MostafaSewidan\Zoom\Requests\StoreScheduler';
    protected $updateResource = 'MostafaSewidan\Zoom\Requests\UpdateScheduler';
    
    protected $endPoint = 'users/{user_id}/schedulers';

    protected $allowedMethods = ['get', 'delete'];

    protected $apiMultipleDataField = 'schedulers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
