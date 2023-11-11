<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>
<body>
    
<div class="menu">
    <div class="user-info">
        <i class="fas fa-user"></i>
        <span>Leopoldo Jacob Matsinhe</span>
    </div>
    <div class="menu-item">
        <a href="{{route('painel')}}">
            <i class="fas fa-tachometer-alt"></i>
            Painel
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('controleCelas')}}">
            <i class="fas fa-clipboard-list"></i>
            Controle de Celas
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('controleDetentos')}}">
            <i class="fas fa-user"></i>
            Controle de Detentos
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('controleMovimentos')}}">
            <i class="fas fa-sync"></i>
            Controle de Movimentos
        </a>
    </div>
    <div class="menu-item">
        <a href="{{route('controleVisitas')}}">
            <i class="fas fa-users"></i>
            Controle de Visitas
        </a>
    </div>
    <x-menuAdmin></x-menuAdmin>
</div>
<div class="content">
    @yield('conteudo')
</div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>