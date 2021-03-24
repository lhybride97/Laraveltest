@extends('product.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->First_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>LastName</strong>
            {{ $product->Last_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email</strong>
            {{ $product->email }}
            <img src="{{ asset('public/storage/templates/image.png') }}" class="img img-thumbnail">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>phone</strong>
            {{ $product->phone }}
        </div>
    </div>
</div>
@endsection