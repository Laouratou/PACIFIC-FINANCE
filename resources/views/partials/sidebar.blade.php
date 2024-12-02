<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
            <li class="{{ request()->is('admin.dashboard') ? 'active' : '' }}">
    <a href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('img/icons/dashboard.svg') }}" alt="img">
        <span>Dashboard</span>
    </a>
</li>

                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/icons/product.svg') }}" alt="img">
                        <span> Actualités</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('news.create') ? 'active' : '' }}">
                            <a href="{{ route('news.create') }}">Ajouter une actualité</a>
                        </li>
                        <li class="{{ request()->routeIs('news.index_admin') ? 'active' : '' }}">
                            <a href="{{ route('news.index_admin') }}">Voir toutes les actualités</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/icons/sales1.svg') }}" alt="img">
                        <span> Vidéos</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('videos.create') ? 'active' : '' }}">
                            <a href="{{ route('videos.create') }}">Ajouter une nouvelle vidéo</a>
                        </li>
                        <li class="{{ request()->routeIs('videos.index') ? 'active' : '' }}">
                            <a href="{{ route('videos.index') }}">Voir toutes nos vidéos</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('img/icons/places.svg') }}" alt="img">
                        <span> Demande de crédit ou de prêts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('contacts.index') ? 'active' : '' }}">
                            <a href="{{ route('contacts.index') }}">Voir les demandes</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fas fa-users"></i>
                        <span> Utilisateurs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="{{ request()->routeIs('users.create') ? 'active' : '' }}">
                            <a href="{{ route('users.create') }}">Ajouter un utilisateur</a>
                        </li>
                        <li class="{{ request()->routeIs('users.index') ? 'active' : '' }}">
                            <a href="{{ route('users.index') }}">Voir les utilisateurs</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
