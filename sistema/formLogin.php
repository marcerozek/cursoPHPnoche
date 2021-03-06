<?php
    require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert alert-secondary col-6 mx-auto">
            <form action="login.php" method="post">
                Nombre de usuario:
                <br>
                <input type="email" name="usuEmail" class="form-control">
                <br>
                Contraseña:
                <br>
                <input type="password" name="usuPass" class="form-control">
                <br>
                <button class="btn btn-dark btn-block">Ingresar</button>
            </form>
        </div>

<?php
        if( isset( $_GET['error'] ) ){
            $error = $_GET['error'];
            $titulo = 'Permiso denegado';
            $mensaje = 'Debe loguearse para ingresar.';
            if($error==1){
                $titulo = 'Error el ingreso';
                $mensaje = 'Nombre de usuario y/o clave incorrectos.';
            }
?>
        <script>
            Swal.fire(
                '<?= $titulo ?>',
                '<?= $mensaje ?>',
                'error'
            )
        </script>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>