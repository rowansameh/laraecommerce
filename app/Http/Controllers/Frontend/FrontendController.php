<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    private $categories;

    public function __construct()
    {
        $this->categories = Category::where('status', '0')->get();
        View::share('categories', $this->categories);
    }

    public function index()
    {

        $sliders = Slider::where('status', '0')->get();
        return view('frontend.index', compact('sliders'));
    }
    public function searchproducts(Request $request)
    {
        $query = Product::query();

        // Filter by search keyword
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        // Sort by price
        if ($request->has('sort')) {
            $sort = $request->input('sort');
            if ($sort === 'price_low_high') {
                $query->orderBy('selling_price', 'asc');
            } elseif ($sort === 'price_high_low') {
                $query->orderBy('selling_price', 'desc');
            }
        }

        $searchProducts = $query->paginate(15);

        return view('frontend.pages.search', compact('searchProducts'))->withQuery($request->input());
    }

    public function categories()
    {
        $categories = $this->categories;
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            return view('frontend.collections.products.index', compact('category'));
        } else {
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if ($category) {
            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
            if ($product) {
                return view('frontend.collections.products.view', compact('product', 'category'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }

}
