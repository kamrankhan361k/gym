<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Classes\sendWA;
// use Session;

class AuthController extends Controller
{
    public function send_otp()
    {
        return view('member.auth.send_otp');
    }

    public function get_otp(Request $request)
    {
        $phone_number = $request->phone_number;
        $user_id= User::where('phone_number', $phone_number)->pluck('id')->first();
        $validator = Validator::make($request->only('phone_number'), [
            'phone_number' => ['required', 'string', 'min:10', 'max:13']
        ]);

        if ($validator->fails()) {
            $status = false;
            $message = $validator->errors()->all();
        } if ($user_id == null) {
            $status = false;
            $message = 'Phone number not found.';
        } else {
            $otp = rand(1000, 9999);
            $expired_at = now()->addMinutes(5);
            $insert_otp = DB::table('otp')->insert([
                'user_id' => $user_id,
                'otp' => $otp,
                'expired_at' => $expired_at,
            ]);
            // $send = new sendWA();
            // $curl = $send->send($phone_number, $otp);
        }

        $data = [
            'status' => $status ?? true,
            'message' => $message ?? 'OTP has been sent.',
            'data' => [
                'otp' => $otp ?? null,
                'wablas' => $curl ?? null,
            ]
        ];

        return response()->json($data, 200);
    }

    public function verify_otp($phone_number)
    {
        return view('member.auth.login');
    }

    public function login (Request $request)
    {
        $phone_number = $request->phone_number;
        $otp = $request->otp;
        $validator = Validator::make($request->only('otp'), [
            'otp' => ['required', 'numeric', 'digits:4']
        ]);

        if ($validator->fails()){
            $message = $validator->errors()->all();
        }

        $user_id = User::where('phone_number', $phone_number)->pluck('id')->first();
        $otp_exists = DB::table('otp')
            ->where('otp', $otp)
            ->where('user_id', $user_id)
            // ->where('expired_at', '>=', now())
            ->first();

        if ($otp_exists == null) {
            return response()->json([
                'status' => false,
                'message' => 'OTP not found.'
            ], 404);
        }

        if ($otp_exists != null && $user_id != null) {
            $user = User::find($user_id);
            Auth::login($user);
            return response()->json([
                'status' => true,
                'message' => 'Login success.',
            ], 200);
        }
    }

    public function logout()
    {
        // Session::flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
