<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Wishlist;
use illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $quantityCount =1;

    public function addToWishList($productId)
        {
            if(Auth::check())
            {
                if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
                {
                    session()->flash('message','Aleardy added to wishlist');

                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Aleardy added to wishlist',
                        'type' => 'warning',
                        'status' => 409
                    ]);
                    return false;
                }
                else
                {
                $wishlist =Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId,
                ]);
                $this ->emit('wishlistAddedUpdated');
                session()->flash('message',' Wishlist Added successfuly');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'wishlist Added Successfuly',
                    'type' => 'success',
                    'status' => 200
                ]);
            }

                }
                else
                {
                session()->flash('message','please login first');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Please Login to continue',
                    'type' => 'info',
                    'status' => 401
                ]);
                return false;
                }


    }

    public function incrementQuantity()
    {
        if($this->quantityCount <10){
            $this->quantityCount++;
        }

    }

    public function decrementQuantity()
    {
        if($this->quantityCount >1){
        $this->quantityCount--;
    }

    }

    public function addToCart(int $productId)
    {
        if(Auth::check())
        {
            if($this->product->where('id',$productId)->where('status','0')->exists())
            {
                if(Cart::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Product Already Added to Cart',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }
                else
                {
                    if($this->product->quantity > 0)
                    {
                        if($this->product->quantity > $this->quantityCount)
                        {
                            //Insert Product To Cart
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productId,
                                'quantity' => $this->quantityCount
                            ]);
                            $this->emit('CartAddedUpdated');
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Product Added to Cart',
                                'type' => 'success',
                                'status' => 200
                            ]);
                        }
                        else
                        {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Only'.$this->product->quantity.'Quantity Available',
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        }
                    }
                    else
                    {
                        session()->flash('message','Out of Stock');
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Out of Stock',
                            'type' => 'warning',
                            'status' => 404
                        ]);
                    }
                }
            }
            else
            {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product Does Not Exist',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }

        }
        else
        {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login to add to cart',
                'type' => 'info',
                'status' => 401
            ]);
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
