{{ include('header.php', {title: 'Voiture Create'}) }}
<body>
    <div class="container">
        

        <form action="{{path}}voiture/store" method="post">
   
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
                        <option value="{{ categorie.id}}"> {{ categorie.id }} {{ categorie.nom }}</option>
                   {% endfor %}
                </select>

            </label>    
           
           
        
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>