<header>
  <div class='img-wrapper'>
    <img src="{{asset('images/logo.png')}}" alt="Boolean logo">
  </div>
  <div>
    <nav>
      <ul>
      <li><a class='{{Request::route()->getName()=='homepage' ? 'active' : ''}}' href="{{route('homepage')}}">Home</a></li>
      <li><a class='{{Request::route()->getName()=='corso' ? 'active' : ''}}' href="#">Corso</a></li>
        <li><a class='{{Request::route()->getName()=='dopo' ? 'active' : ''}}' href="#">Dopo il corso</a></li>
        <li><a class='{{Request::route()->getName()=='lezione' ? 'active' : ''}}' href="#">Lezione Gratuita</a></li>
        <li><a class='{{Request::route()->getName()=='assumi' ? 'active' : ''}}'href="#">Assumi i nostri studenti</a></li>
      </ul>
    </nav>
    <button><a href="#">Candidati ora</a></button>
    <div><i class="fas fa-bars"></i></div>
  </div>
</header>
<nav class='mobile'>
  <i class="fas fa-times"></i>
  <ul>
    <li><a class='{{Request::route()->getName()=='homepage' ? 'active' : ''}}' href="#">Home</a></li>
    <li><a class='{{Request::route()->getName()=='corso' ? 'active' : ''}}' href="#">Corso</a></li>
    <li><a class='{{Request::route()->getName()=='dopo' ? 'active' : ''}}' href="#">Dopo il corso</a></li>
    <li><a class='{{Request::route()->getName()=='lezione' ? 'active' : ''}}' href="#">Lezione Gratuita</a></li>
    <li><a class='{{Request::route()->getName()=='assumi' ? 'active' : ''}}'href="#">Assumi i nostri studenti</a></li>
  </ul>
</nav>