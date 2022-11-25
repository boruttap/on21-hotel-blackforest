@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Neues Zimmer hinzufügen</h3>
                <h6><a href="{{url('admin/room')}}" class="float-left btn btn-success btn-sm">Zurück zu allen
                        Zimmern</a></h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{url('admin/room')}}">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Zimmerkategorie auswählen</th>
                                <th>Zimmertitel</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <select name="roomcategory" class="form-control">
                                        <option value="0">Kategorie auswählen</option>
                                        @foreach($roomcategories as $roomcategory)
                                            <option
                                                value="{{$roomcategory->id}}">{{$roomcategory->roomcategory}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input name="title" type="text" class="form-control"/>
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
