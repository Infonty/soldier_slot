@extends('layouts.app')
@section('main')

<section id="app" class="bg-dark text-light py-5 text-center">

        @if(\Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{\Session::get('error')}}
        </div>
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{\Session::get('success')}}
        </div>
        @endif
    
        <h1 class="mb-5">Slot Picker</h1>
        <div class="container">
        <form action="{{route('slot.create')}}" method="post">
        @csrf
        
        <input placeholder="date" type="date" class="form-control" name="date" id="date">
        
        <select id="slot" class='form-select mt-5' name='slot'>
            <option value="1">09:00 AM - 11:00 AM</option>
            <option value="2">11:00 AM - 01:00 PM</option>
            <option value="3">01:00 PM - 03:00 PM</option>
            <option value="4">03:00 PM - 05:00 AM</option>
        </select>
        <input type="submit" class="btn btn-primary mt-4">
        </form>
        </div>
</section>

<section id="active" style="min-height:500px;" class="bg-dark text-light text-center py-5">
    @php
    $slots = [
        1 => "09:00 AM - 11:00 AM",
        2 => "11:00 AM - 01:00 PM",
        3 => "01:00 PM - 03:00 PM",
        4 => "03:00 PM - 05:00 PM",
        ];
    @endphp
    <div class="container">
    <h1>Active Slot.</h1>
    @if(!$bookings->first())
    <p>There are no active slots.</p>
    @else
    <div class="row">
    @foreach($bookings as $booking)
    
            <div class="col-md-4 mb-md-0 mb-2 text-dark">
              <div class="card" style="width:18rem; margin:0 auto;">
                <div class="card-body">
                  <h5 class="card-title">Slot Card</h5>
                  <p class="card-text">{{ Carbon\Carbon::parse($booking->date)->format("M d y") }}</p>
                  <p class="card-text">{{ $slots[$booking->slot] }}</p>
                  <a href="/slot/{{$booking->id}}" class="btn btn-danger">cancel</a>
                </div>
              </div>
            </div>
            
    @endforeach
    </div>
    @endif
    </div>
    
</section>

<script>
        let today = new Date();
        //today.setDate(today.getDate());
        let day = today.getDate();
        let month = today.getMonth() + 1;
        let year = today.getFullYear();

        if(day < 10){
            day = "0"+day;
        }

        if(month < 10){
            month = "0"+month;
        }

        today = `${year}-${month}-${day}`;

        const picker = document.getElementById('date');
        picker.min = today;

        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([0].includes(day)){
            e.preventDefault();
            this.value = '';
            alert('We are closed on sunday.');
        }
        });
</script>
@endsection