@extends('layouts.app')
@section('title', 'Contact Us')
@section('description', 'Connect with JVS in Visakhapatnam. Call +91 91600 30342 or email jvsacademyofficial@gmail.com.')
@section('content')
<main>
  <x-page-intro label="CONTACT US" title="Let’s create what’s next.">Connect with JVS to explore education, careers, business, technology and experiences.</x-page-intro>
  <section class="section"><div class="container contact-layout">
    <x-reveal><div>
      <x-eyebrow>GET IN TOUCH</x-eyebrow>
      <div class="contact-details">
        <div class="contact-item"><i data-lucide="phone" width="22" height="22"></i><div><h3>Call us</h3><a href="tel:{{ config('jvs.phone_link') }}">{{ config('jvs.phone') }}</a></div></div>
        <div class="contact-item"><i data-lucide="mail" width="22" height="22"></i><div><h3>Email us</h3><a href="mailto:{{ config('jvs.email') }}">{{ config('jvs.email') }}</a></div></div>
        <div class="contact-item"><i data-lucide="map-pin" width="22" height="22"></i><div><h3>Our location</h3><p>{{ config('jvs.location') }}</p></div></div>
        <div class="contact-item"><i data-lucide="globe" width="22" height="22"></i><div><h3>Academy website</h3><a href="{{ config('jvs.website') }}" target="_blank" rel="noreferrer">www.jvsacademy.com <i data-lucide="arrow-up-right" width="14" height="14" class="inline"></i></a></div></div>
      </div>
    </div></x-reveal>
    <x-reveal :delay="120">
      <form class="contact-form" id="contact-form" data-email="{{ config('jvs.email') }}">
        <h2>Start a conversation</h2>
        <div class="form-row">
          <label>Your name<input name="name" placeholder="Full name" required autocomplete="name"></label>
          <label>Email address<input name="email" type="email" placeholder="you@example.com" required autocomplete="email"></label>
        </div>
        <label>I’m interested in<select name="interest">
          <option value="">General enquiry</option>
          @foreach($options as $o)<option @selected($o === $selected)>{{ $o }}</option>@endforeach
        </select></label>
        <label>Your message<textarea name="message" placeholder="Tell us what you have in mind…" required></textarea></label>
        <x-button type="submit" size="lg">Compose Email <i data-lucide="arrow-up-right"></i></x-button>
        <p class="form-note" id="form-note" role="status">Opens your email app with your enquiry. Your message is sent only when you send the email.</p>
      </form>
    </x-reveal>
  </div></section>
</main>
@endsection
