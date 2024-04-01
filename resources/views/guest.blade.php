<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="alert alert-danger alert-dismissible fade show container mt-4 text-center" role="alert">
    <p>-Tant que tu es connecté, tu n'as pas le droit d'accéder à cette page.</p>
    <p>-<a href="{{route('doctors.index')}}">Retourner</a> en arrière et déconnectez-vous, puis réessayez.</p>
    
</div>
</body>
</html>