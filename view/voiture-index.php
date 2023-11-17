{{ include('header.php', {title: 'Voiture List'}) }}
<body>
    <div class="container">
        <h1>voiture</h1>
        <table>
            <tr>
                <th>marque</th>
                <th>modele</th>
                <th>annee</th>
                <th>categorie</th>
                
            </tr>
            {% for voiture in voitures %}
                <tr>
                    <td><a href="{{path}}voiture/show/{{voiture.id}}">{{voiture.marque}}</a></td>
                    <td>{{ voiture.modele }}</td>
                    <td>{{ voiture.annee }}</td>
                   <!--  <td>{{ voiture.categorie_id }}</td> -->
                     <td>{{ voiture.nom }}</td> 
                     
                     {% if session.privilege == 2  %}
                          
                    <td>
                        <form action="{{path}}voiture/destroy" method="post">
                            <input type="hidden" name="id" value="{{voiture.id}}">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                    {% endif %}
                </tr>
            {% endfor %}
        </table>
        <br><br>
        {% if session.privilege == 1 or session.privilege == 2  %}
        <a href="{{path}}voiture/create" class="btn">Ajouter</a>
        {% endif %}
    </div>
    
</body>
</html>