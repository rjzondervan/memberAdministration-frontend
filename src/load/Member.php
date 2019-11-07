<?php


namespace load;


use DateTime;

class Member
{

    private $id;
    private $firstname;
    private $lastname;
    private $dateOfBirth;
    private $email;
    private $username;
    private $password;
    private $contributionPaid;


    private $
    public function __construct(string $id)
    {

        $url = "http://localhost:8080/members/$id";
        $json = http_get($url);
        $memberRaw = json_decode($json);
        if()

    }

    public function setAll(string $id,
                                string $firstName,
                                string $lastName,
                                DateTime $dateOfBirth,
                                string $email,
                                string $username,
                                string $password,
                                bool $contributionPaid,
                                Role $role
    )
    {
        $this->id = $id;
        $this->firstname = $firstName;

    }
    private function getMember(string $url)
    {


    }
}