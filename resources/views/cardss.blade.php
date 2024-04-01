<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcins</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

   
    
<style>
   .reservation-link {
            display: inline-block;
            padding: 10px 20px;
            background: hsla(197, 94%, 51%, 1);

background: linear-gradient(90deg, hsla(197, 94%, 51%, 1) 0%, hsla(183, 39%, 62%, 1) 99%);

background: -moz-linear-gradient(90deg, hsla(197, 94%, 51%, 1) 0%, hsla(183, 39%, 62%, 1) 99%);

background: -webkit-linear-gradient(90deg, hsla(197, 94%, 51%, 1) 0%, hsla(183, 39%, 62%, 1) 99%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#0AB6F8", endColorstr="#78C0C4", GradientType=1 );
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .reservation-link:hover {
          color: white;

            background: hsla(191, 75%, 60%, 1);

background: linear-gradient(90deg, hsla(191, 75%, 60%, 1) 0%, hsla(248, 87%, 36%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(191, 75%, 60%, 1) 0%, hsla(248, 87%, 36%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(191, 75%, 60%, 1) 0%, hsla(248, 87%, 36%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#4DC9E6", endColorstr="#210CAE", GradientType=1 );
        }
    .rounded-img {
        width: 50%;
        height: 50%;
        border: 2px solid rgb(198, 221, 237);
        
        
    }
  </style>
   <link href="assets/css/theme.css" rel="stylesheet" />

 <script type='text/javascript' src=''></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
 </head>
<body >
<div class="container mt-5">
    @if($doctordepart->count() > 0)
        <div class="row">
            @foreach ($doctordepart as $key => $doctor)
                @if ($key % 3 == 0 && $key != 0)
                    </div><div class="row">
                @endif
                <div class="col-md-4 mb-8 mb-md-0">
                    <div class="card card-span h-100 shadow">
                        <div class="card-body d-flex flex-column flex-center py-5">
                            <img src="{{ $doctor->profileimage }}" width="128" alt="...">
                            <h5 class="mt-3">{{ $doctor->nom }} {{ $doctor->prenom }}</h5>
                            <p class="mb-0 fs-xxl-1">{{ $doctor->departement->libelle }}</p>
                            <p class="text-600 mb-0">{{ $doctor->ville->libelle }}</p>
                            <p class="text-600 mb-4"></p>
                            <div class="text-center">
                                <a href="{{ route('show_contact_page', $doctor->id) }}" class="reservation-link">Réserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h3 class="text-center">Aucun docteur avec ces données</h3>
        <h3 class="text-center">Loading ...</h3>
    @endif
</div>


            
</body>
</html>
