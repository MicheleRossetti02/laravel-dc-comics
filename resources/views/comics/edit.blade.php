@extends('layout.app')
@section('title')
Edit
@endsection

@section('content')

<div class="container justify-content-center gap-5">
    <div class="text-white">
        <h1>Edit Comic</h1>
        <h3>{{$comic['title']}}</h3>
    </div>

    <form action="" method="post" class="card p-3 col-6">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{$comic['title']}}" type=" text" name="title" id="title" class="form-control" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Edit the title here</small>
        </div>
        <div class=" mb-3">
            <label for="description" class="form-label">Description</label>
            <input value="{{$comic['description']}}" type="text" name="description" id="description" class="form-control" aria-describedby="descriptionHlper">
            <small id="descriptionHlper" class="text-muted">Edit the description here</small>
        </div>
        <div class="mb-3 d-flex justify-content-between gap-5">
            <div class="flex-grow-1">
                <label for="thumb" class="form-label ">Image</label>
                <input value="{{$comic['thumb']}}" type="text" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHlper">
                <small id="thumbHlper" class="text-muted">Edit the image here</small>
            </div>
            <img height="100" src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{$comic['price']}}" type="text" name="price" id="price" class="form-control" aria-describedby="priceHlper">
            <small id="priceHlper" class="text-muted">Edit the price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input value="{{$comic['series']}}" type="text" name="series" id="series" class="form-control" aria-describedby="seriesHlper">
            <small id="seriesHlper" class="text-muted">Edit the series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input value="{{$comic['sale_date']}}" type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHlper">
            <small id="sale_dateHlper" class="text-muted">Edit the sale date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input value="{{$comic['type']}}" type="text" name="type" id="type" class="form-control" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Edit the type here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection