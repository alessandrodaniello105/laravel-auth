@extends('layouts.admin')

@section('content')

    <h1>{{ $title }}</h1>

    <form action="{{ $route }}" method="POST">
        @csrf
        @method( $method )


        <div class="container p-3">

            {{-- TITOLO --}}
        <div class="mb-3">
            <label for="title" class="form-label">Inserisci il titolo del progetto</label>
            <input type="text" class="form-control" placeholder="Progetto bello" name="title" value="{{old('title', $project?->title )}}">
        </div>

            {{-- DESCRIZIONE --}}
        <div class="form-floating mb-3">
            <textarea class="form-control" id="description" name="description" style="height: 100px" placeholder="Descrizione del progetto">{{old('description', $project?->description)}}</textarea>
            <label for="description">Descrizione del progetto</label>
        </div>

            {{-- TECNOLOGIE --}}
        <div class="mb-3">
        <select class="form-select" name="technologies" value="{{old('technologies', $project?->technologies)}}">
            <option>Scegli la tecnologia principale</option>
            @foreach ($technologies as $tech)

            <option {{($project?->technologies === $tech->name)? 'selected' : ''}} value="{{$tech->name}}">{{$tech->name}}</option>

            {{-- <option @if ($project?->technologies === $tech->name) selected @endif value="{{$tech->name}}">{{$tech->name}}</option> --}}
            @endforeach
            </select>
        </div>

            {{-- TECNOLOGIE  se fosse un array--}}
        {{--
        <div class="form-check mb-3">

            @foreach ($technologies as $tech)

            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Default radio
            </label>
            @endforeach

        </div> --}}


            {{-- TIPO --}}
        <div class="mb-3">
            <select class="form-select" name="type" value="{{old('type', $project?->type)}}">
                <option>Scegli la privacy</option>
                @foreach ($types as $type)

                <option @if ($project?->type === $type->name) selected @endif value="{{$type->name}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>

            {{-- LINK --}}
        <div class="mb-3">
            <label for="link" class="form-label">Inserisci il link al progetto</label>
            <input type="text" class="form-control" placeholder="https://..." name="link" value="{{old('link')}}">
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-danger">Pulisci i campi</button>
        <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Annulla</a>

    </form>

@endsection

@section('title')
Crea un progetto
@endsection
