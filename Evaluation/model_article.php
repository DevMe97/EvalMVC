<?php
    try{
        $req = $bdd->prepare("insert into article (nom_article, prix_article) values (?,?)");
        
        $req->bindParam(1,$nom_article,PDO::PARAM_STR);
        $req->bindParam(2,$prix_article,PDO::PARAM_STR);
      
        
        $req->execute();
        echo"<p>Article enregistré en BDD</p>";

        //Fermeture de la connexion
        $bdd=null;
        $req=null;
        
    }catch(Exception $error){
        var_dump("<p>".$error."</p>");
    }
?>