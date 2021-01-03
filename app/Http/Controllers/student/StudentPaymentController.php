<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use App\Http\Controllers\Controller;
use App\Models\student\PaymentDetails;

class StudentPaymentController extends Controller
{
        public function payment(Request $request) {
        $parameters = [
            //'transaction_no' => '1233221223322',
            'amount' => $request->amount,
            'firstname' => $request->student_name,
            'email' => $request->student_email,
            'phone' => $request->phno,
            'productinfo' => $request->user_id

        ];

            $order = Indipay::prepare($parameters);
            return Indipay::process($order);
        }
        public function response(Request $request)
        {
            //var_dump($request);
            $response = Indipay::response($request);

            if ($response['status'] === 'success') {
                $user_id = $response['productinfo'];
                $name = $response['firstname'];
                $amount = $response['amount'];
                $payment_mode = "Online";
                $card_number = $response['cardnum'];
                $payu_money_id = $response['payuMoneyId'];

                $payment_details = new PaymentDetails;
                $payment_details->user_id = $user_id;
                $payment_details->name = $name;
                $payment_details->amount = $amount;
                $payment_details->payment_mode = $payment_mode;
                $payment_details->card_number = $card_number;
                $payment_details->payu_money_id = $payu_money_id;
                $payment_details->session = GetDefaultSession();
                $payemnt_success = $payment_details->save();

                if ($payemnt_success) {
                    $student_details = PrayuktySelectOne('App\Models\student\Student','user_id',$user_id);

                    $student_details->payment_status = true;

                    $student_details->save();
                }

                //dd($response);

                return redirect()
                ->route('website.login')
                ->with('success', 'Payment Done! For Security reason your account has been logged out. Please login again!!');
                # code...
            } else {
                //dd($response);
                return redirect()
                ->route('website.login')
                ->with('unsuccess', 'Payment Unsuccessfull! For Security reason your account has been logged out. Please login again!!');
            }

        }
}
