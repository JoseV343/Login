<?php
    require_once("C://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
        <i class="fa-solid fa-shield-dog dog-icon"></i>
        </a>
    </div>
    <div class="titulo">
        Create una cuenta en DogCom
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye" onclick="mostrarContraseña('password','eyepassword')">
                <button type="button" >
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repeat the password</label>
            <div class="box-eye" onclick="mostrarContraseña('password2','eyepassword2')">
                <button type="button" >
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" value="<?= (!empty($_GET['confirmarContaseña'])) ? $_GET['confirmarContraseña'] : "" ?>" class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Iniciar Sesion</a>
    </div>
</div>
<?php
    require_once("C://xampp/htdocs/login/view/head/footer.php");
?>