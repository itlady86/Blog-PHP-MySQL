<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{$link}">
</head>
    
<body>
        <h1 class="text-center mb-5 py-5 alert alert-primary" role="alert"> {$title} </h1>
        {foreach $query as $q}
            <section class="d-flex flex-column align-items-sm-center">
                <div class="col-sm-8 col-lg-6 my-3 rounded bg-text">
                    <h2 class="p-3 bg-success rounded"><a href="view.php?id={$q['id']}">{$q['nazev']}</a></h2>
                    <div class="px-5">
                        <div class="py-3">{$q['text']}</div>
                        <div class="py-2 my-1"> Vloženo: {$q['datum']}</div>
                        <div class="py-2 mb-3"> Autor: {$q['autor']}</div>
                    </div>
                </div>
                <div class="d-flex flex-row mb-5">
                    <a href="index.php" class="btn mybtn1 bg-success mx-3" role="button">Zpět</a>
                    <a href="edit.php?id={$q['id']}" name="id" value="{$q['id']}" class="btn mybtn1 bg-warning mx-3" role="button">Upravit článek</a>
                </div>
            </section>    
        {/foreach}

    </body>
</html>