@extends('layout.dashboard')

@section('Crudy | Home')

@section('page')
  <div class="p-8 font-inter grid gap-3 grid-cols-2">
    <x-book-card></x-book-card>
    <x-book-card></x-book-card>
    <x-book-card></x-book-card>
  </div>
@endsection