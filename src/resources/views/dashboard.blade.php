@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-cover bg-center" style="background-image: url('/bg.jpg');">
    <div class="absolute top-0 left-0 m-4">
        <img src="/logo.png" alt="Logo" class="h-12">
    </div>

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-gray-900 bg-opacity-80 text-white p-10 rounded-lg shadow-lg text-center">
            <h1 class="text-3xl mb-6">Velg modul</h1>
            <div class="space-y-4">
                <a href="{{ route('kalkyle') }}" class="block bg-gray-700 hover:bg-gray-600 px-6 py-3 rounded transition">Kalkyle</a>
                <a href="#" class="block bg-gray-700 hover:bg-gray-600 px-6 py-3 rounded transition">Dokumenter</a>
                <a href="#" class="block bg-gray-700 hover:bg-gray-600 px-6 py-3 rounded transition">Kalender</a>
            </div>
        </div>
    </div>
</div>
@endsection
