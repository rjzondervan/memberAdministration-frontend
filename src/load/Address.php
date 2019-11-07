<?php

namespace load;

class Address
{
    private $id;
    private $street;
    private $number;
    private $postal_code;
    private $settlement;
    private $province;
    private $country;


    private function __construct(string $id)
    {
        $url = "http://localhost:8080/addresses/$id";
        $json = http_get($url);
        $addressRaw = json_decode($json);
    }

    public function setAll(string $id,
                           string $street,
                           string $number,
                           string $settlement,
                           string $province,
                           string $country,
                           Organisation $organisation

    )
    {
        $this->id = $id;
    }
}