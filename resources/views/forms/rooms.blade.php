@extends('..layouts.base')

@section('title', 'Добавление комнаты')

@section('content')
    <form action="">
        <h1 class="is-size-2 has-text-centered-mobile has-text-weight-light has-text-grey-light is-unselectable">
            Добавление новой комнаты
        </h1>
        <hr>
        <div class="field">
            <label class="label">Название комнаты</label>
            <div class="control">
                <input class="input" type="text" name="name" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Номер комнаты</label>
            <div class="control">
                <input class="input" type="number" name="number" required>
            </div>
        </div>
        <div class="field is-grouped is-grouped-right">
            <div class="control">
                <a href="{{ app('request')->headers->get('referer') }}" class="button">Назад</a>
            </div>
            <div class="control">
                <button class="button is-info" type="submit">Добавить</button>
            </div>
        </div>
    </form>
@endsection
