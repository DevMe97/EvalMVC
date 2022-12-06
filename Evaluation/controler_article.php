<?php
    //! Ajout de la vue
    include('vue_article.php.');
    //! Ajout de la connection BDD
    include('connect_article.php.');

    //! Verifications
    if(isset($_POST['nom_article']) and $_POST['nom_article'] != ""
    and isset($_POST['prix_article']) and $_POST['prix_article'] != ""){

        $nom_article = $_POST['nom_article'];
        $prix_article = $_POST['prix_article'];

        //! Ajout article
        include('model_article.php.');
        
    }
    else{
        echo "Veuillez remplir le formulaire!!";
    }

     //! Ajout de la vue
     include('vue2_article.php.');
?>