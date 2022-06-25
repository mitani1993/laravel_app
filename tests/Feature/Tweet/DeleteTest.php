<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test delete successed.
     *
     * @return void
     */
    public function test_delete_successed()
    {
        $response = $this->delete('/tweet/delete/1');

        $response->assertRedirect('/tweet');
    }
}
