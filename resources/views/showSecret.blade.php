@extends('layouts.app')

@section('content')	

<div class="flex flex-col items-center bg-white/70 lg:mx-48 p-8 rounded-lg">
    <h1 class="font-bold text-2xl pb-3">Het geheime wachtwoord is:</h1>
    <p class="text-xl">{{ $password }}</p>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mt-5">Zelf een wachtwoord delen</a>
</div>

@endsection