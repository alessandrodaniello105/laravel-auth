@extends('layouts.admin')

@section('content')

    <h1>Lista Progetti</h1>

    <ul>
        @foreach ($projects as $project)
        <li>
            Titolo Progetto: {{$project->title}} | Tecnologie utilizzate: {{$project->technologies}}
        </li>
        @endforeach

    </ul>

@endsection
