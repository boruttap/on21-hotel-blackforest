@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3> Das Hotel Blackforest stellt sich vor!</h3>
                <h5>Unsere Mitarbeiter:</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Position</th>
                        </tr>
                        </thead>
                        @foreach($admindata as $data)
                        <tbody>
                        <td>{{$data->firstname}}</td>
                        <td>{{$data->secondname}}</td>
                        <td>{{$data->status}}</td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                </div>
        </div>
    </div>
@endsection
