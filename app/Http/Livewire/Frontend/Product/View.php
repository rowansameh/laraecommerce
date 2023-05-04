<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Wishlist;
use illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $quantityCount =1;

    public function addToWishList($productid)
      {
          if(Auth::check())
          {
              if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productid)->exists())
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
                'product_id' => $productid,
              ]);
              $this ->emit('wishlistAddedUpdated');
              session()->flash('message',' Wishlist Added successfuly');
              $this->dispatchBrowserEvent('message', [
                 'text' => 'wishlist added successfuly',
                'type' => 'success',  
                 'status' => 200
            ]);
          }
              
              }
             else
              {
            session()->flash('message','please login first');
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
