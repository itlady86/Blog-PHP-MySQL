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
        <main class="container-sm pb-5">
            <section class="d-flex flex-column col-sm-10 mx-5">
                {foreach $query as $q}
                    <div class="d-flex flex-row align-items-center">
                        <h2 class="article col-12 mb-3 p-4 bg-success rounded"><a href="view.php?id={$q['id']}"> {$q['nazev']}</a></h2>
                        <form method="post" class="delBtn col-1">
                            <input hidden name="nid" value="{$q['id']}">
                            <input name="nsmazat" class="cross" type="submit" value="&times;" title="Smazat článek">
                        </form>
                    </div>
                {/foreach}
                
                <a href="add.php" class="my-3 py-3 btn mybtn2 bg-warning" role="button">{$new}</a>
            </section>    
      
        </main>
    </body>
</html>
    


    
