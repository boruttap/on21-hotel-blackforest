@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3> Herzlich Willkommen beim Hotel Blackforest</h3>
                <h5>Unsere Zimmerkategorien:</h5>

            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            @foreach($categorydata as $data)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../../../categoryimages/{{$data->images}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->roomcategory}}</h5>
                            <p class="card-text">{{$data->roomdescription}}</p>
                            <a href="{{url('/booking')}}" class="btn btn-primary">Buchung anfragen</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
