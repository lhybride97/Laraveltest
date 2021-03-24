@extends('product.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Employee</a>
        </div>&nbsp;&nbsp;
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('imageUpload') }}"> Create New company</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>LastName</th>
        <th>company</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->First_name }}</td>
        <td>{{ $product->Last_name }}</td>
        <td>{{ $product->email }}</td>
        <td>{{ $product->phone }}</td>

        <td>
            <form action="{{ route('product.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection