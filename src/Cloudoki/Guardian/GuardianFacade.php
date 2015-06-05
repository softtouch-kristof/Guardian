<?php namespace Cloudoki\Guardian\Facades;

use Illuminate\Support\Facades\Facade;

class Guardian extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'guardian';
    }

}