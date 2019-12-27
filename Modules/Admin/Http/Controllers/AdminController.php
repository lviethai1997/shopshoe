<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Rating;
use App\Models\Contact;
use App\Models\Transaction;
use Carbon\Carbon;
class AdminController extends Controller
{

    public function index()
    {
        $ratings =  Rating::with('user:id,name','product:id,pro_name')->limit(10)->get();
        $contacts = Contact::limit(10)->get();

        //doanh thu ngay
        $moneyDay = Transaction::whereDay('updated_at',date('d'))->sum('tr_total');
        //where('tr_status','')

        $moneyMonth = Transaction::whereMonth('updated_at',date('m'))->sum('tr_total');
        $moneyYear = Transaction::whereYear('updated_at',date('Y'))->sum('tr_total');


        $viewData = [
            'ratings' => $ratings,
            'contact' => $contacts,
            'moneyDay' => $moneyDay,
            'moneyMonth' => $moneyMonth,
            'moneyYear' => $moneyYear
        ];

        return view('admin::index',$viewData);
    }
}

