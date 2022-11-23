@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Kategorie bearbeiten</h3>
                <h6> <a href="{{url('admin/roomcategory')}}" class="float-left btn btn-success btn-sm">Zurück zu allen Kategorien</a></h6>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{url('admin/roomcategory/'.$categorydata->id)}}">
                    @csrf
                    @method('put')
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kategorie</th>
                            <th>Bezeichnung</th>
                            <th>Preis (€)</th>
                            <th>Kategoriebild</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input value="{{$categorydata->roomcategory}}" name="category" type="text" class="form-control" /></td>
                            <td><input value="{{$categorydata->roomdescription}}" name="description" type="text" class="form-control" /></td>
                            <td><input value="{{$categorydata->price}}" name="price" type="number" class="form-control"></td>
                            <td>
                                <img src="../../../categoryimages/{{$categorydata->images}}">
                                <input name="image" type="file" class="form-control">
                            </td>
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
