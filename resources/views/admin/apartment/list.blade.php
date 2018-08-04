@extends('layout.master');
@section('content')
    <div class="card-body">
                <div class="card float-right" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <a href="#" class="btn btn-primary">{{$obj->id}}</a>
                    <div class="card-body">
                        <h5 class="card-title">{{$obj->information}}</h5>
                        <p class="card-text">{{$obj->details}}</p>
                    </div>
                </div>
    </div>
@endsection