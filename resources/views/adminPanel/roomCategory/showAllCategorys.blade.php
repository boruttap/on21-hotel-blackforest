@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Alle Kategorien</h3>
                <h6 class="m-0 font-weight-normal text-primary">Hier können neue Zimmerkategorien hinzugefügt
                    werden.</h6>
                <h6><a href="{{url('admin/roomcategory/create')}}" class="float-left btn btn-success btn-sm">Neue
                        Kategorie hinzufügen</a></h6>
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
                            <th>Kategorie</th>
                            <th>Preis (€)</th>
                            <th>Aktion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($categorydata)
                            @foreach($categorydata as $data)
                                <td>{{$data->id}}</td>
                                <td>{{$data->roomcategory}}</td>
                                <td>{{$data->price}}</td>
                                <td>
                                    <a href="{{url('admin/roomcategory/'.$data->id)}}" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{url('admin/roomcategory/'.$data->id.'/edit')}}"
                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Soll die Kategorie gelöscht werden?')"
                                       href="{{url('admin/roomcategory/'.$data->id).'/delete'}}"
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
