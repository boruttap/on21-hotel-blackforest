@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alle Zimmer</h6>
                <h6> <a href="#" class="float-left btn btn-success btn-sm">Neues Zimmer hinzufügen.</a></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategorie</th>
                            <th>Bezeichnung</th>
                            <th>Aktion</th>
                        </tr>
                        </thead>
                        <tbody>
                                    <td>ZimmerID</td>
                                    <td>Bezeichnung</td>
                                    <td>Beschreibung</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
