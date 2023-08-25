<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class Account extends Model
{
    // API included but its not open to the majority of API Users
    protected $insertResource = 'MostafaSewidan\Zoom\Requests\StoreAccount';
    protected $updateResource = 'MostafaSewidan\Zoom\Requests\UpdateAccount';
    
    protected $endPoint = 'accounts';

    protected $allowedMethods = ['get', 'post', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'accounts';
}
