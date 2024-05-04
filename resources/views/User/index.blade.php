<!-- index.blade.php -->

@extends('components.layout')

@section('content')
    <div class="container">
        <h1>Guest Appointments</h1>
        @if ($guestAppointments)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $guestAppointments['name'] }}</td>
                        <td>{{ $guestAppointments['phoneNumber'] }}</td>
                        <td>{{ $guestAppointments['date'] }}</td>
                        <td>{{ $guestAppointments['time'] }}</td>
                        <td>{{ $guestAppointments['message'] }}</td>
                        <td>{{ $guestAppointments['status'] }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>No appointments found.</p>
        @endif
    </div>
@endsection
