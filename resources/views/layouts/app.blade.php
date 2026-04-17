<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Todo App')</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head> 
<body class="bg-light"> 
    <div class="container py-4"> 
        @if(session('success')) 
            <div class="alert alert-success">{{ session('success') }}</div> 
        @endif 
        @yield('content') 
    </div> 
    
    {{-- Optionnel : Ajouter Bootstrap JS pour les composants interactifs --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>