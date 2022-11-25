@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Alle Mitarbeiter</h3>
                <h6 class="m-0 font-weight-normal text-primary">Hier können neue Mitarbeiter für den Adminbereich
                    hinzugefügt werden.</h6>
                <h6><a href="{{url('admin/worker/create')}}" class="float-left btn btn-success btn-sm">Neuen Mitarbeiter
                        hinzufügen</a></h6>
            </div>
            <div class="card-body">
                @if(Session::has('delete'))
                    <p class="text-danger">{{session('delete')}}</p>
                @endif
                @if(Session::has('success'))
                    <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($admindata)
                            @foreach($admindata as $data)
                                <td>{{$data->id}}</td>
                                <td>{{$data->firstname}}</td>
                                <td>{{$data->secondname}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <a href="{{url('admin/worker/'.$data->id.'/edit')}}" class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i></a>
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
