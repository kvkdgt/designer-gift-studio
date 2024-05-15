<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Enquiries;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin/login');
    }

    public function signup(Request $request)
    {


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->plainTextToken;

            return to_route('admin/dashboard');
        } else {
            $request->session()->put('error', 'Invalid Credentials');
            return to_route('login');
        }
    }

    public function dashboard(Request $request)
    {
        return view('admin/dashboard');
    }

    public function enquiries()
    {
        $enquiries = Enquiries::get();
        return view('admin/enquiries', ['enquiries' => $enquiries]);
    }

    public function addEnquiry(Request $request)
    {
        $user = Enquiries::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $request->session()->put('success', 'Message Sent!!!');
        return to_route('/');
    }
    public function deleteEnquiry($id)
    {
        $enquiry = Enquiries::find($id);
        $enquiry->delete();
        return to_route('admin/enquiries');
    }

    public function viewEnquiry($id)
    {
        $enquiry = Enquiries::find($id);
        return view('admin/view', ['enquiries' => $enquiry]);
    }

    public function logout()
    {
        return to_route('login');

    }
}
