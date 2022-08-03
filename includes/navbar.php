<div class="nav">
        <a href="index.php" class='logo'><img src="../static/images/apita.svg" alt="LOGO DO SITE" id='logo'>AP!TA</a>
        <div class="links">
            <a href="#" class='icon'><img src="../static/images/HOME.svg" alt="HOME" id='icon' style="fill: yellow;"></a>
            <a href="#" class='icon'><img src="../static/images/ENTREVISTAS.svg" alt="HOME" id='icon'></a>
            <a href="#" class='icon'><img src="../static/images//NOTICIAS.svg" alt="HOME" id='icon'></a>
            <a href="#" class='icon'><img src="../static/images/LOGIN.svg" alt="HOME" id='icon'></a>
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    Login
                </button>
                <form class="dropdown-menu p-4" action="../includes/login.php" method="$_POST">
                    <div class="mb-3">
                    <label for="exampleDropdownFormEmail2" class="form-label" name='username'>Email address</label>
                    <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label for="exampleDropdownFormPassword2" class="form-label" name='password'>Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                    </div>
                    <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                        <label class="form-check-label" for="dropdownCheck2">
                        Remember me
                        </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login_btn">Sign in</button>
                    <a href="register.php">Register</a>
                </form>
            </div>
        </div>  
    </div>