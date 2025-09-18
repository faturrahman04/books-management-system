@extends('layout.form')

@section('title', 'Daftar')

@section('content')
  <div class="flex flex-col items-center">

    <h2 class="text-3xl font-semibold py-4">Registrasi</h2>

    <form action="" method="post" class="flex flex-col w-90 px-10">
      @csrf

      <x-input-form
        labelText="Username"
        for="username"
        id="username"
        type="text"
        placeholder="Masukkan username"
      ></x-input-form>

      <x-input-form
        labelText="Password"
        for="password"
        id="password"
        type="password"
        placeholder="Masukkan password"
      ></x-input-form>

      <x-input-form
        labelText="Password"
        for="confirm-password"
        id="confirm-password"
        type="password"
        placeholder="Konfirmasi password"
      ></x-input-form>

      <x-button class="flex justify-center mt-5">Sign up</x-button>

    </form>

    <x-navigation-form></x-navigation-form>

  </div>
@endsection