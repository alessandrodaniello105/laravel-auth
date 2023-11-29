@extends('layouts.admin')

@section('content')

    <h1>Lista Tipi</h1>

    <ul>
        @foreach ($types as $type)
        <li>
            {{$type->name}}
        </li>
        @endforeach

    </ul>

@endsection
