<?php

namespace MostafaSewidan\Zoom;

use Macsidigital\API\Support\Resource;

class WebinarSetting extends Resource
{
    public function globalDialInCountries()
    {
        return $this->hasMany(GlobalDialInCountry::class);
    }
}
