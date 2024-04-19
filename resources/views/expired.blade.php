@extends('layouts.app')

@section('content')

<div class="flex flex-col items-center bg-white/70 lg:mx-48 p-8 rounded-lg">
    <h1 class="font-bold text-2xl pb-3">Link verlopen</h1>
    <p class="text-xl">De link die je hebt gebruikt is verlopen. Vraag de eigenaar van het wachtwoord om een nieuwe link te genereren.</p>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mt-5">Zelf een wachtwoord delen</a>
</div>

@endsection