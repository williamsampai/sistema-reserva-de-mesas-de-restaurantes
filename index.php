<?php
session_start();
require "./verify/conexao.php";
if (!isset($_SESSION['id'])) {
    header('Location: formulariologin.php');
}

$sql = "SELECT * FROM cliente";
$resultado = $conexao->prepare($sql);
$resultado->execute();
$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #imagem {
            height: 100vh;
            width: 100%;
        }

        #logo {
            height: 50px;
            width: 210px;
        }

        #paragrafo {
            position: relative;
            margin-top: -400px;
            color: white;
            font-size: 60px;
            text-align: center;

        }

        .container {
            text-align: center;
        }

        .centralizado {
            display: inline-block;
        }

        #sobre {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            text-align: justify;
        }

        #sobre img {
            max-width: 100%;
            height: auto;
        }

        .texto-sobre {
            font-size: 30px;
            max-width: 600px;
            margin-left: 20px;
        }

        @media (max-width: 768px) {
            #sobre {
                flex-direction: column;
            }

            .texto-sobre {
                margin-left: 0;
                margin-top: 20px;
            }
        }
        body {
      background-color: #f8f9fa;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      height: auto; 
    }
    .card-header {
      color: #000;
      border-bottom: none;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .form-control {
      height: calc(1.5em + 0.75rem + 2px); 
    }
    
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg  fixed-top text-white " style="background-color: #A67B5B;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img id="logo" src="./imagens/logo (1).png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end  " style="font-size: larger;" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#inicio">inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#sobre">sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#serviços">serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="listagem.php">listagem</a>
                    </li>
                    <li class="nav-item dropdown  ">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['nome']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="./verify/delete.php">Excluir conta</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal">Redefinir senha</a></li>
                            <li><a class="dropdown-item" href="verify/logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="" id="inicio" style="height:100vh;">
        <img src="./imagens/restaurante.jpg" id="imagem" alt="">
        <p id="paragrafo">Seja bem-vindo ao WMreservas!</p>
        <div class="container">
            <a href="#serviços"><button type="submit" class="btn btn-primary text text-white centralizado">Agende agora!</button></a>
        </div>
    </div>


    <div class="vh-100 d-flex align-items-center justify-content-center flex-wrap" style="padding-top: 65px;" id="sobre">
        <img src="./imagens/sobre.png" alt="Imagem sobre WMreservas" class="img-fluid" style="max-width: 40%; height: auto;">
        <p class="texto-sobre" style="font-size:30px; max-width: 600px; margin-left: 20px;">
            Olá nós somos a <span style="color: red;">WMreservas</span> uma rede de reservas de mesas de restaurantes que visamos facilitar esse processo!
        </p>
    </div>

    <div class="container mt-5 d-flex justify-content-center" id="serviços">
    <div class="card" style="width: 500px;">
      <div class="card-header text-center py-3">
        <h1 class="card-title mb-0">Agendamento de Mesas</h1>
      </div>
      <div class="card-body">
        <form action="./verify/cadastrarCliente.php" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Numero da mesa</label>
            <input type="text" class="form-control" id="numeroMesa" name="numero_da_mesa" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Nome</label>
            <input type="email" class="form-control" id="nome" name="nome_do_cliente" required>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Cadeiras</label>
            <input type="tel" class="form-control" id="cadeiras" name="quantidade_de_lugares_reservados" required>
          </div>
          <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data"  name="data_reserva" required>
          </div>
          <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
          </div>
          <button type="submit" class="btn btn-primary w-100" name="submit">Agendar</button>
        </form>
      </div>
    </div>
  </div>

  

</body>

</html>