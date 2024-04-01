<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="propos">
   <h1 style="color:white; font-size:70px; text-align:center "> <hr>A PROPOS <hr></h1>

</div>



  <div class="Profil">


    <div id="imageContainer">
        <img src="../Image/Faoziath.png" alt="Image 1 " style="height: 700px; width: 700px;">
        <img src="../Image/chou.jpeg" alt="Image 2" style="height: 700px;width: 700px;">
        <img src="../Image/carotte.jpeg" alt="Image 3" style="height: 700px;width: 700px;">
    </div>


      <div class="" style="color: white; font-size:33px ">
       <P> Je suis Faoziath ABOUDOU ALI Agro-économiste/ Développeur web à l'école229 Parakou. Je milite pour le changement climatique en proposant des 
        solutions digitales aux producteurs agricoles. 
        Pendant mon stage academique dans une entreprise agricole de la ville de Parakou, j'ai eu à faire le constat 
        que  la mauvaise rentabilité des cultures est  lié au manque de semence de qualité.
         Pour contribuer au développement 
        de l'agriculture et améliorer les rendements agricoles
        ,je mets en place une plateforme pour permettre aux producteurs agricoles
        d'avoir acces aux semences maraicheres de qualité.  
    </P>


      </div>



    <script>
        // Fonction pour défilement automatique des images
        function defilerImages() {
            let images = document.querySelectorAll('#imageContainer img');
            let index = 0;

            setInterval(() => {
                images[index].style.display = 'none';
                index = (index + 1) % images.length;
                images[index].style.display = 'block';
            }, 1000); // Changement toutes les secondes (3 images par seconde)
        }

        // Appel de la fonction au chargement de la page
        window.onload = defilerImages;


     
    </script>




</body>
</html>