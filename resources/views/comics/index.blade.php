@extends('layouts.app')

@section('content')

<section class="comics py-5">
    <div class="container">
        <h2 class="text-white">COMICS</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @forelse($comics_list as $comic)

            <div class="col">
                <a href="{{route('comics.show', $comic->id)}}">

                    <div class="card">
                        <img src="{{$comic->thumb}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h6 class="fw-normal">{{$comic->title}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <tr>
                <td>Sorry, no comics found</td>
            </tr>
            @endforelse
        </div>

    </div>
</section>
<!-- 
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>COMICS</caption>
            <tr>
                <th>title</th>
                <th> price</th>
                <th> thumb</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($comics_list as $comic)
            <tr class="table-primary">
                <td scope="row">{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td><img src="{{$comic->thumb}}" alt=""></td>
                <td>view,edit,delete</td>
            </tr>
            @empty
            <tr>
                <td>Sorry, no comics found</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div> -->

@endsection