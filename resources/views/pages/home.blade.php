@extends('layouts.app')
@section('title', 'Jyoshna’s Versatile Stability')
@section('description', 'JVS brings education, careers, technology, events, business and hospitality together to create value, opportunity and lasting growth.')
@section('content')
<main>
  <section class="hero">
    <img class="hero-photo" src="{{ asset('images/hero.jpg') }}" alt="Technology and innovation workspace from the JVS brochure" fetchpriority="high">
    <div class="container hero-content">
      <x-eyebrow>ONE VISION. VERSATILE POSSIBILITIES.</x-eyebrow>
      <h1>Jyoshna’s<br>Versatile <span>Stability.</span></h1>
      <p class="hero-description">Driving success through education, events &amp; innovation. Turning ideas into opportunities that move people and businesses forward.</p>
      <div class="hero-actions">
        <x-button :href="route('services')">Explore Our Services <i data-lucide="arrow-up-right"></i></x-button>
        <x-button :href="route('about')" variant="outline" class="hero-outline">Discover JVS <i data-lucide="arrow-right"></i></x-button>
      </div>
      <div class="hero-note"><i data-lucide="map-pin" width="14" height="14"></i>VISAKHAPATNAM, INDIA <span>—</span> A VISION BEYOND BOUNDARIES</div>
    </div>
  </section>

  <div class="brand-strip"><div class="container brand-strip-inner">
    <p class="strip-label">OUR VENTURES.<br>ONE SHARED VISION.</p>
    <div class="marquee"><div class="marquee-track">
      @foreach([0, 1] as $dup)
      <div class="marquee-group" @if($dup) aria-hidden="true" @endif>
        <span class="venture-word">JVS Tech</span>
        <span class="venture-word jyoora">Jyoora<small>EVENTS</small></span>
        <span class="venture-word academy">Versatile<small>ACADEMY</small></span>
        <span class="venture-word">VexoBiz</span>
        <span class="venture-word stays">SIGNATURE STAYS</span>
      </div>
      @endforeach
    </div></div>
  </div></div>

  <section class="section"><div class="container">
    <div class="section-header">
      <x-reveal><div><x-eyebrow>HOW WE SERVE</x-eyebrow><h2>Different expertise.<br>One purpose: your growth.</h2></div></x-reveal>
      <x-reveal :delay="100"><p class="section-subtitle">From learning and career development to business, technology and experiences, we create solutions that move people and businesses forward.</p></x-reveal>
    </div>
    @include('partials.service-grid')
    <div class="mt-6"><x-section-link :href="route('services')">Explore all services</x-section-link></div>
  </div></section>

  <section class="section section-alt"><div class="container about-preview">
    <x-reveal><img class="about-photo" src="{{ asset('images/jvs.png') }}" alt="JVS brand reception imagery from the brochure" loading="lazy"></x-reveal>
    <x-reveal :delay="120"><div class="about-text">
      <x-eyebrow>ABOUT JVS</x-eyebrow>
      <h2>Built on vision.<br>Driven by versatility.</h2>
      <p class="body-copy">JVS (Jyoshna’s Versatile Stability) is a growing business group driven by innovation, vision, and versatility.</p>
      <p class="body-copy">We create and develop ventures designed to bring value, opportunity, and lasting growth.</p>
      <div class="about-values">
        @foreach(['Innovation', 'Vision', 'Versatility'] as $v)<span><i data-lucide="check" width="14" height="14"></i>{{ $v }}</span>@endforeach
      </div>
      <x-section-link :href="route('about')">More about JVS</x-section-link>
    </div></x-reveal>
  </div></section>

  <section class="section"><div class="container">
    <div class="section-header">
      <x-reveal><div><x-eyebrow>OUR BUSINESS ECOSYSTEM</x-eyebrow><h2>Distinct ventures.<br>Connected by purpose.</h2></div></x-reveal>
      <x-reveal :delay="100"><x-section-link :href="route('businesses')">Meet our businesses</x-section-link></x-reveal>
    </div>
    @include('partials.business-grid', ['limit' => 3])
  </div></section>

  @include('partials.connect-band')
</main>
@endsection
