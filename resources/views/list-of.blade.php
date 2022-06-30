@extends('layouts.base')

@section('title', $category)

@section('content')
    <div class="is-flex is-align-items-center mb-5 is-justify-content-space-between">
        <h1 class="is-size-2 has-text-centered-mobile has-text-grey-light is-unselectable">
            {{ ucfirst($category) }}
        </h1>
        <div>
            <a href="/add/{{$category}}" class="button is-info">Добавить</a>
            <a href="/" class="button is-light">На главную</a>
        </div>
    </div>
    @if($rows)

        <table class="table is-hoverable is-fullwidth">
            <thead>
            <tr>
                @foreach($columns as $column)
                    <th>{{$column}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($rows as $row)
                <tr>
                    @foreach($row as $value)
                        <td>{{$value}}</td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <section class="hero is-medium">
            <div class="hero-body has-text-centered">
                <h2 class="is-size-3 has-text-info mb-3">Этот список пока-что пуст :(</h2>
                <p class="has-text-grey-light">Добавьте в него элементы кнопкой <span class="tag has-text-grey-light">добавить</span>
                </p>
            </div>
        </section>
    @endif

@endsection