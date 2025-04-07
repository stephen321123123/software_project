<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Http\Testing\File as UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrganizationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if any user can create an organization.
     *
     * @return void
     */
        public function test_any_user_can_create_organization()
        {
            // Create a user and authenticate them
            $user = User::factory()->create();
            $this->actingAs($user);
        
            // Disable image validation temporarily
            $response = $this->withoutMiddleware()
                             ->post('/organizations', [
                                 'name' => 'Test Organization',
                                 'description' => 'Test Description',
                                 'url' => 'https://fake.com',
                                 'organization_type' => 'Forestry',
                                 'contact' => '818367378',
                                 'email' => 'info@faketest.ie',
                                 'image' => $fakeImage,  // Remove or comment out this line
                             ]);
        
            // Assert that the response redirects to the organizations index (or your desired route)
            $response->assertRedirect(route('organizations.index'));
        
            // Assert the organization was successfully created in the database
            $this->assertDatabaseHas('organizations', [
                'name' => 'Test Organization',
                'description' => 'Test Description',
                'url' => 'https://fake.com',
                'organization_type' => 'Forestry',
                'contact' => '818367378',
                'email' => 'info@faketest.ie',
            ]);
        }
}
