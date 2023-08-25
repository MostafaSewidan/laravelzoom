<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class AuthenticationOption extends Model
{
    protected $insertResource = 'MostafaSewidan\Zoom\Requests\StoreAuthenticationOption';
    protected $updateResource = 'MostafaSewidan\Zoom\Requests\UpdateAuthenticationOption';
}
