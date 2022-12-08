<div class="card mb-3 bg-light p-3 rounded-2 m-3 ">
    <img src="img/Logo.png" id="imgLogin" class="card-img-top my-3" alt="Card">
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-around">
                <div class="p-2">
                    <div class="card" id="cardLogin">
                        <form class="m-3" action="db/login.php" method="post">
                            <div class="mb-3">
                                <label for="form-useremail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="form-useremail" name="form-useremail" aria-describedby="emailHelp" require>
                            </div>
                            <div class="mb-3">
                                <label for="form-password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="form-password" name="form-password" require>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Esqueci a minha senha
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Recuperar password</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Qual o seu email?</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                                        <button type="button" class="btn btn-primary">Enviar email</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>