<?php

namespace App\Repositories;

use App\Models\Test;

class TestRepository
{
    private $test;

    public function __construct(Test $test)
    {
        $this->test = $test;
    }

    public function get()
    {
        $test = $this->test::all();

        return $test;
    }
}



