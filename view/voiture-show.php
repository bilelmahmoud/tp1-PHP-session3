{{ include('header.php', {title: 'Voiture Edit'}) }}

<body>
    <div class="container">
        <h1>Details du voiture</h1>

        <p><strong>marque:</strong> {{ voiture.marque }} </p>
        <p><strong>modele:</strong> {{ voiture.modele }} </p>
        <p><strong>annee:</strong> {{ voiture.annee }}</p>
        <p><strong>categorie:</strong> {{ categories}}</p>
        <a href="{{path}}voiture/edit/{{ voiture.id }}" class="btn-modif">Modifier</a>
       <!--  <img src=" /PHP/tp1-PHP-session3/uploads/img/{{ voiture.photo }}" alt=""> -->
        <img src="{{path}}/uploads/{{ voiture.photo }}" alt="photo voiture">
       
      
    </div>
</body>
</html>