@extends('master')
@section("content")
<!DOCTYPE html>
<html>
<head>
    <title>Product Table</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('products') }}">Product Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('/products') }}">View All products</a></li>
        <li><a href="{{ URL::to('products/create') }}">Create a product</a>
    </ul>
</nav>

<h1>All the products</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>price</td>
            <td>category</td>
            <td>description</td>
            <td>gallery</td>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->category }}</td>
            <td>{{ $value->description }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the product (uses the destroy method DESTROY /products/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the product (uses the show method found at GET /products/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}">Show this product</a>

                <!-- edit this product (uses the edit method found at GET /products/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}">Edit this product</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
@endsection