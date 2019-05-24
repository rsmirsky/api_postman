@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
    <div class="create-form">
        <form method="post" action="{{ route('products.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
        </div>
</div>
</div>
@endsection