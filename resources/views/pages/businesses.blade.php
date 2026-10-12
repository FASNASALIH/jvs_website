@extends('layouts.app')
@section('title', 'Our Businesses')
@section('description', 'Meet the JVS business ecosystem: JVS, JVSTech, Jyoora Events, Versatile Academy, VexoBiz and Signature Stays.')
@section('content')
<main>
  <x-page-intro label="OUR BUSINESS ECOSYSTEM" title="One vision. A world of possibilities.">We create and develop ventures designed to bring value, opportunity, and lasting growth.</x-page-intro>
  <section class="section"><div class="container">@include('partials.business-grid')</div></section>
  @include('partials.connect-band')
</main>
@endsection
