@extends('layouts.app')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Logo and Contact Details Management</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">DFEC</a></li>
                <li class="breadcrumb-item active">Logo and Contact Details Management</li>
            </ol>
        </div>
    </div>
</div>
@include('messages')
<form action="{{ URL::to('/lcd/update/'. $lcd->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">Logo:</label>
        <div class="col-sm-8">
            <input class="form-control" type="file" name="logo" id="logo">
        </div>
    </div>  
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">Location:</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="location" id="location" value="{{ $lcd->location }}" required>
        </div>
    </div>  
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">Phone Number:</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ $lcd->phone_number }}" required>
        </div>
    </div>  
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">Email:</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="email" id="email" value="{{ $lcd->email }}" required>
        </div>
    </div>  
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">Twitter Link:</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="twitter_link" id="twitter_link" value="{{ $lcd->twitter_link }}" required>
        </div>
    </div>  
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">FB Link:</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="fb_link" id="fb_link" value="{{ $lcd->fb_link }}" required>
        </div>
    </div> 
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-4 col-form-label">Instagram Link:</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="instagram_link" id="instagram_link" value="{{ $lcd->instagram_link }}" required>
        </div>
    </div> 
    <button type="submit" class="btn btn-primary waves-effect waves-light float-right">Save Category</button>
</form>


@endsection
