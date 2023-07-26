<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Accueil') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Departements') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Etudiant') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Professeur') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
