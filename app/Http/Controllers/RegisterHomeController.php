<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\Permission\Models\Role; // Add this use statement

class RegisterController extends Controller
{
    use RegistersUsers;

    // ...

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Check if the user's email matches the special email you want to assign the admin role to
        if ($user->email === 'tanmoy@admin.com') {
            $user->assignRole('admin');
            dd('Role assigned successfully'); // Add this line for debugging
        }

        event(new Registered($user));

        return $user;
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        if ($user->email === 'tanmoy@admin.com') {
            $adminRole = Role::where('name', 'admin')->first();
            if ($adminRole) {
                $user->assignRole($adminRole);
            }
        }

        return redirect('/'); // Redirect to a default page for non-admin users
    }

    // ...
}
