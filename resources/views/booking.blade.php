@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Book the Appointment</h4>
            <form action="{{ route('bookings.store')}}" method="post">
            @csrf 

            <label for="name">Appointment For: </label>
            <br>
            <input type="text" name="name" id="">
            <br>
            <label for="description">Description:</label>

            <label for="meeting_line">Choose a time for your appointment:</label>
            <br>
            <input type="date" name="meeting_date" id="">
            <input type="time" name="meeting_time" id="">
            <br><br>
            <label for="location">Add Contact</label>
            <br>
            <input type="tel" name="location" id="">
            <br><br>

            <input type="submit" value="Submit" />

            </form>
        </div>
    </div>
</div>
@endsection
