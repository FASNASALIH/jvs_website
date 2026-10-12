@props(['label', 'title'])
<section class="page-intro"><div class="container">
  <x-eyebrow>{{ $label }}</x-eyebrow>
  <h1>{{ $title }}</h1>
  @if(trim($slot))<p class="intro-copy">{{ $slot }}</p>@endif
</div></section>
