<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS User Profile Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            background-color: #f3f3f3;
        }

        .wrapper {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            display: flex;
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, .08);
            border-radius: 10px;
            overflow: hidden;
        }

        .left {
            flex: 1;
            padding: 30px;
            background: hsla(197, 94%, 51%, 1);

background: linear-gradient(90deg, hsla(197, 94%, 51%, 1) 0%, hsla(183, 39%, 62%, 1) 99%);

background: -moz-linear-gradient(90deg, hsla(197, 94%, 51%, 1) 0%, hsla(183, 39%, 62%, 1) 99%);

background: -webkit-linear-gradient(90deg, hsla(197, 94%, 51%, 1) 0%, hsla(183, 39%, 62%, 1) 99%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#0AB6F8", endColorstr="#78C0C4", GradientType=1 );
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .left img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .left h4 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        .left p {
            font-size: 14px;
            text-align: center;
        }

        .right {
            flex: 2;
            padding: 30px;
            background-color: #fff;
        }

        .info, .projects {
            margin-bottom: 30px;
        }

        .info h3, .projects h3 {
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #e0e0e0;
            color: #353c4e;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 18px;
        }

        .data {
            margin-bottom: 15px;
        }

        .data h4 {
            color: #353c4e;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .data p {
            font-size: 14px;
            color: #919aa3;
        }

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
            background: hsla(191, 75%, 60%, 1);

background: linear-gradient(90deg, hsla(191, 75%, 60%, 1) 0%, hsla(248, 87%, 36%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(191, 75%, 60%, 1) 0%, hsla(248, 87%, 36%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(191, 75%, 60%, 1) 0%, hsla(248, 87%, 36%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#4DC9E6", endColorstr="#210CAE", GradientType=1 );
        }

        .social-media {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-media a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: #01a9ac;
            color: #fff;
            border-radius: 50%;
            margin: 0 5px;
            transition: background-color 0.3s;
        }

        .social-media a:hover {
            background-color: #01dbdf;
        }

    </style>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="{{ asset($doctor->profileimage) }}" alt="Profile Image">
        <h4>{{$doctor->nom}} {{$doctor->prenom}}</h4>
        <p>{{$doctor->description}}</p>
        
    </div>
    <div class="right">
        <div class="info">
            <h3>Contact</h3>
            <div class="data">
                <h4>Email</h4>
                <p>{{$doctor->email}}</p>
            </div>
            <div class="data">
                <h4>Telephone</h4>
                <p>{{$doctor->phonenumber}}</p>
            </div>
            <div class="data">
                <h4>Adresse</h4>
                <p>
    @if($doctor->adresse)
        ({{$doctor->adresse}})
    @else
        ...
    @endif
</p>
            </div>
        </div>
        <div class="projects">
            <h3>Departement/Ville</h3>
            <div class="data">
                <h4>Departement</h4>
                <p>{{$departement->libelle}}</p>
            </div>
            <div class="data">
                <h4>Ville</h4>
                <p>{{$doctor->ville->libelle}}</p>
            </div>
            
        </div>
        <a href="{{route('show_contact_page',$doctor->id)}}" class="reservation-link">Réserver maintenant</a>
    </div>
</div>

</body>
</html>
