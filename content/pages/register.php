<div class="card bg-light mx-auto my-3" id="cardNovoUtente">
    <h4 class="card-title m-3 text-center"><i class="bi bi-person-plus-fill"></i> Criar Colaborador</h4>

    <div class="m-3">
        <form action="db/registerUser.php" method="post">
            <div class="mb-3">
                <label for="nu_form_first_name" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="nu_form_first_name" name="nu_form_first_name" required>
            </div>
            <div class="mb-3">
                <label for="nu_form_last_name" class="form-label">Último nome</label>
                <input type="text" class="form-control" id="nu_form_last_name" name="nu_form_last_name" required>
            </div>
            <div class="mb-3">
                <label for="nu_form_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="nu_form_email" name="nu_form_email" required>
            </div>
            <div class="form-check">
                <input class="nu_form_type_user" type="radio" name="nu_form_type_user" id="nu_form_type_user2" value="2" checked>
                <label class="form-check-label" for="nu_form_type_user2">
                    Colaborador
                </label>
            </div>
            <div class="form-check">
                <input class="nu_form_type_user" type="radio" name="nu_form_type_user" id="nu_form_type_user1" value="1">
                <label class="form-check-label" for="nu_form_type_user1">
                    Administrador
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-4 me-2">Criar Colaborador</button>
            <a type="submit" href="index.php?p=backoffice" class="btn btn-light mt-4" >Sair</a>
        </form>
    </div>


</div>
