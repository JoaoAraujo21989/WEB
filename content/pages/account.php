<?php include('db/getUtilizadorByID.php') ?>

<div class="card bg-light mx-auto my-3" id="cardNovoUtente">
    <h4 class="card-title m-3 text-center"><i class="bi bi-person-fill"></i> Minha Conta</h4>
    <div class="row mx-4">
        <label for="form-address" class="form-label">Foto</label>
        <div class="card bg-with">
            <form action="db/uploadFotoUser.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-2">
                        <?php if ($row['photo'] == '') { ?>
                            <img class="m-2" src="img/FotosUser/default.png" style="height: 100px; width: 100px;">
                        <?php } else { ?>
                            <img class="m-2" src="img/FotosUser/<?= $row['photo'] ?>" style="height: 100px; width: 100px;">
                        <?php } ?>
                    </div>
                    <div class="col-10">
                        <input class="mx-5 my-2" type="file" name="form_photo_user" id="form_photo_user" >
                        <button type="submit" class="btn btn-primary mx-5 mt-3 mb-2" id="btn_edit_photo_user" name="btn_edit_photo_user" >Salvar foto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row m-3">
        <form action="db/updateUtilizador.php" method="post">
            <input type="text" class="form-control" id="form_User_Id" name="form_User_Id" value="<?= $row['id'] ?>" readonly hidden>
            <div class="mb-3">
                <label for="form_User_Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="form_User_Password" name="form_User_Password" placeholder="*********" readonly>
            </div>
            <div class="mb-3">
                <label for="form_User_first_name" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="form_User_first_name" name="form_User_first_name" value="<?= $row['first_name'] ?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="form_User_last_name" class="form-label">Ultimo nome</label>
                <input type="text" class="form-control" id="form_User_last_name" name="form_User_last_name" value="<?= $row['last_name'] ?>" required readonly>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="form_User_postal_code" class="form-label">Codido postal:</label>
                        <input type="text" class="form-control" id="form_User_postal_code" name="form_User_postal_code" placeholder="Ex:0000-000" value="<?= $row['postal_code'] ?>" readonly onchange="getPostalCodeUser()">
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="form_User_parish" class="form-label">Freguesia:</label>
                        <input type="text" class="form-control" id="form_User_parish" name="form_User_parish" value="<?= $row['parish'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="form_User_address" class="form-label">Morada:</label>
                <input type="text" class="form-control" id="form_User_address" name="form_User_address" value="<?= $row['address'] ?>" readonly>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="form_User_district" class="form-label">Distrito:</label>
                        <input type="text" class="form-control" id="form_User_district" name="form_User_district" value="<?= $row['district'] ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="form_User_municipality" class="form-label">Concelho:</label>
                        <input type="text" class="form-control" id="form_User_municipality" name="form_User_municipality" value="<?= $row['municipality'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="form_User_phone_contact" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="form_User_phone_contact" name="form_User_phone_contact" value="<?= $row['phone_contact'] ?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">

                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <button id="account_btn_save" type="submit" class="btn btn-success m-1" hidden>Guardar Alterações</button>
                        <button id="account_btn_edit" type="button" class="btn btn-primary m-1" onclick="accountEdit()">Editar</button>
                        <button id="account_btn_cancel" type="button" class="btn btn-light m-1" onclick="accountCancel()">Sair</button>
                    </div>
                    <div class="col text-end">
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>