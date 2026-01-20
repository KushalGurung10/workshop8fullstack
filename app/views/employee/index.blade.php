@extends('layout')

@section('title', 'Employee Database')

@section('content')
<h3>Employee List</h3>

<!-- Only Add + inside the list -->
<a class="btn" href="index.php?action=create">Add +</a>

<ul>
@foreach ($employees as $e)
    <li>
        <strong>{{ $e['name'] }}</strong> – {{ $e['title'] }}

        <ul>
            @foreach (explode(',', $e['skills']) as $skill)
                <li>{{ trim($skill) }}</li>
            @endforeach
        </ul>

        <a class="btn" href="index.php?action=show&id={{ $e['id'] }}">View Profile</a>
        <a class="btn" href="index.php?action=edit&id={{ $e['id'] }}">Edit</a>
        <a class="btn" href="index.php?action=delete&id={{ $e['id'] }}">Delete</a>
    </li>
@endforeach
</ul>
@endsection
