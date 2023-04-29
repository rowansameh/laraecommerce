@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Add Color
                    <a href="{{ url('admin/colorss/create') }}" class="btn btn-danger btn-sm text-white float-end">
                    Back
                </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="">


                    <div class="mb-3">
                        <label for="">Color Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
