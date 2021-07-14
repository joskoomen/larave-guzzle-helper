<?php

namespace JosKoomen\GuzzleHttp;


use GuzzleHttp\Client;

class GuzzleClientFactory
{
    public static function make()
    {
        return new Client();
    }

}

