@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Patiekalas</h2>
                </div>
                <div class="card-body">
                    <div class="patiekalas-show">
                        <div class="line"><small>Pavadinimas:</small>
                            <h5>{{$patiekalas->title}}</h5>
                        </div>
                        <div class="line"><small>Kaina:</small>
                            <h5>{{$patiekalas->price}}</h5>
                        </div>


                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @forelse($patiekalas->getPhotos as $photo)
                                <div class="swiper-slide">
                                    <img src="{{$photo->url}}">
                                </div>
                                @empty
                                <h2>Nuotraukų nerasta.</h2>
                                @endforelse
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection