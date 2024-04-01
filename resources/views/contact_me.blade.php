<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Rendez-vous</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
        <!-- Start reservation feedback -->
        @if(Session::has('msg'))
        <div class="alert alert-info">{{ session('msg') }}</div>
        @endif
        <!-- End reservation feedback -->
        <div class="row form">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">Réserver un rendez-vous chez:</h3>
                        <h5 class="mb-3 text-center">Dr. {{$doctor->nom}} {{$doctor->prenom}}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('demande_reservation',$doctor->id) }}" method="POST" id="form">
                            @csrf
                            <div id="otherFields" style="display: none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" />
                                            @error('nom')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prenom">Prénom</label>
                                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}" />
                                            @error('prenom')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Adresse</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" />
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" />
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <label for="jour">Jour</label>
                                <select name="jour" id="jour" class="form-select" onchange="location = this.value;">
                                <option value="" readonly>Choisir jour</option>
                                    @foreach($jours as $jourOption)
                                    <option value="/contact/{{$doctor->id}}/{{ $jourOption }}" {{ $jourselected == $jourOption ? 'selected' : '' }}>
                                        {{ $jourOption ?? 'non disponible'}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('jour')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <label for="heure">Heure</label>
                                <select name="heure" id="heure" class="form-select">
                                    <option value="" readonly>Choisir Heure</option>
                                    @foreach((array)$timeIntervals ?? ['none'] as $timeInterval)
                                    <option value="{{ $timeInterval }}">{{ $timeInterval ?? 'non disponible'}}</option>
                                    @endforeach
                                </select>
                                @error('heure')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button id="reserverbutton" style="display: none;background: #0A758A;
                               color: #fff !important;" type="submit" class="btn btn-lg mb-3 container">Réserver</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--start script -->
    <script>
        document.getElementById('heure').addEventListener('change', function() {
            var otherFields = document.getElementById('otherFields');
            var reserverbutton = document.getElementById('reserverbutton');
            if (this.value) {
                otherFields.style.display = 'block';
                reserverbutton.style.display = 'block';
            } else {
                otherFields.style.display = 'none';
                reserverbutton.style.display = 'none';
            }
        });
    </script>

    <!--end script -->
</body>

</html>