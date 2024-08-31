<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PaymentCashController extends Controller
{
    public function index()
    {
            $data_cash = DB::table('payments')
                ->join('users', 'payments.user_id', '=', 'users.id')
                ->leftJoin('memberships', 'payments.membership_id', '=', 'memberships.id') // Menggunakan memberships
                ->select('payments.id as payment_id',
                        'payments.amount',
                        'payments.status',
                        'payments.payment_method',
                        'payments.created_at',
                        'users.name as user_name',
                        'users.id as user_id',
                        'users.phone_number as user_phone',
                        'memberships.id as id_membership',
                        'memberships.start_date as start_date',
                        'memberships.end_date as end_date',
                        )
                ->where('payments.status', 'pending')
                ->where('payments.payment_method', 'cash')
                ->get();
            return view('admin.payment_cash', ['data_cash' => $data_cash]);
    }

    public function cash_acc(Request $request)
    {
        $paymentId = $request->input('payment_id');
        $membershipId = $request->input('id_membership');
        $userId = $request->input('user_id');
        $enddate = $request->input('end_date');
        $startdate = $request->input('start_date');



        // update start date
        $date = Carbon::now();

        DB::table('payments')
            ->where('id', $paymentId)
            ->update(['status' => 'paid']);

        $check_extend = DB::table('memberships')->where('user_id', $membership->user_id)->where('is_active', 1)->pluck('id')->toArray();
        if (count($check_extend) >= 1) {
            DB::table('memberships')->where('id', end($check_extend))->update([
                'is_active' => 1
            ]);
            DB::table('memberships')->where('user_id', $membership->user_id)->whereNotIn('id', $check_extend)->update([
                'is_active' => 0
            ]);

        } else {
            DB::table('memberships')
            ->where('id', $membershipId)
            ->update(['is_active' => 1]);
        }

        DB::table('users')
            ->where('id', $userId)
            ->update(['status' => 'active']);

        DB::table('users')
            ->where('id', $userId)
            ->update(['start_date' => $date]);

        DB::table('users')
            ->where('id', $userId)
            ->update(['end_date' => $enddate]);

        return redirect()->route('admin_cash')->with('success', 'Payment accepted successfully.');
    }

    public function cash_rej(Request $request)
    {
        $paymentId = $request->input('payment_id');
        $membershipId = $request->input('membership_id');
        $userId = $request->input('user_id');

        // Update the payment status to 'REJECTED'
        DB::table('payments')
            ->where('id', $paymentId)
            ->update(['status' => 'expired']);

        return redirect()->route('admin_cash')->with('success', 'Payment rejected successfully.');
    }
}
