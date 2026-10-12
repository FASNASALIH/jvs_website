@extends('layouts.app')
@section('title', 'About Us')
@section('description', 'Learn about JVS, Jyoshna’s Versatile Stability, a growing business group driven by innovation, vision, and versatility.')
@section('content')
<main>
  <x-page-intro label="ABOUT US" title="Vision. Innovation. Versatility.">JVS (Jyoshna’s Versatile Stability) is a growing business group driven by innovation, vision, and versatility.</x-page-intro>

  <section class="section"><div class="container about-preview">
    <x-reveal><img class="about-photo" src="{{ asset('images/jvs.png') }}" alt="JVS brand image from the brochure"></x-reveal>
    <x-reveal :delay="120"><div>
      <x-eyebrow>JYOSHNA’S VERSATILE STABILITY</x-eyebrow>
      <h2>Creating value.<br>Building opportunity.</h2>
      <p class="body-copy mt-6">We create and develop ventures designed to bring value, opportunity, and lasting growth.</p>
      <div class="domain-list">
        @foreach(config('jvs.domains') as $d)<span><i data-lucide="arrow-up-right" width="16" height="16"></i>{{ $d }}</span>@endforeach
      </div>
    </div></x-reveal>
  </div></section>

  <section class="section section-alt"><div class="container">
    <div class="section-header"><x-reveal><div><x-eyebrow>OUR PERSPECTIVE</x-eyebrow><h2>The vision behind JVS.</h2></div></x-reveal></div>
    <div class="perspective-grid">
      <x-reveal><div class="quote"><i data-lucide="quote" width="30" height="30"></i>
        <blockquote>“I believe in turning ideas into meaningful opportunities, creating with purpose, and building a vision that grows beyond today.”</blockquote>
        <h3>Jyoshna Yellapu</h3><p>Managing Director of JVS</p></div></x-reveal>
      <x-reveal :delay="120"><div class="quote"><i data-lucide="quote" width="30" height="30"></i>
        <blockquote>“True growth begins with strong ideas, meaningful collaboration, and the courage to turn possibilities into something valuable, impactful, and lasting for the future.”</blockquote>
        <h3>Vahid Shaik</h3><p>Managing Director of VexoBiz</p></div></x-reveal>
    </div>
  </div></section>

  @include('partials.connect-band')
</main>
@endsection
