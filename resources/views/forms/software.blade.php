@extends('..layouts.base')

@section('title', 'Добавление нового ПО')

@section('content')
    <form action="/insert/{{$category}}" method="POST">
        <h1 class="is-size-2 has-text-centered-mobile has-text-weight-light has-text-grey-light is-unselectable">
            Добавление нового ПО
        </h1>
        <hr>
        @include('forms.components.input', ['title' => 'Название ПО', 'type' => 'text', 'name' => 'name'])
        @include('forms.components.input', ['title' => 'Версия ПО', 'type' => 'text', 'name' => 'version'])
        @include('forms.components.input', ['title' => 'Цена', 'type' => 'number', 'name' => 'price'])
        @include('forms.components.input', ['title' => 'Системные требования', 'type' => 'text', 'name' => 'tech_req'])
        @include('forms.components.formControlButtons')
    </form>
@endsection
