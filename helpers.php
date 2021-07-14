<?php

use JosKoomen\GuzzleHttp\GuzzleClientFactory as GuzzleClient;

if (!function_exists('guzzle_http_client')) {
    function guzzle_http_client()
    {
        $factory = app(GuzzleClient::class);
        return $factory->make();
    }
}