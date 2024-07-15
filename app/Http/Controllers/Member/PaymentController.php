<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Member\Notification;
use App\Models\Donation; // Add this line to import the Donation model if it's not already imported.

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $amount = DB::table('packages')->where('id', $request->submit_package_id)->pluck('price')->first();
        $user = DB::table('users')->where('id', $request->submit_user_id)->first();
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $amount,
            ),
            'customer_details' => array(
                'name' => $user->name,
                'email' => 'budi.pra@example.com',
                'phone' => $user->phone_number,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        // return response()->json($this->response);
        return view('member.payment.payment_details', compact('snapToken'));
    }

    public function payment_callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                // change status in database
            }
        }
    }

}
