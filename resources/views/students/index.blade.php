@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student List</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student No</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->student_no }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection