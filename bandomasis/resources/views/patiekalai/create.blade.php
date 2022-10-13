@extends('layouts.app')

@section('content')
<div  class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>Naujas Patiekalas</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('p_store')}}" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Pavadinimas</span>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Kaina</span>
                            <input type="text" name="price" class="form-control" value="{{old('price')}}">
                        </div>
                        <div data-clone class="input-group mt-3">
                            <span class="input-group-text">Nuotrauka</span>
                            <input type="file" name="photo[]" multiple class="form-control">
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-secondary mt-4">Sukurti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection