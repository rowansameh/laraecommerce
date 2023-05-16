

    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 mt-3">
                        <div class="bg-white border" wire:ignore>
                            @if($product->productImages)
                        <!-- <img src="{{ asset($product->productImages[0]->image) }}"  class="w-100" alt="Img"> -->

                            <div class="exzoom" id="exzoom">

                            <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                            @foreach ($product->productImages as $itemImg)
                                <li><img src="{{ asset($itemImg->image) }}"/></li>
                            @endforeach
                            </ul>
                        </div>

                        <div class="exzoom_nav"></div>
                        <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                        </p>
                        </div>

                            @else
                            No image Added
                            @endif


                            @if($product->quantity)
                            <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                            @else
                            <label class="btn-sm py-1 mt-2 text-white bg-danger">out of Stock</label>
                            @endif

                        </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}

                        </h4>
                        <hr>
                        <p class="product-path">
                            Home /{{ $product->category->name }}  /  {{ $product->name }}
                        </p>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}" readonly class="input-quantity" />
                                <span class="btn btn1"wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">

                            <button type="button" wire:click="addToCart({{$product->id}})" class="btn btn1">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>


                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1">
                                <i class="fa fa-heart"></i> Add To Wishlist
                            </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {!! $product->small_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                            {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



@push('scripts')
<script>

$(function(){

    $("#exzoom").exzoom({
    "navWidth": 60,
    "navHeight": 60,
    "navItemNum": 5,
    "navItemMargin": 7,
    "navBorder": 1,
    "autoPlay": false,
    "autoPlayTimeout": 2000
     });

   });
</script>
@endpush
