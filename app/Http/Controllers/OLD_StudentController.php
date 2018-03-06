<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class StudentController extends Controller
// {
    //
// }

// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Requests;
// use App\User;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

// class RegisterController extends Controller
class StudentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            // 'profile_picture' => 'nullable|image', 
            'formation' => 'required|string|max:50',
            'place' => 'required|string|max:50',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Student
     */
    protected function create(array $data)
    {
        return Student::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            // 'profile_picture' => "http://gravatar.com/avatar/" . md5(strtolower(trim($data['email']))) . "?d=monsterid"
            // 'profile_picture' => $data['avatar'],
            'formation' => $data['formation'],
            'place' => $data['place']
        ]);
    }
}
