<?php
define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT * FROM patient WHERE visibility = 0;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="list-group-item list-group-item-action">
            <div class="container px-1 text-center">
                <div class="row align-items-center">
                    <div class="col-2">
                        <?php if ($row['photo'] != '') { ?>
                            <div class="p-1"><img src="img/FotosUtentes/<?= $row['photo'] ?>" id="foto-user-lista" alt=""></div>
                        <?php } else { ?>
                            <div class="p-1"><img src="img/FotosUtentes/default.png" id="foto-user-lista" alt=""></div>
                        <?php } ?>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['first_name'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['last_name'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['process_number'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['niss'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="row justify-content-center">
                            <div class="col">
                                <form action="db/updatePatientVisibility.php" method="post">
                                    <input type="number" class="form-control" id="np_form_id" name="np_form_id" value="<?= $row['id'] ?>" readonly hidden>
                                    <input type="number" class="form-control" id="np_form_visibility" name="np_form_visibility" value="<?= $row['visibility'] ?>" readonly hidden>
                                    <button type="submit" class="btn btn-outline-success m-1"> <i class="bi bi-eye-fill"></i></button>
                                </form>
                            </div>
                            <div class="col">
                                <form action="db/dellPatient.php" method="post">
                                    <input type="number" class="form-control" id="del_form_id" name="del_form_id" value="<?= $row['id'] ?>" readonly hidden>
                                    <button type="submit" class="btn btn-outline-danger m-1"> <i class="bi bi-trash3-fill"></i></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
$conn->close();
?>
