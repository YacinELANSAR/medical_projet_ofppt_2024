<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de recherche</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset("assets/img/gallery/background-reservation.jpg") }}');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .form {
            margin: 18px;
            width: 90%;
            display: flex;
            justify-content: flex-start;
        }
    </style>
</head>
<body>
    <section class="main">
    <div class="row form">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">Rechercher Docteur</h3>
                    </div>
                    <div class="card-body">
                    <form method="post" action="{{ route('rd') }}" id="searchForm" class="search-form hidden">
            @csrf
            <h1 class="form-title mb-4" id="RR" ></h1>
            <div class="row" >
                <div class="col-md-6" >
                    <div class="mb-3">
                        <label for="departements" class="form-label">Département :</label>
                        <select name="departements" id="departements" class="form-select">
                            <option value="" disabled selected>Sélectionnez un département</option>
                            @foreach($deparetements as $departement)
                                <option value="{{ $departement->id }}">{{ $departement->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-6">
                        <label for="city" class="form-label">Ville :</label>
                        <select name="city" id="city" class="form-select">
                            <option value="" disabled selected>Sélectionnez une ville</option>
                            @foreach($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <button id="reserverbutton" style="background: #0A758A;
                               color: #fff !important;" type="submit" class="btn btn-lg mb-3 container">Rechercher</button>            </div>
        </form>
                    </div>
                            
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-5V5E4rjHvoU3jRq4o8Qjg4M5jdKoZE+F0qP947FPi81wlRb3lAYL/7AQVzE+KLZO" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-ByZ5/vhQIJa4I1oXwa2zgE2t6KrjQfcfsUJFzHYFMDIaXHYd"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>

