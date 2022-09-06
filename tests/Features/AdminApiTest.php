<?php

namespace Analyzen\Admin\Tests\Features;

use Analyzen\Admin\Models\User;
use Analyzen\Admin\Tests\TestCase;

class AdminApiTest extends TestCase
{
    public function tests_get_candidates()
    {
        $this->withoutExceptionHandling();

        $candidates = User::factory()
            ->state([
                'role' => "candidate"
            ])
            ->count(4)->create();

        $this->assertDatabaseCount((new User())->getTable(), 5);

        $response = $this->actingAs($this->user, 'api')
            ->getJson(route('candidate.index'));

        $response->assertJsonCount(4, 'data');
    }
}
