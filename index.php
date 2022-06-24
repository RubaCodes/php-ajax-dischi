<?php

require_once './server/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>php dischi</title>
</head>

<body>
    <main class="bg-slate-800 h-[100vh] flex items-center">
        <div class="container mx-auto">
            <section class="grid grid-cols-5 gap-4" id="library">
                <?php foreach ($database as $disk) { ?>
                    <div class="card text-center p-5 bg-slate-700">
                        <img class="w-full" src="<?php echo $disk['poster'] ?>" alt="<?php echo $disk['author'] ?>" />
                        <h2 class="text-white uppercase text-2xl font-bold pt-5">
                            <?php echo $disk['title'] ?>
                        </h2>
                        <div class="text-slate-400 capitalize text-xl pt-3"><?php echo $disk['author'] ?></div>
                        <div class="text-slate-400 text-xl"><?php echo $disk['year'] ?></div>
                    </div>
                <?php } ?>
            </section>
        </div>

    </main>
</body>

</html>