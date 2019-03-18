<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrolment;
use Auth;
use Hash;
use Closure;
use View;
use Storage;


class paymentController extends Controller
{

    public static function check($token)
    {
        $enrollData = Enrolment::where([
            'student_id' => Auth::id(),
            'payment_token' => $token
        ]);

        if(!empty($enrollData->value('token_key')))
        {
            if(!Hash::check( $token ,$enrollData->value('token_key')))
            {
                return abort(403,'Payment problem');
            }
            return Closure::class;
        }
        if(empty($enrollData->value('token_key')))
        {
            return abort(403,'Payment problem');
        }
        if($enrollData->count() == 0)
        {
            return abort(403,'Payment problem');
        }
    }

    // check payment prove
    public static function pay($course_id) : bool
    {
        $paymentProve = Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $course_id,
        ]);
        if($paymentProve->count() == 1){
            if (empty($paymentProve->value('payment_prove')))
            {
                return false;
            }
        }
        return true;
    }

    public function sendProve($course_id ,Request $request)
    {
        $data = $request->validate([
            'prove' => 'required|mimes:jpg,jpeg,png'
        ]);
        $prove = $request->file('prove');
        $payment_prove = Storage::put('proves', $prove);
        Enrolment::where([
            'student_id' => Auth::id(),
            'course_id' => $course_id,
        ])->update([
            'payment_prove' => $payment_prove
        ]);
        return view('message.success',['message' => 'your prove was send with success pleas wait the admin to accept it in 24h']);
    }

}
