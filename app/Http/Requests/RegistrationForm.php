<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Hash;


class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ];
    }

    public function persist()
    {
        //$user = User::create(request(['name', 'email', 'password']));
        //$user = User::create($this->only(['first_name', 'last_name', 'email', 'password']));


         $user = User::create([

            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))

         ]);
        
        auth()->login($user);
        

         //\Mail::to($user)->send(new Welcome($user));
        // redirect to the home page
        return redirect()->home();

        //return redirect('/posts');
    }
}
