<!-- head do site -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .criar{
                width: 150px;
                height: 40px;
                place-self: center;     
                alignt-text: center;
            }

            .criar:hover{
                
                background-color: #0d6efd;
                text-decoration: none;
                color: white;
            }
        </style>
        <?php include '../../includes/config.php';
         ?>
        <!-- incluir dashboard_functions -->
        <title>AP!TA - O melhor PORTAL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="aaa" style="height: 100%;/* flex: auto; */display: flex;flex-direction: row;">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;" id="sidebar-admin">
                <a href="/" class="justify-items-center">
                <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
                <img src="../../static/images/apita.svg" alt="logo" class="img-fluid" width="50px" height="50px">
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="noticia.php" class="nav-link active" aria-current="page">
                        <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg> -->
                        Notícia
                        </a>
                    </li>
                    <li>
                        <a href="../entrevista/entrevista.php" class="nav-link link-dark">
                        <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                        Linkar Entrevista
                        </a>
                    </li>
                    <li>
                        <a href="../usuario/usuario.php" class="nav-link link-dark">
                        Usuários
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                        Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                        Customers
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
                        <strong>Nome<!-- colocar tag de php puxando nome da pessoa em toda a tag strong --></strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sair</a></li>
                    </ul>
                </div>
            </div>
            <div class="card" style="width: 170vh;">
            <!-- <button id="dd__new__list" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add a new List</button> -->
            <a href="adicionarnoticia.php" class='btn btn-success criar font-weight-bold'>Criar Notícia</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Conteúdo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Ver mais</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    //$id = $row['id'];
                    $sql = "SELECT id_noticia, titulo_noticia, conteudo_noticia, categoria_noticia FROM noticia";
                    $result = mysqli_query($conn, $sql);
                    
                    while($row = mysqli_fetch_assoc($result)){
                        if(strlen($row['conteudo_noticia']) > 20){
                            $row['conteudo_noticia'] = substr($row['conteudo_noticia'], 0, 20) . "...";
                        }
                        echo "<tr>";
                        echo "<td name='id'>".$row['id_noticia']."</td>";
                        echo "<td>".$row['titulo_noticia']."</td>";
                        echo "<td>".$row['conteudo_noticia']."</td>";
                        echo "<td>".$row['categoria_noticia']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editarnoticia.php?id=". $row["id_noticia"] . "&nome=". $row['titulo_noticia']."'/> <i class='far fa-edit'></i> Editar</a>

                    </td>
                    <td><a class='btn btn-sm btn-info' href='#'><i class='fas fa-info-circle'></i> Details</a> </td>
                    </tr>";
                    }
                ?>
                </tbody>
            </table>
            </div>
            <!-- form de inserção de post  -->
            <!-- <div class="lado-direito-admin" style="width: 100vh; padding: 5vh;">
                <form action="criarnoticia.php" method="post">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea class="form-control" id="conteudo" name="conteudo" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
                    </div>
                    <button type="submit">Enviar</button>
                    
                </form>
            </div> -->
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>