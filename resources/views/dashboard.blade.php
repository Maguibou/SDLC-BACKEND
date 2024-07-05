@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1 class="my-4">Dashboard</h1>
        <p>Bienvenue, {{ Auth::user()->first_name }} !</p>
        <p>Consultez vos services, abonnements et accompagnateurs ici.</p>
        <!-- Ajoutez le contenu du tableau de bord ici -->
    </div>
@endsection
