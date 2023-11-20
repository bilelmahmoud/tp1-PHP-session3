{{ include('header.php', {title: 'journal'}) }}

<table>
    <thead>
        <tr>
           <th>id</th>
            <th>Adresse IP</th>
            <th>Date</th>
            <th>Nom</th>
            <th>Page visitée</th>
        </tr>
    </thead>
    <tbody>
       
            {% for  selectJournal in selectJournals %}
        <tr>    
            <td>{{ selectJournal.id }}</td>
            <td>{{ selectJournal.adresse_ip }}</td>
            <td>{{ selectJournal.date }}</td>
            <td>{{ selectJournal.nom}}</td>
            <td>{{ selectJournal.page_visitee}}</td>
        </tr>       
            {% endfor %}
       
    </tbody>
</table>
