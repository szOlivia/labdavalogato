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
<body style="background-image: url({{URL('./img/labdavalogatohatter.jpg')}})"> 
    <h1 class="p-5 fw-bold text-center text-white">Labda szín válogató</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST">
    {{-- <form class="row g-12" > --}}
        {{-- <div class="container-fluid text-center"> --}}
            {{-- <div class="row gx-3 gy-2 align-items-center"> --}}
         
                {{-- <div class="col-sm-3"> --}}
                    {{-- <div class="ps-5"> --}}
                     @csrf
                    <div class="my-3">
                        <label class="text-white container-md fw-bold"> Hány labdát szeretne válogatni?</label>
                        <input type="number" class="form-control" name="db" id="db" min="1" max="6" placeholder="1-től 6-ig írjon be egy számot">
                    </div>
                </div>
                
                {{-- <div class="col-sm-3"> --}}
                    @csrf
                    <div class="col-6">
                    <div class="my-3">
                    <label class="text-white container-md fw-bold" >Melyik színból szeretne legalabb 1db-ot?</label>
                    <select class="form-select"  id="inlineFormSelectPref">
                    <option selected> Labda színek:</option>
                    <option value="piros">Piros</option>
                    <option value="kek">Kék</option>
                    <option value="zold">Zöld</option>
                    </select>
                </div>
            </div>
        </div>

            <br>

        <div class="container">
            {{-- <div class="row gx-3 gy-2 align-items-center"> --}}
                {{-- <div class="col-sm-3"> --}}
                    @csrf
                <div class="col-12">
                
                    <label class="text-white container-md fw-bold">Addig menjen a folyamat, ameddig ki nem gurul az a színű labda, amit kiválasztott?</label> 
                    <br> 
                    <div class="p-2">
                    <div class="form-check">
                    <input class="form-check-input bg-primary" type="radio" name="i_n" id="i_n1">
                    <label class="form-check-label text-white" for="i_n1"> Igen <br>
                    </label>
                </div>
                </div>

                <div class="p-2">
                <div class="form-check">
                    <input class="form-check-input bg-primary" type="radio" name="i_n" id="i_n2">
                    <label class="form-check-label text-white" for="i_n2"> Nem <br>
                    </label>
                </div>
                </div>
                    <br> 
                </div>

                <br><br>

                <div class="row justify-content-md-center">
                    <div class="col-md-4 text-center">
                      <button type="submit" class="btn btn-primary btn-lg mx-auto btn-success">Beküldés</button>
                    </div>
                  </div>

               
            </div>
        </div>
    </form>
  

</body>
</html>