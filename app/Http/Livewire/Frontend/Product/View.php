<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Wishlist;
use illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product;

    public function addToWishList($productid)
        {
            if(Auth::check())
            {
                if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productid)->exists())
                {
                    session()->flash('message','Aleardy added to wishlist');
                    return false;
                }
                $wishlist =Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productid,
                ]);
                session()->flash('message',' wishlist added successfuly');
            }
            else
            {
                session()->flash('message','please login first');
                return false;
            }
    }


    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
