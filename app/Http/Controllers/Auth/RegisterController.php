<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

public function showregister(){
    return view('auth.register');
}

    public function register(Request $request){

        
        if($request->ajax()){

            $rules = [
                'name' => 'required',
                'email'=>'required|email',
                'password'=>'required',
                "password_confirmation"=>"required|same:password|min:8",
			];
			
			$validator = \Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				$message = [];
				$messages_l = json_decode(json_encode($validator->messages()), true);
				foreach ($messages_l as $msg) {
					$message= $msg[0];
					break;
				} 	
				return response(array("error" => true, "msg" => $message));
						
			}else{

				try{

                    $userData = User::where('email',$request->email)->first();
                    
                    if(!$userData){
                        $user = \App\Models\User::create([
                            'name' => $request->post('name'),
                            'email' => $request->post('email'),
                            'user_type' => "Customer",
                            'designation_id' => "2",
                            'password' => Hash::make($request->password),
                        ]);

                    }else{

                        return response(array('error'=>true,"msg" =>'User already exits'));
                    }
				}catch (\Exception $e){ 

                    return response(array("error"=> true, "msg" => $e->getMessage())); 
				}
			}

        }else{

            return view('auth.register');
        }
			
			 
    }

  
}
