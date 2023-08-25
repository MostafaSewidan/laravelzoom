<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateIntegration extends PersistResource
{
    protected $persistAttributes = [
        "linkedin_sales_navigator" => "nullable|boolean",
    ];
}
