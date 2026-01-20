@extends('layout')

@section('title', 'Employee Profile')

@section('content')
<h3>Employee Profile</h3>

<p><strong>Name:</strong> {{ $employee['name'] ?? 'N/A' }}</p>
<p><strong>Job Title:</strong> {{ $employee['title'] ?? 'N/A' }}</p>
<p><strong>Skills:</strong></p>
<ul>
    @if(!empty($employee['skills']))
        @foreach(explode(',', $employee['skills']) as $skill)
            <li>{{ trim($skill) }}</li>
        @endforeach
    @else
        <li>No skills listed</li>
    @endif
</ul>

<a href="index.php">Back to Employee List</a>
@endsection
