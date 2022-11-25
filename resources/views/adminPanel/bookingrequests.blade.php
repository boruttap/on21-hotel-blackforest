@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Buchungsanfragen</h3>
                <h6 class="m-0 font-weight-normal text-primary">Hier werden alle Buchungsanfragen der Website
                    angezeigt. </h6>
                <h6 class="m-0 font-weight-normal text-danger">Reagieren Sie auf die Anfrage, indem Sie der
                    entsprechenden E-Mail eine Nachricht schreiben. </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>E-Mail</th>
                            <th>Ankunftsdatum</th>
                            <th>Abreisedatum</th>
                            <th>Zimmerkategorie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($requestdata)
                            @foreach($requestdata as $request)
                                <td>{{$request->id}}</td>
                                <td>{{$request->email}}</td>
                                <td>{{$request->arrivingdate}}</td>
                                <td>{{$request->departuredate}}</td>
                                <td>{{$request->roomcategory}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
