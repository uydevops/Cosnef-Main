<?php
//Uğurcan Yaş Test Controlleridir 
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test updating user profile.
     *
     * @return void
     */
    public function test_update_user_profile()
    {
        // Kullanıcı oluştur
        $user = User::factory()->create();

        // Yeni kullanıcı bilgileri
        $newUserData = [
            'name' => 'New Name',
            'username' => 'new_username',
            'email' => 'new_email@example.com',
            'phone' => '1234567890',
            'address' => 'New Address',
            'city' => 'New City',
            'country' => 'New Country',
            'postal_code' => '12345',
            'password' => 'new_password',
            'password_confirmation' => 'new_password',
        ];

        // Kullanıcı bilgilerini güncelleme isteği yap
        $response = $this->actingAs($user)->post(route('users.update'), $newUserData + ['id' => $user->id]);

        // Kullanıcı bilgilerinin güncellendiğini doğrula
        $response->assertRedirect();
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => $newUserData['name'],
            'username' => $newUserData['username'],
            'email' => $newUserData['email'],
            'phone' => $newUserData['phone'],
            'address' => $newUserData['address'],
            'city' => $newUserData['city'],
            'country' => $newUserData['country'],
            'postal_code' => $newUserData['postal_code'],
        ]);

        // Şifrenin güncellendiğini doğrula
        $this->assertTrue(Hash::check($newUserData['password'], $user->fresh()->password));
    }
}
