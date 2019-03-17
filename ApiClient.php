<?php

require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

class ApiClient
{
    public static function getHeader(): array
    {
        $yaml = Yaml::parseFile('header.yaml');
        $header = array($yaml['header']);
        return $header;
    }

    public static function makeApiCall(): string
    {
        $header = self::getHeader();
        $url = 'https://air-api.lovo.pl/stations';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result=curl_exec($ch);
        curl_close($ch);

        return $result;
    }

}