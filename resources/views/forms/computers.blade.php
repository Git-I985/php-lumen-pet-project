@extends('..layouts.base')

@section('title', 'Add computers')

@section('content')
    <form action="/insert/{{$category}}" method="POST">
        <h1 class="is-size-2 has-text-centered-mobile has-text-weight-light has-text-grey-light is-unselectable">
            Добавление нового ПК
        </h1>
        <hr>
        <div class="field">
            <label class="label">Выберете пользователя</label>
            <div class="control">
                <div class="select">
                    <select name="room">
                        <option>Иванов</option>
                        <option>Коновалов</option>
                        <option>Бла бла бла</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label class="label">Выберете помещение</label>
            <div class="control">
                <div class="select">
                    <select name="room">
                        <option>Серверная</option>
                        <option>Комната учеников</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="columns is-multiline is-gapless">
            @foreach($hardware_types as $item)
                <div class="column is-3 mb-5">
                    <div class="field">
                        <label class="label">{{$item['type']}}</label>
                        <div class="control">
                            <div class="select">
                                <select name="{{$item['type']}}">
                                    <option value="">
                                        Компонент 1
                                    </option>
                                    <option value="">
                                        Компонент 3
                                    </option>
                                    <option value="">
                                        Компонент 3
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
