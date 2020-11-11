<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-5">Realize uma busca</h1>

            <form name="buscar" method="POST" action="" class="mt-4">
                @csrf
                    <div class="form-group col-md-10 form-inline">                      
                        <input type="text" name="buscar" id="buscar" class="form-control col-md-8 mr-sm-3"> 
                        <input type="submit" value="Buscar" class="btn btn-info btn-inline">         
                    </div>
            </form>
        </div>
    </div>
</div>