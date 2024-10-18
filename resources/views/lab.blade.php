@extends('Components.layout')

@section('title', 'Lab Activity {{ $id }}')

@section('content')
<h1>Lab Activity {{ $id }}</h1>
<p>This page shows the details of lab activity with ID: {{ $id }}</p>
@endsection