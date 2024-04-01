<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="{{ asset('import/assets/css/TesterStyle.css')}}" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: white;
            color: #F0FFF0;
            margin-TOP:40PX;
}
#ss{
    background-color:#F0FFF0;
   

}
#ff{
    color:#1f4456;
}
#ic{
    background-color:black;
}

a{
    text-decoration: none;
    color:#1f4456;
}
a:hover{
    text-decoration: none;
    color:#1f4456;
}

#page-content{
    width: 100%;
    height: 100%;

}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
    width: 100%;
    height: 100%;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}



    </style>
</head>
<body>
<div class="page-content page-container" >
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-12 col-md-1">                                                                              
                                                <div class="card user-card-full" >
                                                    <div class="row m-l-0 m-r-0" >
                                                        <div class="col-sm-4  user-profile" id="ss" >
                                                            <div class="card-block text-center text-white" >
                                                                <div class="m-b-25" >
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600"><a href="@"></a></h6><br/><br/>
                                                                <h6 class="f-w-600"><a href="@">modifier</a></h6><br/><br/>
                                                                <h6 class="f-w-600"><a href="@">modifier</a></h6><br/><br/>
                                                                <h6 class="f-w-600"><a href="@">modifier</a></h6><br/><br/>
                                                                <h6 class="f-w-600"><a href="@">modifier</a></h6><br/><br/>
                                                                <p>Web Designer</p>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8" >
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600"></h6>
                                                                <div class="flex">
                                                                <div class="wrapper" >
    <form method="post" action="{{ route('rd') }}" align="center" id="ff">
        @csrf
        <h1>RECHERCHER</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="input-box">
                    <select name="departements" id="departements" class="form-control">
                        <option value="" disabled selected>Select a city</option>
                        @foreach($deparetements as $deparetement)
                        <option value="{{ $deparetement->id }}">{{ $deparetement->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-box">
                    <select name="city" id="city" class="form-control">
                        <option value="" disabled selected>Select a city</option>
                        @foreach($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <br/>
        <button class="btn" type="submit">Rechercher</button>
    </form>
</div>

                                                                <div class="row">
                                                                   
                                                                    <div class="col-sm-12">
                                                                    
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>
                                           
</body>
</html>

    