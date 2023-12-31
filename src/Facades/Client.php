<?php

namespace MostafaSewidan\Zoom\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MostafaSewidan\XeroLaravel\Skeleton\SkeletonClass
 */
class Client extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zoom.client';
    }
}
