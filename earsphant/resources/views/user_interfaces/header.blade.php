@section('header_css')
    <link rel="stylesheet" href={{ asset('css/user_module/header.css') }}>
@endsection

<header>
    
    <nav>
        <ul>
            <li><a class="nav" href="{{ route('usuario_home') }}">Ir para a página inicial</a></li>
            <li><a class="nav" href="{{ route('index') }}">Sair do sistema</a></li>
        </ul>
        <ul>
            <a href="{{ route('usuario_home') }}"><img src="/images/logo_index.png" alt="Logo do sistema earsphant com um elefante com as orelhas abertas"></a>
        </ul>
    </nav>

</header>