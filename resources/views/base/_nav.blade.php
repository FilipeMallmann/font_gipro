<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Gipro</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check()) <li><a href= {{ action('IniciaisController@index') }}>Iniciais</a></li> @endif
                @if (Auth::check()) <li><a href= {{ action('ClientesController@index') }}>Clientes</a></li> @endif
                @if (Auth::check()) <li><a href={{ action('ContratosController@index') }}>Todos Contratos</a></li> @endif
                @if (Auth::check()) <li><a href={{ action('ProtocolosController@index') }}>Todos Protocolos</a></li> @endif

                @if (Auth::check()) <li><a href={{ url('/admin') }}>Administração</a></li> @endif
                @if (Auth::check()) <li><a href={{ url('/auth/logout') }}>Sair</a></li> @endif
            </ul>
        </div>
    </div>
</nav>
