<!-- de navbar die kan worden aangeroepen-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <form>
        <a href="/medhome"><img src="../img/WFFLIX.png" alt="WFFLIX logo" width="200" height="50"/></a>
    </form>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- content van medewerker navbar -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <div class="dropdown">
                <div class="nav-item nav-link ">Toevoegen</div>
                <div class="dropdown-content">
                    <a href="/vidtoevoegen" class="nav-item nav-link">Video</a>
                    <a href="/cattoevoegen" class="nav-item nav-link">Categorie</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="nav-item nav-link ">Bewerken</div>
                <div class="dropdown-content">
                    <a href="/vidbewerk" class="nav-item nav-link">Video</a>
                    <a href="/catbewerk" class="nav-item nav-link">Categorie</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="nav-item nav-link ">Verwijderen</div>
                <div class="dropdown-content">
                    <a href="/vidverwijder" class="nav-item nav-link">Video</a>
                    <a href="/catverwijder" class="nav-item nav-link">Categorie</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-nav ml-auto">
        <div class="nav-item dropdown login-dropdown">
            <form class="form-inline login-form" action="/logout" method="post">
                <button type="submit" class="btn-register">Logout</button>
            </form>
        </div>
    </div>
</nav>