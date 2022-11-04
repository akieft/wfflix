<!-- the navbar that can be included in other pages-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <form>
        <a href="/"><img src="../img/WFFLIX.png" alt="WFFLIX logo" width="200" height="50"/></a>
    </form>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- collection of nav links,forms and other content -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
        </div>
        <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown login-dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Login</a>
                <div class="dropdown-menu">
                    <form class="form-inline login-form" action="/login" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="fa fa-user"></span>
                                    </span>
                            </div>
                            <input class="form-control" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Wachtwoord" name="password"
                                   required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <form class="form-inline login-form" action="#" method="post">
                <a href="/aanmelden" class="btn-register">Aanmelden</a>
            </form>
        </div>
    </div>
</nav>