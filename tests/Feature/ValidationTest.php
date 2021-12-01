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

    public function test_validation_errors_shown_in_blade()
    {
        $response = $this->followingRedirects()->post('projects');
        $response->assertStatus(200);
        $response->assertSee('The name field is required.');
        $response->assertSee('The description field is required.');
    }

    public function test_validation_specific_error_shown_in_blade()
    {
        $response = $this->followingRedirects()->post('products');
        $response->assertStatus(200);
        $response->assertSee('The name field is required.');
    }

    public function test_old_value_stays_in_form_after_validation_error()
    {
        $response = $this->followingRedirects()->post('teams', ['name' => 'Abc']);
        $response->assertStatus(200);
        $response->assertSee('Abc');
    }

    public function test_form_request_validation()
    {
        // Post with no name/description should fail
        $response = $this->post('items');
        $response->assertStatus(302);

        // Post with all the fields should succeed
        $response = $this->post('items', [
            'name' => 'Abc',
            'description' => 'Xyz',
        ]);
        $response->assertStatus(200);
    }

    public function test_update_forbidden_field()
    {
        $user = User::factory()->create();

        // field is_admin should not be possible to update
        $updatedUser = [
            'name' => 'Updated name',
            'email' => 'updated@email.com',
            'is_admin' => 1
        ];
        $response = $this->put('users/' . $user->id, $updatedUser);
        $response->assertStatus(200);

        $user = User::where('name', $updatedUser['name'])->first();
        $this->assertNotNull($user);
        $this->assertFalse($user->is_admin);
    }

    public function test_custom_error_message()
    {
        $response = $this->followingRedirects()->post('buildings');
        $response->assertStatus(200);
        $response->assertSee('Please enter the name');
    }

    public function test_custom_validation_rule()
    {
        $response = $this->post('articles', ['title' => 'lowercase']);
        $response->assertSessionHasErrors([
            'title' => 'The title does not start with an uppercased letter',
        ])->assertStatus(302);

        $response = $this->post('articles', ['title' => 'Uppercase']);
        $response->assertStatus(200);
    }
}
