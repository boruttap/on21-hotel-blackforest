@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Kategorie bearbeiten</h3>
                <h6><a href="{{url('admin/worker')}}" class="float-left btn btn-success btn-sm">Zurück zu allen
                        Kategorien</a></h6>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{url('admin/worker/'.$admindata->id)}}">
                    @csrf
                    @method('put')
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>E-Mail</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input value="{{$admindata->firstname}}" name="firstname" type="text"
                                           class="form-control"/></td>
                                <td><input value="{{$admindata->secondname}}" name="secondname" type="text"
                                           class="form-control"/></td>
                                <td><input value="{{$admindata->email}}" name="email" type="email" class="form-control">
                                </td>
                                <td><input value="{{$admindata->status}}" name="status" type="text"
                                           class="form-control"></td>
                                <td>
                                    <input type="submit" class="btn btn-primary">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
