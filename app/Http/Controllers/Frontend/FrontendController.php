<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
<<<<<<< HEAD
use App\Models\Product;
=======
use App\Models\product;
use App\Models\Category;
>>>>>>> 9b00e5f295a5dad36c34e22393161b02982f0437
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;


class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status','0')->get();
        return view('frontend.index', compact('sliders'));
    }


<<<<<<< HEAD
    public function searchproducts(Request $request)
    {
       if($request->search){

        $searchProducts = Product::where('name', 'LIKE', '%' . $request->search . '%')->latest()->paginate(15);
        return view('frontend.pages.search', compact('searchProducts'));
       }else{

        return redirect()->back()->with('message','Empty Search');
       }
    }


=======
>>>>>>> 9b00e5f295a5dad36c34e22393161b02982f0437
    public function categories()
    {
        $categories = Category::where('status','0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category){

            return view('frontend.collections.products.index', compact('category'));
        }else{
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category){

            $product = $category->products()->where('slug',$product_slug)->where('status','0')->first();
            if($product)
        {
            return view('frontend.collections.products.view', compact('product','category'));
        }else{
            return redirect()->back();
        }

        }else{
            return redirect()->back();
        }
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }

}
