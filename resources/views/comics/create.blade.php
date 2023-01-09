@extends('layouts.app')
@section('title')
Create
@endsection

@section('content')

<div class="container justify-content-center gap-5">
    <h1 class="text-white">Add new Comic</h1>
    <form action="" method="post" class="card p-3 col-6">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add the title here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" aria-describedby="descriptionHlper">
            <small id="descriptionHlper" class="text-muted">Add the description here</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHlper">
            <small id="thumbHlper" class="text-muted">Add the image here</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" aria-describedby="priceHlper">
            <small id="priceHlper" class="text-muted">Add the price here</small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" aria-describedby="seriesHlper">
            <small id="seriesHlper" class="text-muted">Add the series here</small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHlper">
            <small id="sale_dateHlper" class="text-muted">Add the sale date here</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Add the type here</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection