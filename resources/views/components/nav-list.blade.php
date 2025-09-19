@props(['image', 'request' => false, 'url'])

<li class="{{$request ? 'bg-slate-800' : ''}} px-4 py-2 rounded-md hover:bg-slate-800 duration-75">
  <a href="{{$url}}" class="flex gap-4 items-center">
    <img class="" src="{{ $image }}" alt="">
      <p>{{ $slot }}</p>
  </a>
</li>