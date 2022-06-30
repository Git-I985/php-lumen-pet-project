@extends('layouts.base')

@section('title', 'Dashboard')

@section('styles')
    <link rel="stylesheet" href="{{ url('styles/main.min.css') }}">
@endsection

@section('content')
    <div>
        <h1 class="is-size-2 has-text-centered-mobile has-text-weight-light has-text-grey-light is-unselectable">
            <span class="mdi mdi-view-grid-plus has-text-info"></span>
            Dashboard
        </h1>
    </div>
    <hr>
    <div class="columns is-multiline is-mobile is-unselectable">
        @foreach($tables as $table)
            @if(!in_array('to', explode('_', $table), true))
                @php
                    $category =  str_replace('_', " ", $table)
                @endphp
                <div class="column is-one-third-desktop is-half-tablet is-full-mobile">
                    <a href="#">
                        <div class="box is-clickable home-dashboard-card has-background-info-light p-5 is-shadowless">
                            <div class="mb-5">
                                <h2 class="title has-text-info">{{ ucfirst($category) }}</h2>
                                <p class="subtitle has-text-grey">Subtitle</p>
                            </div>
                            <a href="/add/{{$category}}" class="button is-info mb-2 is-fullwidth">Add {{$category}}</a>
                            <a href="/list-of/{{$table}}" class="button is-outlined mb-2 is-fullwidth">List of {{$category}}</a>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
@endsection
