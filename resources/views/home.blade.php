@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue sur la Plateforme Mobile d’Aide aux Étrangers</h1>
        <p class="lead">Souscrivez à un abonnement et découvrez nos services pour faciliter votre intégration.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Inscription</a>
        </p>
    </div>
@endsection
