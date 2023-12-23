<?php
$sites = [
    "Saphael" => "https://www.saphael.fr",
    "Les jardins de st-denis" => "https://www.lesjardinsdestdenis.fr",
    "Neosoma" => "https://www.neosoma.fr"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Status server</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Status des serveurs : </h1>
        </div>
        <div class="container-cards">
            <?php foreach($sites as $name => $site): ?>
                <?php $handle = @fopen($site, 'r'); ?>
                <div onclick='window.location.href="<?= $site ?>";' class="card">
                    <h1><?= $name ?></h1>
                    <div class="information-card">
                        <p><?= $site ?></p>
                        <div class="div-card-statut">
                            <?php if($handle): ?>
                                <p>Status :</p>
                                <span id="span-statut" style="background: green;"></span>
                            <?php else: ?>
                                <p>Status :</p>
                                <span id="span-statut" style="background: red;"></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>