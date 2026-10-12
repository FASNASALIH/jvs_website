<header class="site-header">
  <div class="container header-inner">
    @include('partials.brand')
    <nav class="desktop-nav" aria-label="Main navigation">
      @foreach(config('jvs.nav') as $n)
        <a href="{{ route($n['route']) }}" class="nav-link {{ request()->routeIs($n['route']) ? 'active' : '' }}">{{ $n['label'] }}</a>
      @endforeach
    </nav>
    <x-button :href="route('contact')" class="header-cta">Let’s Connect <i data-lucide="arrow-up-right"></i></x-button>
    <x-button variant="ghost" size="icon" class="menu-toggle" id="menu-toggle" aria-label="Open menu" aria-expanded="false"><i data-lucide="menu"></i></x-button>
  </div>
  <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation" hidden>
    @foreach(config('jvs.nav') as $n)
      <a href="{{ route($n['route']) }}" class="nav-link {{ request()->routeIs($n['route']) ? 'active' : '' }}">{{ $n['label'] }}<i data-lucide="arrow-up-right" width="16" height="16"></i></a>
    @endforeach
  </nav>
  <div class="scroll-progress" aria-hidden="true"><span id="scroll-bar" style="transform: scaleX(0)"></span></div>
</header>
