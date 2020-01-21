<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="cadprof.css" rel="stylesheet">
    <title>Cadastro de Profissionais</title>
  </head>
  <body>



<div class="container">

<div id="login">
        <h3 class="text-center text-white pt-5">Psymed</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="cadastro-form" class="form" action="gravarprof.php" method="post">
                            <h3 class="text-center text-info">Cadastro de profissionais</h3>
                            <div class="form-group">
                                <label for="nomeprof" class="text-info">Nome do profissional:</label><br>
                                <input type="text" name="nomeprof" id="nomeprof" class="form-control">
                            </div>                          
                            <div class="form-group">
                                <label for="emailprof" class="text-info">E-mail do profissional:</label><br>
                                <input type="text" name="emailprof" id="emailprof" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="crp" class="text-info">CRP:</label><br>
                                <input type="text" name="crp" id="crp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefoneprof" class="text-info">Telefone do profissional:</label><br>
                                <input type="text" name="telefoneprof" id="telefoneprof" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lugar" class="text-info">Lugar:</label><br>
                                <input type="text" name="lugar" id="lugar" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>