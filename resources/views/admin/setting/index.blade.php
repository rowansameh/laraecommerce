@extends('layouts.admin')

@section('title', 'Admin Setting')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">

    @if(session('message'))
    <div class="alert alert-success mb-3">{{ session('message') }}</div>
    @endif

        <form action="{{ url('/admin/settings') }}" method="POST">

          @csrf


          <div class="card mb-3">
            <div class="card-header bg-primary" style="background-color: #b4895e;">
               <h3 class="text white mb-0">Website - Information</h3>
        </div> 
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 mb-3">
                        <label>Website Name</label>
                        <input type="text" name="website_name" value="{{ $sitting->website_name ?? '' }}" class="form-control"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Website Url</label>
                        <input type="text" name="website_url" value="{{ $sitting->website_url ?? '' }}" class="form-control"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Page Title</label>
                        <input type="text" name="page_title" value="{{ $sitting->page_title ?? '' }}" class="form-control"/>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" value="{{ $sitting->meta_keywords ?? '' }}" class="form-control"/>
                   </div>
                    <div class="col-md-6 mb-3">
                        <label>Meta Description</label>
                        <input type="text" name="meta_description" value="{{ $sitting->meta_description ?? '' }}" class="form-control"/>
                    </div>
               </div>
          </div>



         <div class="card mb-3">
          <div class="card-header bg-primary" style="background-color: #b4895e;">
            <h3 class="text white mb-0">Website - Information</h3>
        </div> 
          <div class="card-body">
                <div class="row">
                <div class="col-md-12 mb-3">
                        <label>Address</label>
                        <textarea name="text" name="address" value="{{ $sitting->address ?? '' }}" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Phone 1 *</label>
                        <input type="text" name="phone1" value="{{ $sitting->phone1 ?? '' }}" class="form-control"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Phone No. 2</label>
                        <input type="text" name="phone2" value="{{ $sitting->phone2 ?? '' }}" class="form-control"/>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label>Email Id 1 *</label>
                        <input type="text" name="email1" value="{{ $sitting->email1 ?? '' }}" class="form-control"/>
                   </div>
                   <div class="col-md-6 mb-3">
                        <label>Email Id 2</label>
                        <input type="text" name="email2" value="{{ $sitting->email2 ?? '' }}" class="form-control"/>
                    </div>
               </div>
          </div>




         <div class="card mb-3">
            <div class="card-header bg-primary" style="background-color: #b4895e;">
               <h3 class="text white mb-0">Website - Social Media</h3>

            <div class="card-body">
                <div class="row">
                <div class="col-md-6 mb-3">
                        <label>Facebook (Optional)</label>
                        <input type="text" name="facebook" value="{{ $sitting->facebook ?? '' }}" class="form-control"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Twitter (Optional)</label>
                        <input type="text" name="twitter" value="{{ $sitting->twitter ?? '' }}" class="form-control"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Instagram (Optional)</label>
                        <input type="text" name="instagram" value="{{ $sitting->instagram ?? '' }}" class="form-control"/>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label>YouTube (Optional)</label>
                        <input type="text" name="youtube" value="{{ $sitting->youtube ?? '' }}" class="form-control"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end">
             <button tybe="submit" class="btn btn-primary text-white">Save Settings</button>
        </div>
 


         </form>

   </div>
</div>   

@endsection