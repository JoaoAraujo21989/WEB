<?php
define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT * FROM patient WHERE visibility=1 ORDER BY id DESC;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
    <button class="list-group-item list-group-item-action">
        <a href="index.php?p=details-patient&id=<?= $row['id'] ?>" id="patentList" style="text-decoration: none; color:black">
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
                        <div class="p-1"><?= $row['phone_contact'] ?></div>
                    </div>
                </div>
            </div>
        </a>
    </button>
<?php
    }
}
$conn->close();
?>