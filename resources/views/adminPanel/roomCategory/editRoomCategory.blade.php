@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Kategorie bearbeiten</h3>
                <h6> <a href="{{url('admin/roomcategory')}}" class="float-left btn btn-success btn-sm">Zurück zu allen Kategorien</a></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategorie</th>
                            <th>Bezeichnung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dynamische ID</td>
                            <td><input name="category" type="text" class="form-control" /></td>
                            <td><input name="description" type="text" class="form-control" /></td>
                            <td>
                                <input type="submit" class="btn btn-primary">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
