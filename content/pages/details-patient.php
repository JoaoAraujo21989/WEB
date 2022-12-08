<?php if (isset($_GET['id'])) {
  include('db/selectPatientByID.php');
  if (isset($_GET['id']) && isset($_GET['dell']))
    include('db/dellPatientByID.php');
} ?>

<div class="m-3 text-center">
  <a href="index.php?p=patient&id=<?= $row['id'] ?>"><button type="button" class="btn btn-outline-warning mx-2"><i class="bi bi-pencil-fill"></i> Editar</button></a>
  <button class="btn btn-outline-danger mx-2" data-bs-toggle="modal" data-bs-target="#ModalExcluirUtente"><i class="bi bi-trash2-fill"></i> Excluir </button>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalExcluirUtente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tem a certesa que quer excluir este utente?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h2><i class="bi bi-shield-fill-exclamation text-danger"></i></h2>
        <p>Esta ação é irreversivel.</p>
        <p>Ao excluir o utente irá excluir todos os seus dados.</p>
      </div>
      <div class="modal-footer text-center">
        <form action="db/dellPatientByID.php" method="post">
          <input type="number" class="form-control" id="form-id" name="form-id" value="<?php if (isset($_GET['id'])) echo $row['id']; ?>" readonly hidden>
          <button type="submit" class="btn btn-danger mx-2" id="liveToastBtn"><i class="bi bi-trash2-fill"></i> Excluir </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="card bg-light mx-auto mb-4" id="cardNovoUtente">
  <h4 class="card-title m-3 text-center"><i class="bi bi-eye-fill"></i> Utente</h4>
  <div class="m-3 text-center">
    <div class="mb-3">
      <div class="row align-items-center">
        <div class="col">
          <div div class="mb-3">
            <?php if ($row['photo'] != '') { ?>
              <img src="img/FotosUtentes/<?= $row['photo'] ?>" id="foto-user" alt="">
            <?php } else { ?>
              <img src="img/FotosUtentes/default.png" id="foto-user" alt="">
            <?php } ?>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="patient-form-first_name" class="form-label"> <strong>Primeiro nome:</strong> </label>
            <br>
            <label><?= $row['first_name'] ?></label>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> <strong>Último nome:</strong> </label>
            <br>
            <label><?= $row['last_name'] ?></label>
          </div>
        </div>
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> <strong>Data nascimento:</strong> </label>
          <br>
          <label><?= $row['birth_date'] ?></label>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> <strong>Nº Processo:</strong> </label>
          <br>
          <label><?= $row['process_number'] ?></label>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>NISS:</strong></label>
          <br>
          <label><?= $row['niss'] ?></label>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>Morada:</strong></label>
          <br>
          <label><?= $row['address'] ?></label>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>Codido postal:</strong></label>
          <br>
          <label><?= $row['postal_code'] ?></label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>Distrito:</strong></label>
          <br>
          <label><?= $row['district'] ?></label>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>Concelho:</strong></label>
          <br>
          <label><?= $row['municipality'] ?></label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>Email:</strong></label>
          <br>
          <label><?= $row['email_contact'] ?></label>
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>Telefone:</strong></label>
          <br>
          <label><?= $row['phone_contact'] ?></label>
        </div>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d695.9256009324206!2d-8.427603966934205!3d41.368989245385265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a86d30e8904f4c9!2sCentro%20Social%20e%20Cultural%20S%C3%A3o%20Pedro%20de%20Bairro!5e1!3m2!1spt-PT!2sus!4v1661373881091!5m2!1spt-PT!2sus" width="80%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>