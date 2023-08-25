<?php

namespace MostafaSewidan\Zoom;

use Macsidigital\API\Support\Resource;

class ScheduleMeeting extends Resource
{
    public function recordingPasswordRequirement()
    {
        return $this->hasOne(MeetingPasswordRequirement::class);
    }
}
