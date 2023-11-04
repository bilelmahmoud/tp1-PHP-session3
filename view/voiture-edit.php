{{ include('header.php', {title: 'Voiture Edit'}) }}
<body>
    <div class="container">
        

        <form action="{{path}}voiture/update" method="post">
            <input type="hidden" name="id" value="{{voiture.id}}">
            <label>marque
                <input type="text" name="marque"  value="{{voiture.marque}}">
            </label>

            <label>modele
                <input type="text" name="modele" value="{{voiture.modele}}">
            </label>

            <label>annee
                <input type="text" name="annee" value="{{voiture.annee}}">
            </label>


            <label>categorie
                
                <select name="categorie_id">
                    <option value="">Selectionner une categorie</option>
                   {%  for categorie in categories %}
                        <option value="{{ categorie.id}}"> {{categorie.id }} {{ categorie.nom }}</option>
                        
                       
                   {% endfor %}
                </select>

 
                <!-- <select name="categorie_id">
                    <option value="">Selectionner une ville</option>
                    {%  for categorie in categories%}
                        <option value="{{ categorie.id}}" {% if categorie.id == voiture.categorie_id %} selected {% endif %}>{{ categorie.nom }}</option>
                    {% endfor %}
                </select>  -->

            </label>    
           
           
        
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>