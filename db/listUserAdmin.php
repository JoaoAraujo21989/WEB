<?php
include('conn.php');

$sql = "SELECT * FROM user;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="list-group-item list-group-item-action">
            <div class="container px-1 text-center">
                <div class="row align-items-center">
                    <div class="col-2">
                        <?php if ($row['photo'] != '') { ?>
                            <div class="p-1"><img src="img/FotosUser/<?= $row['photo'] ?>" id="foto-user-lista" alt=""></div>
                        <?php } else { ?>
                            <div class="p-1"><img src="img/FotosUser/default.png" id="foto-user-lista" alt=""></div>
                        <?php } ?>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['first_name'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['last_name'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="p-1"><?= $row['email'] ?></div>
                    </div>
                    <div class="col-2">
                        <?php if ($row['usertype_id'] == 1) { ?>
                            <div class="p-1">Administrador</div>
                        <?php } else { ?>
                            <div class="p-1">Colaborador</div>
                        <?php } ?>
                    </div>
                    <div class="col-2">
                        <?php if ($row['usertype_id'] != 1) { ?>
                            <form action="db/dellUser.php" method="post">
                                <input type="number" class="form-control" id="del_user_form_id" name="del_user_form_id" value="<?= $row['id'] ?>" readonly hidden>
                                <button type="submit" class="btn btn-outline-danger m-1"> <i class="bi bi-trash3-fill"></i></i></button>
                            </form>
                        <?php } else { ?>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
$conn->close();
?>