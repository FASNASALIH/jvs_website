@props(['href' => null, 'variant' => 'default', 'size' => 'default', 'type' => 'button'])
@php
$base = 'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium cursor-pointer transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0';
$variants = [
  'default' => 'bg-primary text-primary-foreground shadow hover:bg-primary/90',
  'outline' => 'border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground',
  'ghost' => 'hover:bg-accent hover:text-accent-foreground',
  'link' => 'text-primary underline-offset-4 hover:underline',
];
$sizes = ['default' => 'h-9 px-4 py-2', 'lg' => 'h-10 rounded-md px-8', 'icon' => 'h-9 w-9'];
$classes = "$base {$variants[$variant]} {$sizes[$size]}";
@endphp
@if($href)
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
