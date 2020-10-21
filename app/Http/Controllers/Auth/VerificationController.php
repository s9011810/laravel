<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MemberChecked;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function send_email(){
        $to_name = '接收者';
        $to_email = 's9011810@gmail.com';
        $data = array('name'=>"Ogbonna Vitalis(sender_name)", "body" => "A test mail");
        Mail::send('email.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject("驗證信");
$message->from('roses9011810@gmail.com','驗證信');
});
    }
    public function resend(Request $request)
    {
        return View('verify/verify_info');
    }
    public function show()
    {
        return View('verify/verify_info');
    }
    public function verify(Request $request)
    {
        $user = User::find($request->route('id'));

        if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if ($user->markEmailAsVerified())
            event(new Verified($user));

        return redirect($this->redirectPath())->with('verified', true);
    }
    public function store($request){
        $users = User::find($request);
      $users->email_verified_at = $users->updated_at;
        $users->save();

    }
}
