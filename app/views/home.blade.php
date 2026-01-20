@extends('layout')

@section('title', 'Welcome')

@section('content')
<p>Welcome to the Employee Management System.</p>


<a class="btn" href="index.php?action=index">Employee List</a>
<a class="btn" href="index.php?action=create">Add Employee</a>
@endsection
