<?php

require_once './server/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dischi</title>
</head>

<body>
    <main>
        <div class="container mx-auto">
            <section id="library">
                <?php foreach ($database as $disk) { ?>
                    <div class="card">
                        <?php var_dump($disk) ?>
                    </div>
                <?php } ?>
            </section>
        </div>

    </main>
</body>

</html>