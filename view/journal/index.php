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
        <tr>
            {% for key, value in selectJournal %}
                {% if key is odd %}
                    <td>{{ value }}</td>
                {% endif %}
            {% endfor %}
        </tr>
    </tbody>
</table>