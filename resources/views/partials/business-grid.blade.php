<div class="business-grid">
@foreach(array_slice(config('jvs.businesses'), 0, $limit ?? null) as $i => $b)
  <x-reveal :delay="$i * 90"><a href="{{ route('contact', ['service' => $b['name']]) }}" class="business-card">
    <div class="business-image"><img src="{{ asset($b['image']) }}" alt="{{ $b['name'] }} imagery from the JVS brochure" loading="lazy"></div>
    <div class="business-label"><div><p>{{ $b['category'] }}</p><h3>{{ $b['name'] }}</h3></div><i data-lucide="arrow-up-right" width="22" height="22"></i></div>
  </a></x-reveal>
@endforeach
</div>
