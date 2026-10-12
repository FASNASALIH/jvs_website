<footer class="site-footer">
  <div class="container footer-grid">
    <div>@include('partials.brand')<p>Driving success through<br>education, events &amp; innovation.</p></div>
    <div><h3>Explore</h3>
      @foreach(array_slice(config('jvs.nav'), 1) as $n)<a href="{{ route($n['route']) }}">{{ $n['label'] }}</a>@endforeach
    </div>
    <div><h3>Get in touch</h3>
      <a href="tel:{{ config('jvs.phone_link') }}"><i data-lucide="phone" width="15" height="15"></i>{{ config('jvs.phone') }}</a>
      <a href="mailto:{{ config('jvs.email') }}"><i data-lucide="mail" width="15" height="15"></i>{{ config('jvs.email') }}</a>
      <span><i data-lucide="map-pin" width="15" height="15"></i>{{ config('jvs.location') }}</span>
    </div>
  </div>
  <div class="container footer-bottom"><span>© {{ date('Y') }} JVS. All rights reserved.</span><span>Ideas. Opportunities. Lasting growth.</span></div>
</footer>
