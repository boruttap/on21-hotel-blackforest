@extends('adminPanel/layout')
@section('content')

    <div class="container-fluid">

        <div class="row">


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <h6><a href="{{url('admin/roomcategory/')}}" class="float-left btn btn-success btn-sm">Alle
                            Zimmerkategorien anzeigen</a></h6>
                    <h6><a href="{{url('admin/room/')}}" class="float-left btn btn-success btn-sm">Alle Zimmer
                            anzeigen</a></h6>
                    <h6><a href="{{url('admin/worker/')}}" class="float-left btn btn-success btn-sm">Alle Mitarbeiter
                            anzeigen</a></h6>
                    <h6><a href="{{url('admin/customer/')}}" class="float-left btn btn-success btn-sm">Alle Kunden
                            anzeigen</a></h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-2 mb-5">
                <div class="card border-left-primary shadow h-100 py-2">
                    <h3><a href="{{url('admin/roomcategory/')}}" class="float-left btn btn-danger btn-sm">Neue
                            Buchungsanfragen ansehen</a></h3>

                </div>
            </div>


        </div>

        <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{url('js/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('js/demo/chart-pie-demo.js')}}"></script>
@endsection
