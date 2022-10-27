@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Restaurant</h2>
                </div>
                <div class="card-body">
                    <div class="restaurant">
                        <h5>{{$restaurant->title}}</h5>
                    </div>
                    <ul class="list-group">
                        @forelse($restaurant->movies as $movie)
                        <li class="list-group-item">
                            <div class="movies-list">
                                <div class="content">
                                    <h2><span>title: </span>{{$movie->title}}</h2>
                                    <h4><span>price: </span>{{$movie->price}}</h4>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No movies found</li>
                        @endforelse
                    </ul>
                    @if(Auth::user()->role >= 10)
                    <div class="buttons mt-2">
                        <form action="{{route('r_delete_movies', $restaurant)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete all movies</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection