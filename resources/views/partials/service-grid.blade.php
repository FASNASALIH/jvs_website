<div class="service-grid">
@foreach(array_slice(config('jvs.services'), 0, $limit ?? null) as $i => $s)
  <x-reveal :delay="$i * 80"><a href="{{ route('contact', ['service' => $s['name']]) }}" class="service-card">
    <div class="service-card-top"><i data-lucide="{{ $s['icon'] }}" width="25" height="25" stroke-width="1.5"></i><span class="item-number">0{{ $i + 1 }}</span></div>
    <h3>{{ $s['name'] }}</h3><p>{{ $s['tags'] }}</p>
    <i data-lucide="arrow-up-right" class="service-arrow" width="19" height="19"></i>
  </a></x-reveal>
@endforeach
</div>
