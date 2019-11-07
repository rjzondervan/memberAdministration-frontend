<?php

namespace load;

class Organisation
{
    private $id;
    private $name;
    private $organisationNumber;
    private $goal;

    private function __construct(string $id)
    {
        $url = "http://localhost:8080/organisations/$id";
        $json = http_get($url);
        $organisationRaw = json_decode($json);
    }

    public function setAll(string $id,
                           string $name,
                           int $organisationNumber,
                           string $goal,
                           Address $location,
                           Member $member

    )
    {
        $this->id = $id;
        $this->name = $name;
    }

}