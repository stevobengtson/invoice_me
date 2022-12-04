<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_user_has_a_uuid_primary_key_id()
    {
        $uuidRegex = '/^[\da-f]{8}-[\da-f]{4}-[\da-f]{4}-[\da-f]{4}-[\da-f]{12}$/iD';

        $user = User::create([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $this->assertTrue(preg_match($uuidRegex, $user->id) > 0);
    }

    /** @test */
    function a_user_is_assigned_a_unique_id()
    {
        $userOne = User::create([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $userTwo = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => 'password',
        ]);

        $this->assertNotEquals($userOne->id, $userTwo->id);
    }
}
