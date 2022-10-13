@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Patiekalas</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($patiekalai as $patiekalas)
                        <li class="list-group-item">
                            <div class="patiekalai-list">
                                <div class="content">
                                    <h2><span>Pavadinimas: </span>{{$patiekalas->title}}</h2>
                                    <h4><span>Kaina: </span>{{$patiekalas->price}}</h4>
                                    @if($patiekalas->getPhotos()->count())
                                    <h5><a href="{{$patiekalas->lastImageUrl()}}" target="_BLANK">Nuotraukos: {{$patiekalas->getPhotos()->count()}}</a></h5>
                                    @endif
                                </div>
                                <div class="buttons">
                                    <a href="{{route('p_show', $patiekalas)}}" class="btn btn-info">Rodyti</a>
                                    @if(Auth::user()->role >= 10)
                                    <a href="{{route('p_edit', $patiekalas)}}" class="btn btn-success">Redaguoti</a>
                                    <form action="{{route('p_delete', $patiekalas)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Ištrinti</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">Patiekalų nerasta.</li>
                        @endforelse
                    </ul>
                </div>
                <div class="me-3 mx-3">
                    {{ $patiekalai->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection