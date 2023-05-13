@extends('layouts.app')

@section('title', 'Search Results')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4>Search Results</h4>
                <div class="underline mb-4"></div>
            </div>

            <div class="col-md-10">
                <form action="{{ url('/search') }}" method="GET">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" value="{{ request()->input('search') }}" placeholder="Search...">
                    </div>
                    <div class="form-group">
                        <select name="category" class="form-control">
                            <option value="">All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request()->input('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="sort" class="form-control">
                            <option value="">Sort By</option>
                            <option value="price_low_high" {{ request()->input('sort') == 'price_low_high' ? 'selected' : '' }}>
                                Price: Low to High
                            </option>
                            <option value="price_high_low" {{ request()->input('sort') == 'price_high_low' ? 'selected' : '' }}>
                                Price: High to Low
                            </option>
                            <!-- Add more sorting options as needed -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>

            @forelse ($searchProducts as $productItem)
                <div class="col-md-10">
                    <div class="product-card">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="product-card-img">
                                    <label class="stock bg-danger">New</label>
                                    @if ($productItem->productImages->count() > 0)
                                        <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                            <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="product-card-body">
                                    <p class="product-brand">{{ $productItem->brand }}</p>
                                    <h5 class="product-name">
                                        <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                            {{ $productItem->name }}
                                        </a>
                                    </h5>
                                    <div>
                                        <span class="selling-price">${{ $productItem->selling_price }}</span>
                                        <span class="original-price">${{ $productItem->original_price }}</span>
                                    </div>
                                    <p style="height: 45px; overflow: hidden">
                                        <b>Description: </b> {{ $productItem->description }}
                                    </p>
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}" class="btn btn-outline-primary">
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12 p-2">
                    <h4>No Such Products Found</h4>
                </div>
            @endforelse

            <div class="col-md-10">
                {{ $searchProducts->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
