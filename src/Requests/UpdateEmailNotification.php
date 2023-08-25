<?php

namespace MostafaSewidan\Zoom\Requests;

use Macsidigital\API\Support\PersistResource;

class UpdateEmailNotification extends PersistResource
{
    protected $persistAttributes = [
        "jbh_reminder" => "nullable|boolean",
        "cancel_meeting_reminder" => "nullable|boolean",
        "alternative_host_reminder" => "nullable|boolean",
        "schedule_for_reminder" => "nullable|boolean",
    ];
}
