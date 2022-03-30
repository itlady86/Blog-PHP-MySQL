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
    <h1 class="text-center mb-5 py-5 alert alert-primary" role="alert">{$title}</h1>
    <main class="container-sm">
    {foreach $query as $q}
    <div class="d-flex flex-column align-items-sm-center mx-5 p-5 bg-dark rounded-3">
        <form method="post" class="d-flex flex-column col-sm-10 col-lg-6 mt-3">
            <input hidden name="nid" value="{$q['id']}">
            <input name="nnazev" class="rounded py-2" value="{$q['nazev']}">
            <textarea name="ntext" cols="30" rows="10" class="my-2">{$q['text']}</textarea>
            <input name="nautor" class="rounded py-2" value="{$q['autor']}">
            <div class="d-flex flex-row justify-content-around">
                <a href="index.php"><input type="button" class="py-2 px-5 mt-4 bg-warning rounded" value="Zrušit"></a>
                <input type="submit" name="nupdate" class="py-2 px-5 mt-4 bg-info rounded" value="Uložit">
            </div>
        </form>
    </div>
    {/foreach}
    </main>
</body>
</html>
