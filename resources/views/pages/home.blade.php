@extends('layout.dashboard')

@section('Crudy | Home')

@section('page')
  <div class="p-8">
    <h1 class="font-medium text-3xl font-inter">Dashboard</h1>

    <div class="py-4">
      <ul class="grid grid-cols-2 gap-4">

      <x-card-info 
        number="200"
        bgImage="bg-blue-500/30"
      >Jumlah pengguna
      </x-card-info>

      <x-card-info
        number="200"
        bgImage="bg-orange-500/30"
        image="./assets/books.svg"
      >Jumlah buku</x-card-info>

      </ul>
    </div>
  </div>
@endsection