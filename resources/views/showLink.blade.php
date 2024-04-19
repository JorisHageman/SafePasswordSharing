@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center bg-white/70 xl:mx-48 p-10 rounded-lg">
        <p class="font-bold text-2xl mb-5">Deel de volgende link met de persoon die je toegang wilt geven tot het wachtwoord:
        </p>
        <input class="text-lg rounded-lg font-medium w-full text-center overflow-x-auto" readonly value="{{ $link }}"
            id="link-input" onclick="this.select()">
        <button class="py-2 px-4 rounded-lg bg-blue-500 hover:bg-blue-600 text-white font-bold mt-3"
            onclick="copyToClipboard()">Kopiëren</button>
        <a href="{{ route('home') }}" class="underline font-bold py-2 px-4 rounded-lg">Ander wachtwoord delen</a>
        <div id="copy-success" class="bg-white p-2 rounded text-green-500 font-bold mt-3 hidden">Link gekopieërd naar klembord</div>
    </div>

    <script>
        function copyToClipboard() {
            var linkInput = document.getElementById('link-input');
            linkInput.select();
            document.execCommand('copy');
            document.getElementById('copy-success').classList.remove('hidden');
            setTimeout(function() {
                document.getElementById('copy-success').classList.add('hidden');
            }, 2000);
        }
    </script>
@endsection
