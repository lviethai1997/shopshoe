<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Rating;

class AdminRatingController extends Controller
{
    public function index()
    {
        $ratings =  Rating::with('user:id,name','product:id,pro_name')->paginate();
        $viewData = [
            'ratings' => $ratings
        ];
        return view('admin::rating.index',$viewData);
    }

    public function action($action,$id)
   {
        if($action)
        {
            $rating = Rating::find($id);
            switch($action)
            {
                case 'delete':
                    $rating->delete();
                    break;
            }

        }

        return redirect()->back();
   }
}
