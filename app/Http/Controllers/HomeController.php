<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\Order;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $productHot = Product::where([
            'pro_hot' => Product::HOT_ON,
            'pro_active' => Product::STATUS_PUBLIC
        ])->limit(10)->get();

        $categoriesHome = Category::with('products')
        ->where('c_home',Category::HOME)
        ->limit(3)
        ->get();
        $productSuggest=[];
        if (get_data_user('web')) {

            $transactions = Transaction::where(['tr_user_id' => get_data_user('web'),
            ])->pluck('id');

            if (!empty($transactions)) {
                $listId = Order::whereIn('or_transaction_id',$transactions)->distinct()->pluck('or_product_id');

                if (!empty($listId)) {
                    $listIdCategory = Product::whereIn('id',$listId)->distinct()->pluck('pro_category_id');

                    if ($listIdCategory) {
                        $productSuggest = Product::whereIn('pro_category_id',$listIdCategory)->limit(9)->get();
                    }
                }



            }


        }

        $viewData =[
            'productHot' => $productHot,
            'categoriesHome' => $categoriesHome,
            'productSuggest' => $productSuggest
        ];
        return view('home.index',$viewData);
    }

    public function renderProductView(Request $request)
    {
        if($request->ajax())
        {
            $listID = $request->id;
            $products = Product::whereIn('id',$listID)->get();
            $html = view('components.product_view',compact('products'))->render();

            return response()->json(['data' => $request->id]);
        }

    }
}
