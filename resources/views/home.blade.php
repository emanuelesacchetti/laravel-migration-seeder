<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body style='height:1000px; background-color:red;'>
    <main>

    
    <div class="container">
        <div class="row">
            @foreach($trains as $train)
                <div class="col-12">
                    <div class="card m-2" style="width: 100%;">
                        <div class="card-body">
                          <h5 class="card-title">N°Treno - {{ $train->Codice_treno }} - {{ $train->Azienda }}</h5>
                          <br>
                          <h6 class="card-title">In partenza il: {{ $train->Orario_do_partenza }} da {{ $train->Stazione_di_partenza }}</h6>
                          <h6 class="card-title">Con destinazione il: {{ $train->Orario_di_arrivo }} a {{ $train->Stazione_di_arrivo }}</h6>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>

</main>
</body>
</html>