<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\Zoom\Support\Model;

class MeetingSetting extends Model
{
    public function globalDialInNumbers()
    {
        return $this->hasMany(GlobalDialInNumber::class);
    }

    public function globalDialInCountries()
    {
        return $this->hasMany(GlobalDialInCountry::class);
    }
}
