@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-12 p-0 mb-2">
            <div class="card">
                <div class="card-header">
                    <h2>Patiekalas</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-7">
                                <form action="{{route('home')}}" method="get">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-5">
                                                <select name="sort" class="form-select mt-1">
                                                    <option value="0">Visi</option>
                                                    @foreach($sortSelect as $option)
                                                    <option value="{{$option[0]}}" @if($sort==$option[0]) selected @endif>{{$option[1]}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="input-group-text mt-1">Rušiuoti</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-7">
                                <form action="{{route('home')}}" method="get">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="s" class="form-control" value="{{$s}}">
                                                    <button type="submit" class="input-group-text">Paieška</button>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('home')}}" class="btn btn-secondary">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <h5><a href="{{$patiekalas->lastImageUrl()}}" target="_BLANK">Photos: {{$patiekalas->getPhotos()->count()}}</a></h5>
                            @endif
                            <h4><span>Įvertinimas: </span>{{$patiekalas->rating ?? 'no rating'}}</h4>
                        </div>
                        <div class="buttons">
                            <form action="{{route('rate', $patiekalas)}}" method="post">
                                <select name="rate">
                                    @foreach(range(1, 10) as $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-info">Įvertink</button>
                            </form>
                        </div>
                    </div>
                    <div class="comments">
                        <ul class="list-group m-3">
                            @forelse($patiekalas->getComments as $comment)
                            <li class="list-group-item">
                                <div>{{$comment->post}}</div>
                            </li>
                            @empty
                            <li class="list-group-item">Be komentarų.</li>
                            @endforelse
                        </ul>
                        <form action="{{route('comment', $patiekalas)}}" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Komentuoti</span>
                                <textarea name="post" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Pridėti komentara</button>
                            @csrf
                        </form>
                    </div>
                </li>
                @empty
                <li class="list-group-item">Patiekalas nerastas</li>
                @endforelse
            </ul>
        </div>
    </div>
    <div class="me-3 mx-3 mt-3">
        {{ $patiekalai->links() }}
    </div>
</div>
@endsection