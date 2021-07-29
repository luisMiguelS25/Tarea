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
            right: 82px;
        }
        .h2-modal {
            position: relative;
            left: 30px
        }
        .fontColor {
            color: white;
        }
        .div1 {
            max-width: 650px;
            margin: 0 auto;
            position: relative;
            top: 400px;
        }
        .btnGrupo{
            position: relative;
            left: 15px;
        }
        .userimg{
            width: 30px;
        }
        .modalNuevoR{
            width: 100px;
            margin-bottom: 15px;
        }
        .page-link {
            background: transparent;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <div class="div1">
            <button type="button" class="btn btn-light btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>
            <table class="table fontColor">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Perfil</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                    <tr>
                        <td>
                            <img class="userimg" src="{{ asset('img/user.png')}}" alt="">
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm btnGrupo" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-dark">Borrar</button>
                                <button type="button" class="btn btn-outline-dark">Editar</button>
                                <button type="button" class="btn btn-outline-dark">Deshabilitar</button>
                            </div>
                        </td>        
                    </tr>
                    @endforeach
                </tbody> 
            </table>
            <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modalCentro">
                    <div class="modal-content modalTamaño">
                        <div class="modal-header">
                            <h5 class="modal-title h2-modal" id="exampleModalLabel">¡Hola! Por favor ingresa tus datos.</h5>
                        </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        <img class="modalNuevoR" src="{{ asset('img/user.png')}}" alt="">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Correo Electronico</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Contraseña</label>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-outline-dark btnRight">Registrar</button>
                                        <button type="button" class="btn btn-outline-danger btnRight" data-bs-dismiss="modal">Cancelar</button>
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