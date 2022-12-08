<div class="card bg-light mx-auto my-3 pb-5" id="cardNovoUtente">
    <h4 class="card-title m-3 text-center"><i class="bi bi-card-heading"></i> Backoffice</h4>

    <div class="card" id="DocInst">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active mx-2 mt-2" id="patient-tab" data-bs-toggle="tab" data-bs-target="#patient-tab-pane" type="button" role="tab" aria-controls="patient-tab-pane" aria-selected="true">Utentes</button>
            </li>
            <li class="nav-item mx-2 mt-2" role="presentation">
                <button class="nav-link" id="users-tab" data-bs-toggle="tab" data-bs-target="#users-tab-pane" type="button" role="tab" aria-controls="users-tab-pane" aria-selected="false">Usuários</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="patient-tab-pane" role="tabpanel" aria-labelledby="patient-tab" tabindex="0">
                <!-- -------------------------------------LISTA DE PACIENTES---------------------------------------------------- -->
                <div class="list-group mx-4 my-4">
                    <div class="list-group-item list-group-item-action active disabled">
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
                                    <div class="p-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('db/listPatientAdmin.php');
                    ?>
                </div>
            </div>
            <!-- ------------------------------------- FIM LISTA DE PACIENTES------------------------------------------- -->
            
            
            <!-- -------------------------------------LISTA DE USERS---------------------------------------------------- -->
            <div class="tab-pane fade" id="users-tab-pane" role="tabpanel" aria-labelledby="users-tab" tabindex="0">
                <div class="text-end">
                    <a href="index.php?p=register" class="btn btn-outline-success me-4 mt-2"><i class="bi bi-person-plus-fill"> Criar Colaborador</i></a>
                </div>

                <div class="list-group mx-4 my-4">
                    <div class="list-group-item list-group-item-action active disabled">
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
                                    <div class="p-1">Email </div>
                                </div>
                                <div class="col-2">
                                    <div class="p-1">Tipo</div>
                                </div>
                                <div class="col-2">
                                    <div class="p-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('db/listUserAdmin.php');
                    ?>

                    <!-- -------------------------------------FIM LISTA DE USERS---------------------------------------------------- -->

                </div>

            </div>
        </div>
    </div>
</div>
</div>