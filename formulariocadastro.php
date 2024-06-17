<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <section class="vh-100 gradient-custom" style="background-color: rgba(210,180,140); ">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card text-dark" style="border-radius: 1rem; ">
            <div class="card-body shadow p-5 text-center rounded-5">
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="text-dark-50 mb-5">Cadastre-se Aqui</h2>
                <form action="./verify/cadastra.php" method="post" data-parsley-validate>
                <div data-mdb-input-init class="form-outline form-dark mb-4">
                    <label class="form-label" for="">Nome<span class="text-danger"> *</span></label>
                    <input type="text" name="nome" class="form-control form-control-lg" required/>
                  </div>
                  <div data-mdb-input-init class="form-outline form-dark mb-4">
                    <label class="form-label" for="">Email<span class="text-danger"> *</span></label>
                    <input type="email" name="email" class="form-control form-control-lg" required/>
                  </div>
                  <div data-mdb-input-init class="form-outline form-dark mb-4">
                    <label class="form-label" for="">Senha<span class="text-danger"> *</span></label>
                    <input type="password" name="senha" class="form-control form-control-lg" required/>
                  </div><br>
                  <div>
                    <input type="submit" name="submit" value="Cadastre-se" class="btn btn-primary btn-lg px-5"> 
                  </div>
              </div>
              </form>
              <div>
                <p class="mb-0">já tem uma conta? <a href="./formulariologin.php" class="text-dark-50 fw-bold">Entre</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./node_modules/jquery/dist//jquery.min.js"></script>
  <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
  <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
  <link rel="stylesheet" href="./node_modules/parsleyjs/src/parsley.css">
</body>
</html>