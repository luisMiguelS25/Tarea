<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: #181818;
        }
        .modalCentro {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .modalTamaño{
            width: 400px;
        }
        .btnRight{
            position: relative;
            right: 109px;
        }
        .h2-modal {
            position: relative;
            left: 100px
        }
    </style>
</head>
<body>
    <div>
            <div class="modal-dialog-centered modalCentro" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modalTamaño">
                        <div class="modal-header">
                            <h5 class="modal-title h2-modal" id="exampleModalLabel">¡Hola! Bienvenido</h5>
                        </div>
                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Correo Electronico</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Contraseña</label>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-outline-dark btnRight">Iniciar Sesión</button>
                                    </div>
                            </div>
                </div>
            </div>
        </div>
    </div>








    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

