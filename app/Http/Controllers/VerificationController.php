<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Mail;
class VerificationController extends Controller
{
    use VerifiesEmails;
    public function __construct(){
        $this->middleware(['auth','verified']);
    }
//    public function resend(Request $request)
//    {
//        return View('verify.verify_info');
//    }

    public function send_email(){
        $to_name = '接收者';
        $to_email = 's9011810@gmail.com';
        $data = array('name'=>"Ogbonna Vitalis(sender_name)", "body" => "A test mail");
        Mail::send('email.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject("驗證信");
            $message->from('roses9011810@gmail.com','驗證信');
        });
        return redirect()->to('/login');
    }
    public function resend(Request $request)
    {
        return View('verify/verify_info');
    }
    public function show()
    {
        return View('verify/verify_info');
    }
    public function store(Request $request){
        $users = User::find(1);
        $users->name = 'New Flight Name';
        $users->save();
    }
}
