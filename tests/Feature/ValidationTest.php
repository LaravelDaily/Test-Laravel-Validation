<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_simple_validation_rules()
    {
        // Post without any title should fail because title is required
        $response = $this->post('posts');
        $response->assertSessionHasErrors('title')->assertStatus(302);

        // Post with title should succeed
        $response = $this->post('posts', ['title' => 'Some title']);
        $response->assertStatus(200);

        // Post with the same title should fail because it's not unique
        $response = $this->post('posts', ['title' => 'Some title']);
        $response->assertSessionHasErrors('title')->assertStatus(302);
    }

    public function test_array_validation()
    {
        $user = User::factory()->create();

        // Post without name and email should fail
        $response = $this->actingAs($user)->post('profile');
        $response->assertStatus(302);

        // Post with name and email should succeed
        $response = $this->actingAs($user)->post('profile', [
            'profile' => [
                'name' => 'Some name',
                'email' => 'some@email.com'
            ]
        ]);
        $response->assertStatus(200);
   }
}
