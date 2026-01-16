<x-layouts.layout>
@guest
<div
  class="hero h-full"
  style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
>
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">{{ __('messages.hello') }}</h1>
      <p class="mb-5">
        {{ __('messages.description') }}
      </p>
      <button class="btn btn-primary">{{ __('messages.get_started') }}</button>
    </div>
  </div>
</div>
@endguest
@auth
<div class="card bg-base-100 image-full w-80 shadow-sm ">
    <figure>
      <img
        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
        alt="Shoes" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">{{ __('messages.student_list') }}</h2>
      <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
      <div class="card-actions justify-end">
        <a href="alumnos"><button class="btn btn-primary">{{ __('messages.see_list') }}</button></a>
      </div>
    </div>
  </div>
@endauth
</x-layouts.layout>