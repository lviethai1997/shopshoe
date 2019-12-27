<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Transaction;
use App\Models\Order;
use Illuminate\Pagination\Paginator;


class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $transactions = Transaction::Paginate();

        $viewData = [
            'transactions' => $transactions
        ];
        return view('admin::transaction.index',$viewData);
    }

    public function viewOrder(Request $request,$id)
    {
        if($request->ajax())
        {
            $orders = Order::with('product')->where('or_transaction_id',$id)->get();

            $html  = view('admin::components.order',compact('orders'))->render();
            return \response()->json($html);
        }
    }
}
