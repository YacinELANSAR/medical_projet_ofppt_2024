<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Mon Cabinet</title>
  <style>
    .rounded-img {
      width: 50%;
      height: 50%;
      border: 2px solid rgb(198, 221, 237);


    }
    .loader {
  width: 48px;
  height: 48px;
  display: inline-block;
  position: relative;
}
.loader::after,
.loader::before {
  content: '';  
  box-sizing: border-box;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: 2px solid #FFF;
  position: absolute;
  left: 0;
  top: 0;
  animation: animloader 2s linear infinite;
}
.loader::after {
  animation-delay: 1s;
}

@keyframes animloader {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
  </style>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="assets/css/theme.css" rel="stylesheet" />

</head>


<body>

<span class="loader"></span>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="{{ route('homepage') }}"><img src="assets/img/gallery/logo.png" width="118" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
            <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Accueil</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#environ">Environ</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#départements">Départements</a></li>
            <li class="nav-item px-2"><a class="nav-link" href="#médecins">Médecins</a></li>
          </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ route('login.show') }}">Espace Docteur</a>
        </div>
      </div>
    </nav>
    <section class="py-xxl-10 pb-0" id="home">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row min-vh-xl-100 min-vh-xxl-25">
          <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
            <img style="border: 2px solid rgb(178, 221, 237); border-radius: 10%;background-color:rgb(178, 221, 237)" class="pt-7 pt-md-0 w-100" src="assets/img/gallery/hero.png" alt="hero-header" />
          </div>
          <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
            <h1 class="fw-light font-base fs-5 fs-xxl-7">Bienvenue chez <strong>Mon Cabinet .</strong></h1>
            <p class="fs-3 mb-5">Des rendez-vous médicaux sans tracas à tout moment,&nbsp;<strong>n'importe où.</strong></p><a class="btn btn-lg btn-primary rounded-pill" href="{{ route('afficherdoctor') }}" role="button">Réserver maintenant</a>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5" id="departments">

      <div class="container">
        <div class="row">
          <div class="col-12 py-3">
          </div>
          <!--/.bg-holder-->

          <h1 class="text-center">Départements</h1>
        </div>
      </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 ds-flex justify-content-center " id="départements" style="border: 2px solid rgb(178, 221, 237); padding:10px !important">
      <div class="row gy-4">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiologie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurologie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hépatologie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pédiatrie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Soin des yeux</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="tab-content">
            <!-- Tab panes -->
            <div class="tab-pane active show" id="tab-1">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1 text-center">
                  <h3>Cardiologie</h3>
                  <p>Branche de la médecine du thé qui se concentre sur l’étude, le diagnostic et le traitement des troubles liés au thé blessé et au système circulatoire.

                    Cardiologue, professions médicales spécialisées en cardiologie, fondateurs et gestionnaires de divers commutateurs d’état S Hurt Diziasis, Hurt Velore, Coronaire Arteri Desias, Valfollar Hurt Diziasis, et Arithmias (rythmes normaux blessés).</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('assets/img/departments-1.jpg') }}" alt="Cardiologie" class="img-fluid rounded-img">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1 text-center">
                  <h3>Neurologie</h3>
                  <p>La neurologie est une spécialité médicale qui se concentre sur l’étude, le diagnostic et le traitement des troubles affectant le système nerveux. Le système nerveux comprend le cerveau, la moelle épinière, les nerfs et les muscles, et les neurologues sont des médecins spécialisés qui traitent des affections qui ont un impact sur ces composants.

                    Les troubles neurologiques peuvent aller d’affections courantes comme les maux de tête et les troubles du sommeil à des affections plus complexes et graves telles que l’épilepsie, les accidents vasculaires cérébraux, la sclérose en plaques et les maladies neurodégénératives comme la maladie d’Alzheimer et la maladie de Parkinson.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img style="display:flex !important;justify-content:center !important;align-items:center !important" src="{{ asset('assets/img/departments-2.jpg') }}" alt="Neurologie" class="img-fluid rounded-img">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1 text-center">
                  <h3>Hépatologie</h3>
                  <p>L’hépatologie est la branche de la médecine qui se concentre sur l’étude, le diagnostic et le traitement des troubles liés au foie, à la vésicule biliaire, à l’arbre biliaire et au pancréas. Les hépatologues sont des professionnels de la santé spécialisés dans ce domaine et traitent un large éventail d’affections affectant le foie, notamment l’hépatite virale, la maladie alcoolique du foie, la stéatose hépatique, la cirrhose du foie et les tumeurs du foie.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img style="display:flex !important;justify-content:center !important;align-items:center !important" src="{{ asset('assets/img/departments-3.jpg') }}" alt="Hépatologie" class="img-fluid rounded-img">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1 text-center">
                  <h3>Pédiatrie</h3>
                  <p>La pédiatrie est la branche de la médecine spécialisée dans les soins aux nourrissons, aux enfants et aux adolescents. Les pédiatres sont des professionnels de la santé qui se concentrent sur le bien-être physique, émotionnel et social des jeunes, de la naissance à l’adolescence. Le domaine de la pédiatrie englobe un large éventail d’aspects de la santé, y compris les soins préventifs, le diagnostic et le traitement de diverses conditions médicales spécifiques aux enfants.

                    Les pédiatres traitent un large éventail de problèmes de santé, tels que les infections infantiles, les problèmes de croissance et de développement, les vaccinations et les problèmes de comportement. Ils jouent un rôle crucial dans le suivi et la promotion de la santé globale des enfants, en veillant à ce qu’ils atteignent les étapes de leur développement et qu’ils passent à l’âge adulte avec une santé optimale.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img style="display:flex !important;justify-content:center !important;align-items:center !important" src="{{ asset('assets/img/departments-4.jpg') }}" alt="Pédiatrie" class="img-fluid rounded-img">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1 text-center">
                  <h3>Soin des yeux</h3>
                  <p>Les soins oculaires, également connus sous le nom de soins ophtalmiques ou optométriques, sont une branche des soins de santé qui se concentre sur le diagnostic, le traitement et la prévention des affections liées aux yeux et à la vision. Les professionnels de la vue comprennent les ophtalmologistes, les optométristes et les opticiens, chacun ayant un rôle spécifique dans le maintien et l’amélioration de la santé oculaire.

                    Les soins oculaires impliquent des examens de la vue de routine pour évaluer la vision et détecter les problèmes potentiels à un stade précoce. ainsi que la prise en charge de diverses affections oculaires telles que les erreurs de réfraction (myopie, hypermétropie, astigmatisme), la cataracte, le glaucome et la dégénérescence maculaire. De plus, les professionnels de la vue jouent un rôle crucial dans la promotion de la santé oculaire, en fournissant des conseils sur la protection oculaire appropriée et en abordant les problèmes liés à la fatigue oculaire, en particulier à l’ère des écrans numériques. Des soins oculaires réguliers sont essentiels pour maintenir une bonne vision et une bonne santé oculaire globale tout au long de la vie.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{ asset('assets/img/departments-5.jpg') }}" alt="Soin des yeux" class="img-fluid rounded-img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->





    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0" id="about">

      <div class="container">
        <div class="row">
          <div class="col-12 py-3">
          </div>
          <!--/.bg-holder-->

          <h1 class="text-center">Environ</h1>
        </div>
      </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-5" id="environ">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="assets/img/gallery/health-care.png" alt="..." /></div>
          <div class="col-md-6 text-center text-md-start">
            <h2 class="fw-bold mb-4 text-center">Votre santé, votre choix</h2>
            <p>Nous comprenons que les besoins de chacun en matière de soins de santé sont uniques. C'est pourquoi Mon Cabinet platforme propose un large éventail de professionnels de la santé, vous permettant de choisir le médecin qui correspond le mieux à vos besoins.</p>

          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0">
      <div class="container" id="médecins">
        <div class="row">
          <div class="col-12 py-3">
            <!-- Your other content here -->
            <h1 class="text-center">Médecins</h1>
            @if($doctors->count()>0)
            <div class="row">
              @foreach ($doctors as $key => $doctor)
              @if ($key % 3 == 0)
            </div>
            <div class="row">
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

                      <a class="btn btn-outline-secondary rounded-pill" href="{{route('show_dr',$doctor->id)}}">View Profile</a>

                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
              {{ $doctors->links() }}
            </div>
            @else
            <h3 class="text-center" style="color: black !important;">Aucun docteur </h3>
        <h3 class="text-center" style="color: black !important;">Loading ...</h3>
            @endif
          </div>
        </div>
      </div>
    </section>

    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!--/.bg-holder-->



    <div class="container">
      <h1 class="text-center m-3">Commentaires</h1>
      @php
      $perPage = 6;
      @endphp

      @foreach ($commentaires->chunk($perPage) as $chunk)
      <div class="row">
        @foreach ($chunk as $comment)
        @php
        // Adjust the column size to make the cards wider
        $colSize = 'col-lg-4 col-md-6 col-sm-12'; // Example: Each card takes up 4 columns on large screens, 6 columns on medium screens, and 12 columns on small screens
        @endphp
        <div class="{{ $colSize }} pb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nom : {{ $comment->nom_complet }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Date: {{ $comment->date }}</h6>
              <p class="card-text">{{ $comment->commentaire }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach

      <!-- Pagination Links -->
      <div class="row">
        <div class="d-flex justify-content-center mt-3">
          {{ $commentaires->links() }}
        </div>
      </div>
    </div>






    <div class="container">
      <form action="{{ route('commentaires.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
              </svg>
            </span>
            <input type="text" class="form-control" placeholder="Entrer votre nom" aria-label="Input group example" aria-describedby="basic-addon1" name="nom" required>
          </div>
        </div>
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"></path>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"></path>
              </svg>
            </span>
            <input type="email" class="form-control" placeholder="Entrer votre email" aria-label="Input group example" aria-describedby="basic-addon1" name="email" required>
          </div>
        </div>
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"></path>
              </svg>
            </span>
            <textarea class="form-control" placeholder="Entrer votre commentaire" name="comment" aria-label="Input group example" aria-describedby="basic-addon1" required></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Commenter</button>
      </form>
    </div>
    </div>

    </div>

    </div>
    </section><!-- End Testimonials Section -->

    <footer>
      <div id="page-content">
        <div class="container text-center">
          <div class="row justify-content-center">

          </div>
        </div>
      </div>
      <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">

          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

          <small>Copyright &copy; MonCabinet</small>
        </div>
      </footer>
      <!-- end footer  -->

      <div id="preloader">
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      </div>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="assets/js/theme.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  
</body>

</html>