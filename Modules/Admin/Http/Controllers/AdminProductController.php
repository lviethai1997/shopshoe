<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;


class AdminProductController extends Controller
{
   public function index()
   {
       $products = Product::with('category:id,c_name')->paginate();

       $viewData = [
           'products' => $products
       ];

       return view('admin::product.index',$viewData);
   }

   public function create()
   {
       $categories = $this->getCategories();
       return view('admin::product.create',compact('categories'));
   }

   public function store(RequestProduct $requestProduct)
   {
        $this->InsertOrUpdate($requestProduct);
        return redirect()->back();
   }

   public function update(RequestProduct $requestProduct,$id)
   {
        $this->InsertOrUpdate($requestProduct,$id);
        return redirect()->back();
   }

   public function edit($id)
    {
        $product = Product::find($id);
        return view('admin::product.update',compact('product'));

    }


   public function getCategories()
   {
       return Category::all();
   }

   public function InsertOrUpdate($requestProduct,$id='')
   {
        $product = new Product();

        if($id)
        {
            $product = Product::find($id);
        }
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = str_slug($requestProduct->pro_name);
        $product->pro_category_id = $requestProduct->pro_category_id;
        $product->pro_title_seo = $requestProduct->pro_title_seo ? $requestProduct->pro_title_seo : $requestProduct->pro_name;
        $product->pro_description_seo = $requestProduct->pro_description_seo ? $requestProduct->pro_description_seo : $requestProduct->pro_name;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_description = $requestProduct->pro_description;
        $product->pro_content = $requestProduct->pro_content;
        $product->pro_number = $requestProduct->pro_number;

        if( $requestProduct->hasFile('avatar'))
        {
            $file = upload_image('avatar');

            if(isset($file['name']))
            {
                $product->pro_avatar = $file['name'];
            }
        }

        $product->save();
   }

   public function action($action,$id)
   {
        if($action)
        {
            $product = Product::find($id);
            switch($action)
            {
                case 'delete':
                    $product->delete();
                    break;
                case 'active':
                    $product->pro_active = $product->pro_active ? 0 : 1;
                    $product->save();
                    break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot ? 0 : 1;
                    $product->save();
                    break;
            }

        }

        return redirect()->back();
   }
}
