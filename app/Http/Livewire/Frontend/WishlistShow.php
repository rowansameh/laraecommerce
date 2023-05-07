<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Wishlist;

class WishlistShow extends Component
{
    // public function addToCart(int $wishlistId)
    // {
    //     if($this->wishlistItem->where('id',$wishlistId)->where('status','0')->exists())
    //     {
    //         if($this->wishlistItem->quantity > 0)
    //         {
    //             if($this->wishlistItem->quantity > $this->quantityCount)
    //             {
    //                 Cart::create([
    //                     'user_id' => auth()->user()->id,
    //                     'product_id' => $wishlistId,
    //                     'quantity' => $this->quantityCount
    //                 ]);
    //                 session()->flash('message','Item Added to Cart Successfully');
    //             }
    //             else
    //             {
    //                 session()->flash('message','Only'.$this->wishlistItem->quantity.'Quantity Available');
    //             }
    //         }
    //         else
    //         {
    //             session()->flash('message','Product is Out Of Stock');
    //         }
    //     }
    //     else
    //     {
    //         session()->flash('message','Product Does not Exist');
    //     }
    // }

    

    public function addtoCart(int $cartId)
    {

        
    }
    
        

    
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

    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.wishlist-show',[
            'wishlist' => $wishlist
        ]);
    }
}

