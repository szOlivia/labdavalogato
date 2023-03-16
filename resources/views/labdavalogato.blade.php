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
    <form class="row g-12" >
        <div class="container-fluid">
        <div class="row gx-3 gy-2 align-items-center">
            
            <div class="col-sm-3">
                <div class="ps-5">
                    <label> Hány labdát szeretne válogatni?</label>
                    <input type="number" class="form-control" name="db" id="db" minlength="1" maxlength="6" placeholder="1-től 6-ig írjon be egy számot">
                </div>
            </div>
            
            <div class="col-sm-3">
                <label >Melyik színból szeretne legalabb 1db-ot?</label>
                <select class="form-select" id="inlineFormSelectPref">
                <option selected>Labda szín:</option>
                <option value="piros">Piros</option>
                <option value="kek">Kék</option>
                <option value="zold">Zöld</option>
                </select>
            </div>
        </div>
    </div>

    
    <div class="container-fluid">
        <div class="row gx-3 gy-2 align-items-center">
            <div class="col-sm-3">
                <label>Addig menjen a folyamat, ameddig ki nem gurul az a színű labda, amit kiválasztott?</label> 
                <br>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="i_n" id="i_n1">
                <label class="form-check-label" for="i_n1"> Igen <br>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="i_n" id="i_n2">
                <label class="form-check-label" for="i_n2"> Nem <br>
                </label>
            </div>
                <br> 
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Default radio
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Default checked radio
                </label>
              </div>
            
            <div class="col-sm-3">
             <button type="submit" class="btn btn-primary">Beküldés</button>
            </div>
        </div>
    </div>
    </form>

    
</body>
</html>