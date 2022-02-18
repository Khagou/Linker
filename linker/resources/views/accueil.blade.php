<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Linker</h1>
        <form action="/addLink" method="post">
            @csrf
                <label for="nom">Nom du lien</label>
                <input type="text" name="nom" id="name">

                <label for="lien">Votre lien</label>
                <input type="text" name="lien" id="link">

                <input type="submit" value="Envoyer">
        </form>

        <h2>Mes liens</h2>
        @foreach ($links as $link)
        <ul>
            
            <li><a href="/l/{{$link->id}}/afficher">{{$link->nom}}</a></li>

        </ul>
        @endforeach
    </div>

</body>
</html>