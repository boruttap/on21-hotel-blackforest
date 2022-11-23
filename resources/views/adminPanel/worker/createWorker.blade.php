@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Mitarbeiter hinzufügen</h3>
                <h6> <a href="{{url('admin/worker')}}" class="float-left btn btn-success btn-sm">Zurück zu allen Mitarbeitern</a></h6>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{url('admin/worker')}}">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>E-Mail Adresse</th>
                                <th>Passwort</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input name="firstname" type="text" class="form-control" /></td>
                                <td><input name="secondname" type="text" class="form-control" /></td>
                                <td><input name="email" type="number" class="form-control"></td>
                                <td><input name="password" type="text" class="form-control"></td>
                                <td><select name="status" class="form-control">
                                    <option value="0">Kategorie auswählen</option>
                                        <option value="0">Aushilfe</option>
                                        <option value="1">Auszubildener</option>
                                        <option value="2">Angestellter</option>
                                        <option value="3">Geschäftsführer</option>
                                    </select>

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
