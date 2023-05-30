<div class="container justify-content-center">
    <div class="row mt-5">
        <h1> Novo Usuário</h1>
    </div>

    <form action="cadastrar.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar-usuario">
        <div class="col-6">


            <div class="mt-3 mb-3">
                <label> Nome </label>
                <input type="text" class="form-control" name="nome" id="">
            </div>

            <div class="mt-3 mb-3">
                <label> E-mail </label>
                <input type="email" class="form-control" name="email" id="">
            </div>

            <div class="mt-3 mb-3">
                <label> Senha </label>
                <input type="password" class="form-control" name="senha" id="">
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Enviar</button></div>
        </div>
    </form>
</div>