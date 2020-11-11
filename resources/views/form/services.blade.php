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


<div class="col-xl-5 col-md-6 mx-auto p-3">
    <div class="card ">
        <div class="card-header bg-secondary text-white text-center">
            <h2>CADASTRO DE HABILIDADES</h2>
        </div>

        <div class="card-body">
            <p class="card-text">
                <small>Para realizar seu cadastro com profissional, por favor selecionar as habilidades que serão oferecidas</small>
            </p>

            <form name="completar" method="POST" action="" class="mt-4">
                @csrf


                <div class="form-group">
                    <ul class="list-group">
                        <div class="row">
                            <div class="col">                            
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="1"> Cozinheira</li>
                            </div>
                            <div class="col">
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="2"> Diarista</li>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="3"> Encanador</li>
                            </div>
                            <div class="col">
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="4"> Eletricista</li>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="5"> Jardineiro</li>
                            </div>
                            <div class="col">
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="6"> Lavandeira</li>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <li class="list-group-item"><input type="checkbox" name="idServico[]" value="7"> Passadeira</li>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </ul>
                </div>


               
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                   



            </form>


        </div>


    </div>

</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




</body>

</html>