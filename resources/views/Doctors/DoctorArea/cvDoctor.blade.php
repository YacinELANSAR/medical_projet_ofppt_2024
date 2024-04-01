<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profil du Docteur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Profil du Docteur</h1>
    <div class="doctor-details">
        <table>
            
            <tr>
                <th>Nom</th>
                <td>{{ $doctorData['nom'] }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ $doctorData['prenom'] }}</td>
            </tr>
            <tr>
                <th>Adresse Email</th>
                <td>{{ $doctorData['email'] }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $doctorData['phonenumber'] }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $doctorData['description'] }}</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>{{ $doctorData['matricule'] }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ $doctorData['adresse'] }}</td>
            </tr>
            <tr>
                <th>Département</th>
                <td>{{ $doctorData['departement'] }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ $doctorData['ville'] }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ $doctorData['genre'] === 'm' ? 'Masculin' : 'Féminin' }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
