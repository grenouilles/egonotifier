<?php

namespace App\Services;

class GithubStars
{
    /**
     * @var string
     */
    private $apikey;

    function __construct(string $apikey)
    {
        $this->apikey = $apikey;
    }

    function run()
    {

    }
}
