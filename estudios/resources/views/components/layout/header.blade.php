<header class="h-15vh bg-blue-200
              flex flex-row justify-between
               p-3 ">
    <img src="{{asset("images/nett.jpeg")}}" alt="logo">
    <h1>Titulo</h1>
    @auth
        autenticado
    @endauth
    @guest
        no autenticado
    @endguest


</header>


