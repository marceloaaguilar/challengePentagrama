<div class="container">

    <div class="row mt-5 gap-5 align-items-center">
        <div class="col-5 mt-5">
            <form action="cadastrar.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar-cidade">

                <h1> Nova Cidade</h1>

                <div class="mt-3 mb-3">
                    <label> Nome da Cidade </label>
                    <input type="text" class="form-control" name="nome" id="">
                </div>

                <div class="mt-3 mb-3">
                    <label> Estado </label>
                    <input type="text" maxLength="2" class="form-control" name="estado" id="">
                </div>

                <div class="mt-3 mb-3">
                    <label> Data de Fundação </label>
                    <input type="date" class="form-control" name="data-fundacao" id="">
                    
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
        </div>
        </form>





        <div class="col-5">
            <form action="cadastrar.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar-bairro">
                <h1> Novo Bairro</h1>

                <div class="mt-3 mb-3">
                    <label> Nome do Bairro </label>
                    <input type="text" class="form-control" name="bairro" id="">
                </div>

                <div class="mt-3 mb-3">
                    <label> Nome da Cidade </label>
                    <input type="text" class="form-control" name="cidade" id="">
                </div>


                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
        </div>
        </form>
    </div>
</div>