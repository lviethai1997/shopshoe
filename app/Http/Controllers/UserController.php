<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends FrontendController
{
    public function index()
    {
        return view('user.index');
    }

    public function updateInfo()
    {
        $user = User::find(get_data_user('web'));

        return view('user.info',compact('user'));
    }

    public function saveUpdateInfo(Request $request)
    {
        User::where('id',get_data_user('web'))
        ->update($request->except('_token'));

        return redirect()->back()->with('success','Cập nhật thông tin thành công !');
    }

    public function saveUpdatePassword(Request $requestPassword)
    {
        if(Hash::check($requestPassword->password_old,get_data_user('web','password')))
        {
            $user =User::find(\get_data_user('web'));
            $user->password = \bcrypt($requestPassword->password);
            $user->save();
            return \redirect()->back()->with('success','Cập nhật thành công!');
        }
        return \redirect()->back()->with('danger','Mật khẩu củ không đúng! ');
    }

    public function UpdatePassword(Request $request)
    {
        return view('user.password');
    }

    public function getProductPay()
    {
        $products = Product::orderBy('pro_pay','DESC')->limit(10)->get();
        return view('user.product',compact('products'));
    }

    public function getProductCare()
    {
        return view('user.product_care');
    }


}
