@extends('layouts.admin')

@section('content')
    <h1>{{$new_project->title}}</h1>
    <p>{{ $new_project->description }}</p>
@endsection

@section('title')
Mostra progetto
@endsection
