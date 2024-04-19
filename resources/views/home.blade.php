@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center bg-white/70 xl:mx-48 p-8 rounded-lg">
        <h1 class="font-bold text-3xl">Veilig wachtwoorden delen.</h1>
        <p class="mb-5">Voer hieronder een wachtwoord in en klik op genereer link om deze veilig te delen</p>

        <form action="{{ route('new') }}" method="POST">
            @csrf
            <div class="flex [&>div]:flex [&>div]:flex-col [&>div]:mx-8 flex-col lg:flex-row">
                <div>
                    <label for="password">Wachtwoord</label>
                    <input name="password" id="password" class="border border-gray-300 p-2 mb-3 rounded-lg" required>
                </div>

                <div>
                    <label for="time_valid">Houdbaarheid</label>
                    <select name="time_valid" class="border border-gray-300 p-2 mb-3 rounded-lg">
                        <option value="1">1 uur</option>
                        <option value="24">24 uur</option>
                        <option value="48">48 uur</option>
                        <option value="72">72 uur</option>
                    </select>
                </div>

                <div>
                    <label for="uses">Aantal keer te gebruiken</label>
                    <select name="uses" class="border border-gray-300 p-2 mb-3 rounded-lg">
                        <option value="1">Eenmalig</option>
                        <option value="2">Tweemaal</option>
                        <option value="4">Viermaal</option>
                    </select>
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Genereer link</button>
            </div>

        </form>
    </div>
@endsection
