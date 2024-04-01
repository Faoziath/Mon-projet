<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulaire de Commande</h2>
    <form action="" method="POST">
        <label for="nom">Nom :</label> <br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label> <br>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="contact">Contact :</label> <br>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="email">Email :</label> <br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pays">Pays :</label> <br>
        <select id="options" name="options[]" multiple>
        <option value="option1">Bénin</option>
        <option value="option2">Niger</option>
        <option value="option3">Nigéria</option>
    </select><br>
        <input type="text" id="pays" name="pays" required ><br><br>

        <label for="ville">Ville :</label> <br>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="liste">Liste :</label> <br>
        <textarea id="liste" name="liste" rows="4" required></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>









    <script>
    // Sélectionne automatiquement les options lorsque l'utilisateur clique sur la liste déroulante
    const select = document.getElementById('options');
    select.addEventListener('click', (event) => {
        const option = event.target;
        if (option.tagName === 'OPTION') {
            option.selected = !option.selected;
        }
    });
</script>




</body>
</html>
