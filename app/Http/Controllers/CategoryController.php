<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getListProduct(Request $request)
    {
        $url = $request->segment(2);
        $url = \preg_split('/(-)/i',$url);

        if($id = array_pop($url))
        {
            $products = Product::where([
                'pro_category_id' => $id,
                'pro_active' => Product::STATUS_PUBLIC
            ]);

            if($request->price)
            {
                $price = $request->price;
                switch($price)
                {
                    case '1':
                    $products->where('pro_price','<',100);
                    break;
                    case '2':
                    $products->whereBetween('pro_price',[100,300]);
                    break;
                    case '3':
                    $products->whereBetween('pro_price',[300,500]);
                    break;
                    case '4':
                    $products->whereBetween('pro_price',[500,900]);
                    break;
                    case '5':
                    $products->where('pro_price','>',1000);
                    break;
                }
            }

            if($request->orderby)
            {
                $orderby = $request->orderby;
                switch($orderby)
                {
                    case 'desc':
                        $products->orderBy('id','DESC');
                    break;
                    case 'asc':
                        $products->orderBy('id','ASC');
                    break;
                    case 'price_max':
                        $products->orderBy('pro_price','ASC');
                    break;
                    case 'price_min':
                        $products->orderBy('pro_price','DESC');
                    break;
                    default:
                        $products->orderBy('id','DESC');
                }
            }

            $products= $products->orderBy('id',"DESC")->paginate(9);

            $cateProduct = Category::find($id);

            $viewData= [
              'products' => $products,
              'cateProduct' => $cateProduct,
              'query' => $request->query()
            ];
            return view('product.index',$viewData);
        }

        if ($request->k) {
            $products = Product::where([
                'pro_active' => Product::STATUS_PUBLIC
            ])->where('pro_name','like','%'.$request->k.'%');

            $products = $products->paginate(3);
            $viewData = [
                'products' => $products,
                'query' => $request->query(),
            ];
            return view('product.index',$viewData);
        }
        return \redirect('/');
    }
}
