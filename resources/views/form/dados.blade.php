<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">



    <title>TCC</title>
</head>

<body>

<div class="d-flex  p-3">
<div class="bg-light border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Meus dados</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Meus orçamentos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Minhas habilidades</a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-light">Sair</a>
      
      </div>
    </div>


    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-dark ">
                <h4>EDITAR DADOS</h4>
            </div>

            <div class="card-body">
               

                <form name="completar" method="POST" action="" class="mt-4">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="phone">Celular: <sup class="text-danger">*</sup></label>
                            <input type="text" name="phone" id="nome" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label for="cpf">CPF: <sup class="text-danger">*</sup></label>
                            <input type="text" name="cpf" id="nome" class="form-control">
                        </div>

                        <div class="form-group col">
                            <label for="birth">Data de Nascimento: <sup class="text-danger">*</sup></label>
                            <input type="date" name="birth" id="birth" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="birth">Sexo: <sup class="text-danger">*</sup></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genre" id="" value="F">
                            <label class="form-check-label" for="genre">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genre" id="genre" value="M">
                            <label class="form-check-label" for="genre">Masculino </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="state">UF: <sup class="text-danger">*</sup></label>
                            <select name="state" id="state" class="form-control"></select>
                        </div>
                        <div class="form-group col">
                            <label for="city">Cidade:<sup class="text-danger">*</sup></label>
                            <select name="city" id="city" class="form-control"></select>
                        </div>
                    </div>                    
                        
                    <input type="submit" value="SALVAR ALTERAÇÕES" class="btn btn-danger btn-block col-md-4">
                        
            </form>

        </div>
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




</body>

</html>