<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labdaválogatása</title>
    
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 class="p-5 text-center">Labda szín válogató</h1>
    <form class="text-center">

        <div>
            <label> Hány labdát szeretne válogatni?</label>
            <input type="number" name="db" id="db" minlength="1" maxlength="6">
        </div>

        <div>
            <label >Melyik színból szeretne legalabb 1db-ot?</label>
            <label for="labda_szin">Labda szín:</label>
            <select id="labda_szin" name="labda_szin" size="3">
            <option value="piros">Piros</option>
            <option value="kek">Kék</option>
            <option value="zold">Zöld</option>
            
            </select>
        </div>
        
        <label>Addig menjen a folyamat, ameddig ki nem gurul az a színű labda, amit kiválasztott?</label> 
        <br>
        <input type="radio" name="i_n" id=""> Igen <br>
        <input type="radio" name="i_n" id=""> Nem 
        <br> <br>

        <label> Kitöltött adatok beküldése:</label> <input type="submit" value="Beküldés">

    </form>

    
</body>
</html>