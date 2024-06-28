<div class="container">
    <div>
        <h2>FAÇA SEU CADASTRO</h2>
        <form class="cadastro">
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Digite sua senha">
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Repita sua senha</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Digite sua senha">
            </div>
            <div class="mb-1">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label mb-1" for="dropdownCheck">
                        Aceito todos os termos
                    </label>

                </div>
            </div>
           
            <button type="button" class="btn btn-success mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button><BR>
            <a class="textLinks" href="?pagina=login">Ja tem uma conta? Login</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirme seus dados</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Deseja processeguir com o cadastro?</h5>
                        </div>
                        <div class="modal-footer">
                            <a href="?pagina=login" type="submit" class="btn btn-light ">Confirmar Cadastro</a>
                        </div>
                    </div>
                </div>
            </div>






        </form>
    </div>
</div>
</div>
</div>
</div>