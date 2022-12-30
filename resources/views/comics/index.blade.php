@extends('layouts.app')

@section('content')



<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Pokemon</caption>
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
</div>

@endsection