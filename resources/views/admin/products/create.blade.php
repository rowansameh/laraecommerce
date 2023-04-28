@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3> Add Product
                    <a href="{{ url('admin/products') }}" class="btn btn-danger btn-sm text-white float-end">
                    Back
                </a>
                </h3>
            </div>
            <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        Home
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="SEOtag-tab" data-bs-toggle="tab" data-bs-target="#SEOtag" type="button" role="tab" aria-controls="SEOtag" aria-selected="false">
                        SEO Tags
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">
                        Details
                    </button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="mb3">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>{Product Name</label>
                            <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>{Product Slug</label>
                            <input type="text" name="slug" class="form-control" />
                    </div>
                    <div class="mb3">
                        <label>Select Brand</label>
                        <select name="brand" class="form-control">
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>{Small Description (500 Words)</label>
                            <textarea name="small description" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>{Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                    </div>

                </div>
                <div class="tab-pane fade" id="SEOtag" role="tabpanel" aria-labelledby="SEOtag-tab">
                    <div class="mb-3">
                        <label>{Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>{Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>{Meta Keyword</label>
                            <textarea name="meta keyword" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">

                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
