<?php

namespace MostafaSewidan\Zoom;

use MostafaSewidan\API\Support\Resource;

class WebinarSetting extends Resource
{
    public function globalDialInCountries()
    {
        return $this->hasMany(GlobalDialInCountry::class);
    }
}
