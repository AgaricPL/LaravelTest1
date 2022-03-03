@extends('layout.main')

@section('title', 'Użtkownik')


@auth
    Użytkownik jest zalogowany
@endauth

@guest
    Zaloguj się!
@endguest

@section('content')
    <h2>{{ csrf_token() }}<h2>
    @isset($userId)
        <h2>{{ $userId }}</h2>
    @endisset

    <ul>
        <li>{{ $userDetails['id'] }}</li>
        <li>{{ $userDetails['firstName'] }}</li>
        <li>{{ $userDetails['lastName'] }}</li>
        <li>{{ $userDetails['city'] }}</li>
        <li>
            {{ $userDetails['age'] }}
            @if ($userDetails['age'] >= 18)
                Osoba dorosła
            @else
                Osoba niepełnoletnia
            @endif
        </li>
        <li>{!! $userDetails['html'] !!}</li>
    </ul>
@endsection

