@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Ausgewähltes Zimmer</h3>
                <h6> <a href="{{url('admin/room')}}" class="float-left btn btn-success btn-sm">Zurück zu allen Zimmern</a></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Zimmertitel</th>
                        </tr>
                        </thead>
                        <tbody>
                        <td>{{$roomdata->title}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
