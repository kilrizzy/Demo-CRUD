<?php

namespace Tests\Feature\_ClassName_s;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\AppTestCase;

class _ClassName_Controller extends Controller
{

	use RefreshDatabase;

    public function test_index(){
        $this->assertTrue(true);
    }

}