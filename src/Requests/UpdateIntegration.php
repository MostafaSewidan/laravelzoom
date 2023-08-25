<?php

namespace MostafaSewidan\Zoom\Requests;

use MostafaSewidan\API\Support\PersistResource;

class UpdateIntegration extends PersistResource
{
    protected $persistAttributes = [
        "linkedin_sales_navigator" => "nullable|boolean",
    ];
}
