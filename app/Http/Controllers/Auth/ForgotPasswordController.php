<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Http\Controllers\FrontendController;

class ForgotPasswordController extends FrontendController
{
    public function getFormResetPassword()
    {
        return view('auth.passwords.email');
    }

    public function sentCodeResetPassword(Request $request)
    {
        $email = $request->email;

        $checkUser = User::where('email',$email)->first();

        if(empty($checkUser))
        {
            return \redirect()->back()->with('danger',"Email không tồn tại!");
        }

        $code = \bcrypt(md5(time().$email));

        $checkUser->code = $code;
        $checkUser->time_code =Carbon::now();
        $checkUser->save();

        $url = Route('get.link.reset.password',['code' => $checkUser->code,'email' => $email]);

        $data =[
            'route' => $url
        ];

        Mail::send('email.reset_password', $data, function($message) use($email){
	        $message->to($email, 'Visitor')->subject('Lấy lại mật khẩu');
	    });

        return \redirect()->back()->with('success',"Đã gửi email cho bạn");
    }

    public function resetPassword(Request $requset)
    {
        $code = $request->code;
        $email = $request->email;

        $checkUser = User::where([
            'code' => $code,
            'email' => $email
        ])->first();

        if(!$checkUser)
        {
            return \redirect('/')->with('danger','Lỗi không nhận dạng!');
        }

        return view('auth.passwords.email');
    }

    public function saveResetPassword(RequestResetPassword $request)
    {
        if($request->password)
        {
            $code = $request->code;
            $email = $request->email;

            $checkUser = User::where([
                'code' => $code,
                'email' => $email
            ])->first();

            if(!$checkUser)
            {
                return \redirect('/')->with('danger','Lỗi không nhận dạng!');
            }

            $checkUser->password = \bcrypt($request->password);
            $checkUser->save();

            return \redirect()->route('get.login')->with('success','Mật khẩu đã thay đổi thành công!, bạn có thể đăng nhập ngay bây giờ!');
        }
    }
}
