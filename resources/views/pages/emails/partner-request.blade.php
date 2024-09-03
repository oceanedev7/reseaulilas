<!DOCTYPE html>
<html>
<head>
    <title>Contact Request</title>
</head>
<body>
    <h1>{{ $data['nom'] }} {{ $data['prenom'] }}</h1>
    <p>Fonction: {{ $data['fonction'] }} Raison sociale: {{ $data['raison_sociale'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Téléphone: {{ $data['telephone'] }}</p>
    <p>Adresse Postale: {{ $data['adresse_postale'] }}</p>
    <p>Ville: {{ $data['ville'] }}</p>
    <p>Code Postal: {{ $data['code_postal'] }}</p>
    <p>Type de partenariat: {{ $data['type'] }}</p>
    <p>Message:</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>