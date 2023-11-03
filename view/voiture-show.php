<body>
    <div class="container">
        <h1>Details du voiture</h1>

        <p><strong>marque:</strong> {{ voiture.marque }} </p>
        <p><strong>modele:</strong> {{ voiture.modele }} </p>
        <p><strong>annee:</strong> {{ voiture.annee }}</p>
        <p><strong>categorie:</strong> {{ categorie }}</p>
        <a href="{{path}}voiture/edit/{{ voiture.id }}" class="btn">Modifier</a>
    </div>
</body>
</html>