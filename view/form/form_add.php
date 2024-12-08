<?php
require_once '../../control/addForm/FormFieldGenerator.php';

$tabel = isset($_GET['tabel']) ? $_GET['tabel'] : '';
$formGenerator = new FormFieldGenerator($tabel);

$fields = $formGenerator->getFields();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah <?= ucfirst($tabel)?></title>
    <link rel="stylesheet" href="../../dist/css/style.css?v=<?= filemtime('../../dist/css/style.css')?>">
    <link rel="stylesheet" href="../../dist/css/form.css?v=<?= filemtime('../../dist/css/form.css')?>">
</head>
<body>
    <main class="main__form" id="main">
        <h1 class="title__form">Pencatatan <?= ucfirst($tabel)?></h1>
        <form action="../../control/<?=$tabel?>/proses_<?=$tabel?>.php" method="POST" class="form__add">
            <?php foreach($fields as $name => $fields):?>
                <div class="g-input">
                    <label for="<?= $name ?>" class="info"><?= $fields['label']?></label>
                    <input 
                    type="<?= $fields['type']?>"
                    name="<?= $name?>" 
                    id="<?= $name?>" 
                    placeholder="<?= $fields['placeholder']?>"
                    class="input__add"
                    required>
                </div>
                <br>
            <?php endforeach;?>
            <button class="btn" type="submit" name="tambah">Submit</button>
        </form>
    </main>
</body>
</html>