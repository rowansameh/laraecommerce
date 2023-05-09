<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistShow extends Component
{
    public function removeWishLlistItem(int $wishlistId)
    {
        Wishlist::where('user_id', auth()->user()->id)->where('id',$wishlistId)->delete();
        $this->emit('wishlistAddedUpdated');
        session()->flash('message','Wishlist Item Removed Successfully');

        $this->dispatchBrowserEvent('message', [
            'text' => 'Wishlist Item Removed Successfully',
            'type' => 'success',
            'status' => 200

        ]);
    }

    public function moveToCart( int $rowId)
    {
        if(Auth::check())
        {
            if($this->wishlist->where('id',$rowId)->where('status','0')->exists())
            {
                if(Cart::where('user_id',auth()->user()->id)->where('id',$rowId)->exists())
                {
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Product Already Added to Cart',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }
                else
                {
                    if($this->wishlist->quantity > 0)
                    {
                        if($this->wishlist->quantity > $this->quantityCount)
                        {
                            //Insert Product To Cart
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $rowId,
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
                                'text' => 'Only'.$this->wishlist->quantity.'Quantity Available',
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
        Wishlist::where('user_id', auth()->user()->id)->where('id',$rowId)->delete();

        $this->emit('wishlistAddedUpdated');
        session()->flash('message','Wishlist Item Added to Cart Successfully');

        $this->dispatchBrowserEvent('message', [
            'text' => 'Wishlist Item Added to Cart Successfully',
            'type' => 'success',
            'status' => 200
        ]);
        // $item = Cart::instance('wishlist')->get($rowId);
        // Cart::instance('wishlist')->remove($rowId);
        // Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\produt');
        // $this->emit('wishlist-count','wishlistAddedUpdated');
        // $this->emit('cart-count','wishlistAddedUpdated');
    }

    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.wishlist-show',[
            'wishlist' => $wishlist,

        ]);
    }
}

