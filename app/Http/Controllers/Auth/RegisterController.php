<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'county' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'max:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],

        $messages = [
            'first_name.required' => 'A sikeres regisztrációhoz szükséges lesz a keresztneved megadása!',
            'first_name.string' => 'A keresztneved a valós keresztneved legyen!',
            'first_name.max:255' => 'A keresztneved maximum 255 karakter lehet!',

            'last_name.required' => 'A sikeres regisztrációhoz szükséges lesz a vezetékneved megadása!',
            'last_name.string' => 'A vezetékneved a valós vezetékneved legyen!',
            'last_name.max:255' => 'A vezetékneved maximum 255 karakter lehet!',

            'county.required' => 'A megye kiválasztása kötelező!',
            'county.string' => 'Valós megyenevet adj meg!',
            'county.max:255' => 'A megye maximum 255 karakter lehet!',

            'city.required' => 'A sikeres regisztrációhoz szükséges lesz a város megadása!',
            'city.string' => 'Valós városnevet adj meg!',
            'city.max:255' => 'A város maximum 255 karakter lehet',

            'zip.required' => 'A sikeres regisztrációhoz szükséges lesz az irányítószám megadása!',
            'zip.max:4' => 'Az iránytószám maximum 4 karakterből állhat!',

            'email.required' => 'Az Emailcím kiválasztása kötelező!',
            'email.string' => 'Az Emailcímnek valósnak kell lennie!',
            'email.email' => 'Az Emailcímnek valósnak kell lennie!',
            'email.unique' => 'Már regisztráltak ilyen email címmel!',
            'email.max:255' => 'Az Emailcím maximum 255 karakter lehet!',

            'password.required' => 'A jelszavad kiválasztása kötelező!',
            'password.min:8' => 'A jelszavadnak minimum 8 karakternek kell lennie!',
            'password.confirmed' => 'A két jelszó nem egyezik meg!',
            
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'county' => $data['county'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
