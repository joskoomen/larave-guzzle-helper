<?php

namespace JosKoomen\GuzzleHttp;


use Illuminate\Support\Facades\Facade;

class GuzzleClientFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'guzzle_client';
    }

}

