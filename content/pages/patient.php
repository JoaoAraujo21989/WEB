<?php if (isset($_GET['id'])) {
  include('db/selectPatientByID.php');
} ?>

<div class="card bg-light mx-auto my-3" id="cardNovoUtente">
  <div class="mx-3 my-2">
    <?php if (isset($_GET['id'])) { ?>
      <h4 class="card-title m-3 text-center"><i class="bi bi-pen-fill"></i> Editar Utente</h4>
      <form action="db/updatePatient.php" method="post" enctype="multipart/form-data">
      <?php } else { ?>
        <h4 class="card-title m-3 text-center"><i class="bi bi-plus-circle-fill"></i> Novo Utente</h4>
        <form action="db/insertPatient.php" method="post" enctype="multipart/form-data">
        <?php } ?>
        <form class="m-3" action="" method="post">
          <input type="number" class="form-control" id="np_form_id" name="np_form_id" value="<?php if (isset($_GET['id'])) echo $row['id']; ?>" readonly hidden>
          <div class="mb-3">
            <label for="np_form_first_name" class="form-label">Primeiro nome:</label>
            <input type="text" class="form-control" id="np_form_first_name" name="np_form_first_name" value="<?php if (isset($_GET['id'])) echo $row['first_name']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="np_form_last_name" class="form-label">Último nome:</label>
            <input type="text" class="form-control" id="np_form_last_name" name="np_form_last_name" value="<?php if (isset($_GET['id'])) echo $row['last_name']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="np_form_birth_date" class="form-label">Data nascimento:</label>
            <input type="date" class="form-control" id="np_form_birth_date" name="np_form_birth_date" value="<?php if (isset($_GET['id'])) echo $row['birth_date']; ?>" required>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="np_form_process_number" class="form-label">Nº Processo:</label>
                <input type="number" class="form-control" id="np_form_process_number" name="np_form_process_number" value="<?php if (isset($_GET['id'])) echo $row['process_number']; ?>" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="np_form_niss" class="form-label">NISS:</label>
                <input type="number" class="form-control" id="np_form_niss" name="np_form_niss" value="<?php if (isset($_GET['id'])) echo $row['niss']; ?>" required>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-4">
              <div class="mb-3">
                <label for="np_form_postal_code" class="form-label">Codido postal:</label>
                <input type="text" class="form-control" id="np_form_postal_code" name="np_form_postal_code" placeholder="Ex:0000-000" value="<?php if (isset($_GET['id'])) echo $row['postal_code']; ?>" onchange="getPostalCode()">
              </div>
            </div>
            <div class="col-8">
              <div class="mb-3">
                <label for="np_form_parish" class="form-label">Freguesia:</label>
                <input type="text" class="form-control" id="np_form_parish" name="np_form_parish" value="<?php if (isset($_GET['id'])) echo $row['parish']; ?>">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="np_form_address" class="form-label">Morada:</label>
            <input type="text" class="form-control" id="np_form_address" name="np_form_address" value="<?php if (isset($_GET['id'])) echo $row['address']; ?>">
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="np_form_district" class="form-label">Distrito:</label>
                <input type="text" class="form-control" id="np_form_district" name="np_form_district" value="<?php if (isset($_GET['id'])) echo $row['district']; ?>">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="np_form_municipality" class="form-label">Concelho:</label>
                <input type="text" class="form-control" id="np_form_municipality" name="np_form_municipality" value="<?php if (isset($_GET['id'])) echo $row['municipality']; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="np_form_email_contact" class="form-label">Email:</label>
                <input type="email" class="form-control" id="np_form_email_contact" name="np_form_email_contact" value="<?php if (isset($_GET['id'])) echo $row['email_contact']; ?>">
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="np_form_phone_contact" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="np_form_phone_contact" name="np_form_phone_contact" value="<?php if (isset($_GET['id'])) echo $row['phone_contact']; ?>">
              </div>
            </div>
          </div>
          <hr>
          <div class="mb-3">
            <label for="np_form_photo_patient" class="form-label">Foto:</label>
            <div class="container text-center mb-4">
              <div class="row">
                <div class="col-3">
                  <?php if (isset($_GET['id'])) { ?>
                    <?php if ($row['photo'] != '') { ?>
                      <img src="img/FotosUtentes/p<?= $row['id'] ?>.png" id="foto-user" alt="">
                    <?php } else { ?>
                      <img src="img/FotosUtentes/default.png" id="foto-user" alt="">
                    <?php } ?>
                  <?php } ?>
                </div>
                <div class="col-9">
                  <input type="file" class="form-control" id="np_form_photo_patient" name="np_form_photo_patient">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary m-3">Salvar Utente</button>
            <a class="btn btn-light m-3" href="index.php?p=dashboard" onclick="clearNewPatient()">Sair</a>
          </div>
        </form>
  </div>
</div>

