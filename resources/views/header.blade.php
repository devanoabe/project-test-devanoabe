<head>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand ml-5" href="#">SuitMedia</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav nav-pills navbar-nav ml-auto mr-5">
            <li class="nav-item pill-1">
                <a href="{{ route('page1') }}" class="nav-link {{ (request()->routeIs('page1') ? 'active' : '') }}">
                    Work
                </a>
            </li>
            <li class="nav-item pill-1">
                <a href="{{ route('page2') }}" class="nav-link {{ (request()->routeIs('page2') ? 'active' : '') }}">
                    About
                </a>
            </li>
            <li class="nav-item pill-1">
                <a href="{{ route('page3') }}" class="nav-link {{ (request()->routeIs('page3') ? 'active' : '') }}">
                    Services
                </a>
            </li>
            <li class="nav-item pill-1">
                <a href="{{ route('page4') }}" class="nav-link {{ (request()->routeIs('page4') ? 'active' : '') }}">
                    Ideas
                </a>
            </li>
            <li class="nav-item pill-1">
                <a href="{{ route('page5') }}" class="nav-link {{ (request()->routeIs('page5') ? 'active' : '') }}">
                    Carrers
                </a>
            </li>
            <li class="nav-item pill-1">
                <a href="{{ route('page6') }}" class="nav-link {{ (request()->routeIs('page6') ? 'active' : '') }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>

</nav>