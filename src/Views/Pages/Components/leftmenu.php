<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="z-index: 9;">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="z-index: 9;">
    <a href="https://www.kabum.com.br/" target="_blank" class="brand-link">
        <img src="<?= $vars['libraryImg'] ?>kabum.PNG" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kabum</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div id="logged-user" class="info">
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <a href="clientes" class="nav-link fix-left-padding">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Clientes</p>
                </a>
                <a href="enderecos" class="nav-link fix-left-padding">
                    <i class="nav-icon fas fa-map"></i>
                    <p>Endereços</p>
                </a>
            </ul>
        </nav>
    </div>
</aside>