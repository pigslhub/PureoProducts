<?php

namespace App\Http\Controllers\Student\Auth;

use App\School;
use App\Notifications\StudentRegNotification;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
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
    protected $redirectTo = '/student';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student');
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
            'roll_no' => ['required', 'string', 'unique:students'],
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('student.auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'roll_no' => ['required', 'string', 'unique:students'],
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $student = Student::create($request->except('password'));
        $student->update([
            'password' => Hash::make($request['password'])
        ]);
        /*$student = Student::create([
            'client_id' => $request['client_id'],
            'term_id' => $request['term_id'],
            'grade_id' => $request['grade_id'],
            'classs_id' => $request['classs_id'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'roll_no' => $request['roll_no'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'gender' => $request['gender'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'suite' => $request['suite'],
            'city' => $request['city'],
            'country_id' => $request['country_id'],
            'state_id' => $request['state_id'],
            'zip' => $request['zip'],
        ]);*/

        $school = School::where('client_id', $request['client_id'])->first();
        $school->notify(new StudentRegNotification($student, 'created'));

        return redirect(route('student.login'))->with('success', 'Successfully registered.');
    }

    /*protected function create(array $data)
    {
        $student = Student::create([
            'client_id' => $data['client_id'],
            'term_id' => $data['term_id'],
            'grade_id' => $data['grade_id'],
            'classs_id' => $data['classs_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'roll_no' => $data['roll_no'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'suite' => $data['suite'],
            'city' => $data['city'],
            'country_id' => $data['country_id'],
            'state_id' => $data['state_id'],
            'zip' => $data['zip'],
        ]);

        $school = School::where('client_id', $data['client_id'])->first();
        $school->notify(new StudentRegNotification($student, 'created'));

        return $student;
    }*/
}
