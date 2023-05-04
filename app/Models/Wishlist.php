<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Wishlist extends Model
{


    protected $table ='wishlists';

    protected $fillable = [
        'user_id',
        'product_id'
    ];

    /**
     * get the user that owns the Wishlist
     *
     *  @return \Illuminate\Database\Eloquent\Factories\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
            return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
