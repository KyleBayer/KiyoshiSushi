<?php
 
namespace App\Http\Controllers\Auth;
<<<<<<< HEAD

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

=======
 
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Mail;
 
>>>>>>> 755f57ec6500e67644dade0ad3ce55e6b6d93c01
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
<<<<<<< HEAD

=======
 
>>>>>>> 755f57ec6500e67644dade0ad3ce55e6b6d93c01
    use RegistersUsers;
 
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';
 
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'email2' => 'string|email|max:255|unique:users',
        ]);
    }
 
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
<<<<<<< HEAD
            'first_name' => $data['name'],
            'last_name' => $data['name'],
=======
            'name' => $data['name'],
<<<<<<< HEAD
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
=======
>>>>>>> d40734c97cfff6564c5c9678bb9322a377ba9e0a
            'email' => $data['email'],
            'activation_key' => $data['activation_key'],
            'password' => bcrypt($data['password']),
            'email2' => $data['email'],

        ]);
    }
 
    /**
     * Override default register method from RegistersUsers trait
     *
     * @param array $request
     * @return redirect to $redirectTo
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
 
        //add activation_key to the $request array
        $activation_key = $this->getToken();
        $request->request->add(['activation_key' => $activation_key]);
 
        $user = $this->create($request->all());
 
        //$this->guard()->login($user);
 
        //write a code for send email to a user with activation link
        $data = array('name' => $request['name'], 'email' => $request['email'],  'activation_link' => url('/activation/' . $activation_key));
 
        Mail::send('emails.mail', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->subject('Activate Your Account');
            $message->from('s.sajid@artisansweb.net');
        });
 
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath())->with('success', 'We have sent an activation link on your email id. Please verify your account.');
    }
 
    /**
     * Generate a unique token
     *
     * @return unique token
     */
    public function getToken() {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }
 
    /**
     * Activate the user account
     *
     * @param string $key
     * @return redirect to login page
     */
    public function activation($key)
    {
        $auth_user = User::where('activation_key', $key)->first();
 
        if($auth_user) {
            $auth_user->status = 'active';
            $auth_user->save();
            return redirect('login')->with('success', 'Your account is activated. You can login now.');
        } else {
            return redirect('login')->with('error', 'Invalid activation key.');
        }
    }
}
>>>>>>> 755f57ec6500e67644dade0ad3ce55e6b6d93c01
