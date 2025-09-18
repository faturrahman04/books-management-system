<div class="mt-3">
  @if (request()->is('login')) 
    <p>Belum memiliki akun silahkan daftar?
      <a class="text-blue-500 underline" href="/registrasi">
        Sign up
      </a>
    </p>
  @elseif (request()->is('registrasi'))
    <p>Sudah memiliki sebuah akun?
      <a class="text-blue-500 underline" href="/login">
        Sign in
      </a>
    </p>
  @endif
</div>
