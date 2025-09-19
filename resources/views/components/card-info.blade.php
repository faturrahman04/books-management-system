@props(
  ['number' => '0', 
  'bgImage' => 'bg-white', 
  'image' => './assets/users.svg'
  ])

<li class="flex justify-between odd:bg-neutral-100 even:bg-neutral-800 odd:text-neutral-800 even:text-neutral-100 rounded-sm px-5 py-6 font-inter">
  <div>
    <h2 class="font-medium text-3xl">{{ $number }}</h2>
    <p class="text-lg">{{ $slot }}</p>
  </div>
  <div class="{{ $bgImage }} flex items-center rounded-[50%] px-2">
    <img class="w-12" src="{{ $image }}" alt="">
  </div>
</li>