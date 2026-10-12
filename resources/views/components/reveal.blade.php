@props(['delay' => 0])
<div {{ $attributes->merge(['class' => 'reveal']) }} @if($delay) style="--reveal-delay: {{ $delay }}ms" @endif>{{ $slot }}</div>
