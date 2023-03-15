<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Labda szín válogató</h1>
    <form>
        <label> Hány labdát szeretne válogatni?</label><br>
        <input type="number" name="db" id="db" minlength="1" maxlength="6"><br>
         <br>

        <label >Melyik színból szeretne legalabb 1db-ot?</label> <br>
        <label for="labda_szin">Labda szín:</label>
        <select id="labda_szin" name="labda_szin" size="3">
            <option value="piros">Piros</option>
            <option value="kek">Kék</option>
            <option value="zold">Zöld</option>
            
        </select> <br>
        <br>
        <label>Addig menjen a folyamat, ameddig ki nem gurul az a színű labda, amit kiválasztott?</label> 
        <br>
        <input type="radio" name="i_n" id=""> Igen <br>
        <input type="radio" name="i_n" id=""> Nem 
        <br> <br>

        <label> Kitöltött adatok beküldése:</label> <input type="submit" value="Beküldés">

    </form>

    
</body>
</html>