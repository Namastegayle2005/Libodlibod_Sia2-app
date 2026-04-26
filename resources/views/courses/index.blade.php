@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Course List</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection