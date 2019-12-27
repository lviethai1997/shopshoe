<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use  App\User;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $users = User::whereRaw(1);

        $users= $users->orderBy('id','DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];
        return view('admin::user.index',$viewData);
    }

    public function action(Request $request,$action,$id)
    {
        $massges='';
        if($action)
        {
            $category = Category::find($id);
            switch($action)
            {
                case 'delete':
                    $category->delete();
                    $massges="Xoá dữ liệu thành công";
                    break;
                case 'active':
                    $category->c_active = $category->c_active ? 0 : 1;
                    $category->save();
                    break;
                case 'home':
                    $category->c_home = $category->c_home ? 0 : 1;
                    $category->save();
                    break;
            }
        }

        return redirect()->back()->with('success',$massges);
    }


}
