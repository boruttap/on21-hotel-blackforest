@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3> Ein Zimmer im Hotel Blackforest buchen!</h3>
                <h5>Senden Sie uns eine Anfrage zu:</h5>
            </div>

            <div class="col-md-8">
            <form method="post" action="{{url('booking')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Datum Anreise</label>
                    <input name="arrivingdate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Datum Abreise</label>
                    <input name="departuredate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-1 mt-4">
                    <label for="exampleInputEmail1" class="form-label">Zimmerkategorie</label>
                    <select name="roomcategory" class="form-control">
                        <option value="0">Kategorie auswählen</option>
                        @foreach($bookingdata as $data)
                            <option value="{{$data->roomcategory}}">{{$data->roomcategory}}</option>
                    @endforeach
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Nach Absenden dieser Anfrage bestätigen wir Ihre Buchung innerhalb von 24 Stunden.</label>
                </div>

                <button type="submit" class="btn btn-primary save-data">Submit</button>

                <p class="ajax-success"></p>

                <div id="response"></div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $("booking-form").on('submit', function(e){
                e.preventDefault();
                var formData=$("form").serializeArray();

                $.ajax({
                    url:"{{url('website/booking')}}",
                    type: 'post',
                    data: formData,
                    dataType: 'json',
                })
            });
        })



    </script>
@endsection
