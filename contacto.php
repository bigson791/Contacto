<?php  
    if(isset($_POST['submit'])) // se esta validando que exista el submit
    {
        $nombre = $_POST['nombre'];
        $email= $_POST['email'];
        $sunto=$_POST['asunto'];
        $mensaje=$_POST['mensaje'];

        $errors = array();

        if(empty($nombre))// validando que existan los campos
        {
            $errors[] = 'el cammpo nombre es obligatorio' ;
        }

        if(empty($mail))
        {
            $errors[] = 'el cammpo email es obligatorio' ;
        }

        if(empty($asunto))
        {
            $errors[] = 'el cammpo asunto es obligatorio' ;
        }
        if(empty($mensaje))
        {
            $errors[] = 'el cammpo mensaje es obligatorio' ;
        }

    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <main>
        <div class="container py-3">
            <header class="mb-4 border-bottom">
                <h1 class="fs-4">Contacto</h1>
            </header>
      
            <div class="row">
                <div class="col-lg-6 col-md-12">

                <form class="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); //Envia los datos a la misma pagina ?>" autocomplete="off">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="mail" class="form-control" id="email" name="email" required>

                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto:</label>
                        <input type="text" class="form-control" id="asunto" name="asunto" required>

                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Mensaje:</label>
                        <textarea type="text" class="form-control" id="mensaje" name="mensaje" required></textarea> 

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" >Enviar</button>
                </form>

                </div>


            </div>
        </div>
    </main>
</body>
</html>