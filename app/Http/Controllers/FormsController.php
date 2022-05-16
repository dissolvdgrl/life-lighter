<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class FormsController extends Controller
{
    public $regex = "/(http|ftp|https):\/\/([\w_-]+(?:(?:\.[\w_-]+)+))([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])?/";
    public function contact_form(Request $request)
    {
        if(preg_match($this->regex, $request->input("message")))
        {
            return ['error' => "It looks like you tried to submit illegal characters in the message field. For security reasons, we do not allow URLS. Please remove any URLs and try again."];
        }
        elseif ($request->input("website"))
        {
            return ['error' => "Oops, our security system detected suspicious activity. If you believe this is a mistake, please send me an email instead."];
        }
        else
        {
            $this->validate(request(), [
                'email' => 'required|email',
                'message' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'subject' => 'required'
            ]);

            $data = [
                'email' => $request->input('email'),
                'clientMessage' => $request->input('message'),
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'subject' => $request->input('subject')
            ];

            Mail::send('mail.contact', $data, function($email) use ($data) {
                $email->to(config('mail.to.address'), config('mail.to.name'))->subject($data['subject']);
                $email->from(config('mail.from.address'), 'Life Lighter Website');
            });

            return ['success' => "Thank you for your query, I will be in touch with you soon!"];
        }
    }
}
