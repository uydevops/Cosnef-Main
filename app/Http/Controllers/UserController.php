<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{



    public function index()
    {
        return view('user.index');
    }

    public function updateUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->postal_code = $request->postal_code;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('image')) {
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $user->image = 'images/' . $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Kullanıcı bilgileri başarıyla güncellendi.');
    }
    public function addUser(Request $request)
    {
        // Kullanıcı bilgilerini al
        $userData = $request->only(['name', 'username', 'email', 'phone', 'address', 'city', 'country', 'postal_code']);
        $userData['password'] = Hash::make($request->password);
    
        $user = new User($userData); // User modeli oluştur
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $user->image = 'images/' . $imageName;
        } else {
            $user->image = 'https://via.placeholder.com/150';
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'Kullanıcı başarıyla eklendi.');
    }


    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Kullanıcı başarıyla silindi.');
    }
}
