<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;

class ProductDetailController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function productDetail(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);

        if($id= array_pop($url))
        {
            $productDetail = Product::where('pro_active',Product::STATUS_PUBLIC)->find($id);
            $cateProduct = Category::find($productDetail->pro_category_id);
            $ratings = Rating::with('user:id,name')->where('ra_product_id',$id)->orderBy('id',"DESC")->paginate(4);

            $viewData = [
                'productDetail' => $productDetail,
                'cateProduct' => $cateProduct,
                'ratings' => $ratings
            ];

            return view('product.detail',$viewData);
        }
    }
}
