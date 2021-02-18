<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function sign(){
            $courses = Course::where('status','active')->get();
            return view('auth.signup', compact('courses'));
        }
        public function login(){
            return view('auth.login');
        }

        public function LoginDashboard(Request $request){
            request()->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, true)) {

//                return redirect()->intended('dashboard');
                dd($credentials);
            }
//                dd($credentials);

            return redirect("login")->with('Success','You have entered invalid credentials');
        }

        public function store(Request $request){

            $request->validate([
                'full_name' => 'required',
                'email' => 'required|unique:users',
                'city' => 'required',
                'phone' => 'required',
                'password' => 'required|min:8',
                'course_id' => 'required'
            ]);

            $students = new Student();
            $students->full_name = $request->full_name;
            $students->email = $request->email;
            $students->city = $request->city;
            $students->phone = $request->phone;
            $students->password = Hash::make($request->password);
            $students->course_id = $request->course_id;
            $students->save();

           return redirect()->route('login')->with('Success','Ro\'yhatdan o\'tdingiz ');
        }

        public function dashboard(){
            if (Auth::check()){
                return view('private.dashboard');
            }
           return redirect('login')->with('success','password requires');
        }
}
