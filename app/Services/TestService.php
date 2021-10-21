<?php

namespace App\Services;

use App\Repositories\TestRepository;

class TestService
{
    private $testRepo;

    public function __construct(TestRepository $testRepo)
    {
        $this->testRepo = $testRepo;
    }

    public function get()
    {
        $test = $this->testRepo->get();

        return $test;
    }
}



