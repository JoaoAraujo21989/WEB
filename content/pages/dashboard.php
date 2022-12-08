<?php
if(isset($_GET['r'])){
    if($_GET['r']=='new-patientok'){ ?>
      <div class="alert alert-success alert-dismissible fade show text-center m-3" role="alert">
          Paciente adicionado com sucesso
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php }
    if($_GET['r']=='patientDell'){ ?>
      <div class="alert alert-danger alert-dismissible fade show text-center m-3" role="alert">
          Paciente eliminado com sucesso
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
   <?php }} ?>

<div class="card bg-light mx-auto my-3 pb-5" id="cardNovoUtente">
  <div class="card-body text-center">
    <h4 class="card-title"><i class="bi bi-person-lines-fill"></i> Dashboard</h4>
    <div class="row m-2">
      <div class="col-7 text-start">
        <a href="index.php?p=patient"><button type="button" class="btn btn-outline-primary ms-1"><i class="bi bi-person-plus-fill"></i> Novo Utente </button></a>
      </div>
      <div class="col-5 text-end">
        <form class="d-flex" role="search" action="index.php">
          <input class="form-control me-2" type="search" name="search" placeholder="Ex: João" aria-label="Search">
          <button class="btn btn-outline-success me-1" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>

    <div class="list-group mx-4 mb-5 align-items-center">
      <a class="list-group-item list-group-item-action active disabled">
        <div class="container px-1 text-center">
          <div class="row align-items-center">
            <div class="col-2">
              <div class="p-1">Foto</div>
            </div>
            <div class="col-2">
              <div class="p-1">Primeiro Nome </div>
            </div>
            <div class="col-2">
              <div class="p-1">Último Nome </div>
            </div>
            <div class="col-2">
              <div class="p-1">Nº Processo </div>
            </div>
            <div class="col-2">
              <div class="p-1">NISS </div>
            </div>
            <div class="col-2">
              <div class="p-1">Contato</div>
            </div>
          </div>
        </div>
      </a>

      <?php
      if (!isset($_GET['search']))
        include('db/listPatient.php');
      else
        include('db/listPatientSearch.php');
      ?>

    </div>
  </div>
</div>