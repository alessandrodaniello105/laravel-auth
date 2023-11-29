@extends('layouts.admin')

@section('content')
@php
    $types = config('types')
@endphp


    <h1>Lista Tipi</h1>

    <ul>
        @foreach ($types as $type)
        <li>
            {{$type}}
        </li>
        @endforeach

    </ul>

@endsection
