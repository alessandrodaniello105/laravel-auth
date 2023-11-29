@extends('layouts.admin')

@section('content')

    <h1>Lista Progetti | <a href="{{route('admin.projects.create')}}"><i class="fa-solid fa-square-plus"></i></a></h1>

    <ul>
        @foreach ($projects as $project)
        <li>
            Titolo Progetto: {{$project->title}} | Tecnologie utilizzate: {{$project->technologies}}
        </li>
        @endforeach

    </ul>

@endsection

@section('title')
Lista progetti
@endsection
