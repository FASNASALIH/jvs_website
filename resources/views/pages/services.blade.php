@extends('layouts.app')
@section('title', 'Our Services')
@section('description', 'Explore JVS education, internships, career development, technology, digital solutions, events, consulting and growth opportunities.')
@section('content')
<main>
  <x-page-intro label="HOW WE SERVE" title="Expertise that moves you forward.">From learning and career development to business, technology and experiences, we create solutions that move people and businesses forward.</x-page-intro>
  <section class="section"><div class="container">@include('partials.service-grid')</div></section>
  @include('partials.connect-band')
</main>
@endsection
