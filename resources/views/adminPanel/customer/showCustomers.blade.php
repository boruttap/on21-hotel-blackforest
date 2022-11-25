@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Alle Kunden</h3>
                <h6 class="m-0 font-weight-normal text-primary">Hier werden alle registrierten Kunden der Website
                    aufgelistet..</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>E-Mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($customerdata)
                            @foreach($customerdata as $data)
                                <td>{{$data->id}}</td>
                                <td>{{$data->firstname}}</td>
                                <td>{{$data->secondname}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <a onclick="return confirm('Soll der Mitarbeiter gelöscht werden??')"
                                       href="{{url('admin/worker/'.$data->id).'/delete'}}"
                                       class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
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
