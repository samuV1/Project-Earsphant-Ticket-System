@section('header_css')
    <link rel="stylesheet" href={{ asset('css/user_module/header.css') }}>
@endsection

<header>
    
    <nav>
        <ul>
            <li><a class="nav" href="{{ route('user_home') }}">Ir para a página inicial</a></li>
            <li><a class="nav" href="">Configurar o meu sistema</a></li>
        </ul>
        <ul>
            <img src="/images/logo_index.png" alt="Logo do sistema earsphant com um elefante com as orelhas abertas">
        </ul>
    </nav>

</header>