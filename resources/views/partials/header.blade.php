<header>
    <img id="logo" src="{{asset('img/marchio-sito-test.png')}}" alt="logo"> {{-- nb: asset riporta direttamente alla cartella public, non va inserito il percorso fino a qui --}}
    <nav class="header-nav">
        <ul class="main-menu">
          <li class="{{(url()->current() == route('home')) ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
          <li class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}"><a href="{{route('prodotti')}}">Prodotti</a></li>
          <li class="{{(url()->current() == route('contatti')) ? 'active' : ''}}"><a href="{{route('contatti')}}">Contatti</a></li>
        </ul>
    </nav>
</header>
