@extends('layouts.admin')

@section('title', 'Admin Setting')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <form action="{{ url('/admin/settings') }}" method="POST">
            @csrf

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">General Settings</h4>
                    <p class="card-description">Update general settings for your website</p>
                    <div class="form-group">
                        <label for="site_name">Site Name</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" placeholder="Enter site name" value="{{ old('site_name', $settings['site_name'] ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="site_description">Site Description</label>
                        <textarea class="form-control" id="site_description" name="site_description" rows="3">Perfumes website offer customers a convenient way to browse, compare, and purchase fragrances online. Discover a world of fragrances, including top-rated brands and exclusive releases, since the 1500s, to find your perfect scent.</textarea>
                    </div>
                    <div class="form-group">
                        <label for="site_logo">Site Logo</label>
                        <input type="file" class="form-control-file" id="site_logo" name="site_logo">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Information</h4>
                    <p class="card-description">Update contact information for your website</p>
                    <div class="form-group">
                        <label for="contact_email">Contact Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Enter contact email" value="{{ old('contact_email', $settings['contact_email'] ?? 'admin@gmail.com') }}">
                    </div>
                    <div class="form-group">
                        <label for="contact_phone">Contact Phone</label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Enter contact phone" value="{{ old('contact_phone', $settings['contact_phone'] ?? '01277537518') }}">
                    </div>
                    <div class="form-group">
                        <label for="contact_address">Contact Address</label>
                        <textarea class="form-control" id="contact_address" name="contact_address" rows="3">{{ old('contact_address', $settings['contact_address'] ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Social Media Links</h4>
                    <p class="card-description"></p>
                    <div class="form-group">
                        <label for="facebook_url">Facebook URL</label>
                        <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="Enter Facebook URL" value="{{ old('facebook_url', $settings['facebook_url'] ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="twitter_url">Twitter URL</label>
                        <input type="text" class="form-control" id="twitter_url" name="twitter_url" placeholder="Enter Twitter URL"
                        
                        </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-primary mr-2">Cancel</button>
                </div>
                            

            </form>

   </div>
</div>   

@endsection