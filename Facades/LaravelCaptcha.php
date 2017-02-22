<?php
namespace Keleshteri\LaravelCaptcha\Facades;
use Illuminate\Support\Facades\Facade;

class LaravelCaptcha extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'recaptcha';
    }
}

