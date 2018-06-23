<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Curso de Vue 2">
        <meta name="author" content="https://styde.net">

        <title>Curso de Vue 2 - Styde.net</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="app" class="container">
            <div v-if="!formSubmitted">
                <form v-on:submit.prevent="submitForm">
                    <h4>Regístrate:</h4>

                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input v-model="first_name" type="text" id="first_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input v-model="last_name" type="text" id="last_name" class="form-control">
                    </div>

                    <button id="btn-continue" type="submit" class="btn btn-primary" v-bind:disabled="!isFormValid()">Continuar</button>
                </form>
            </div>
            <div v-else>
                <h4>Bienvenido, {{first_name}} {{last_name}}</h4>
            </div>

            <footer class="footer">
                <p>&copy; 2017 Styde.net.</p>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/vue.js"></script>
        <script type="text/javascript" src="js/app.js"></script>        
  </body>
</html>