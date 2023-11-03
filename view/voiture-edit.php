{{ include('header.php', {title: 'Voiture Edit'}) }}
<body>
    <div class="container">
        

        <form action="{{path}}voiture/update" method="post">
            <!-- <span class="text-danger">{{ errors | raw }}</span> -->
            <label>marque
                <input type="text" name="marque">
            </label>

            <label>modele
                <input type="text" name="modele">
            </label>

            <label>annee
                <input type="text" name="annee">
            </label>


            <label>categorie
                
                <select name="categorie_id">
                    <option value="">Selectionner une categorie</option>
                   {%  for categorie in categories %}
                        <option value="{{ categorie.id}}" {% if nom.id == voiture.categorie_id %} selected {% endif %}>{{ categorie.nom }}</option>
                       
                   {% endfor %}
                </select>
<!-- 
                <select name="ville_id">
                    <option value="">Selectionner une ville</option>
                    {%  for ville in villes%}
                        <option value="{{ ville.id}}" {% if ville.id == client.ville_id %} selected {% endif %}>{{ ville.ville }}</option>
                    {% endfor %}
                </select> -->

            </label>    
           
           
        
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>