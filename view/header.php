<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>{{ title }}</title>
                <link rel="stylesheet" href="{{path}}css/style.css">
            </head>
            <nav>
            <ul>
                <li><a href="{{path}}">Home</a></li>
                <li><a href="{{path}}voiture">Voiture</a></li>
              
                {% if guest %}
                <li><a href="{{path}}login">Login</a></li>
                {% else %}
                <li><a href="{{path}}voiture/create">Voiture Create</a></li>
                {% if session.privilege == 2 %}
                    <li><a href="{{path}}user">Users</a></li>
                    <li><a href="{{path}}journal">journal</a></li>
                 
                    {% endif %}
               
                <li><a href="{{path}}login/logout">Logout</a></li>
                {% endif %}
              

            </ul>
        </nav>

        <main>

        <div class="username">

        <p>  {{ session.username }}</p> 

        </div>

      

        </main>



      