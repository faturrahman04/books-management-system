<div class="sticky h-[100dvh] w-[24rem] bg-neutral-800">

  <aside class="font-inter font-medium text-sm text-white">
    <ul class="flex flex-col gap-2 px-4 pb-4 pt-18">

      <x-nav-list 
        image="./assets/home.svg"
        :request="request()->is('dashboard')"
        url="/dashboard"
      >
        Dashboard
      </x-nav-list>

      <x-nav-list 
        image="./assets/book.svg"
        :request="request()->is('books')"
        url="/books"
      >
        Books
      </x-nav-list>

    </ul>
  </aside>

</div>
