@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>View Patients</h1>
            <table class="table-primary">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DoB</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->Patient_Id }}</td>
                            <td>{{ $patient->First_Name }}</td>
                            <td>{{ $patient->Last_Name }}</td>
                            <td>{{ $patient->Date_Birth }}</td>
                            <td>
                                <form action="delete_patients" method="post"><!--The line below must appear within every laravel form-->
                                    {!! csrf_field() !!}
                                    <input type="number" hidden id="patient_id" name="patient_id" value="{{ $patient->Patient_Id }}">
                                    <button type="submit" class="btn btn-default">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection