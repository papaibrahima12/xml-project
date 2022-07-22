<?php   
        session_start();

         if(isset($_POST['title']) && isset($_POST['duration']) && isset($_POST['gender']) && isset($_POST['realis']) && isset($_POST['actors']) && isset($_POST['year']) && isset($_POST['lang']) && isset($_POST['description']) && isset($_POST['diff'])){
            $titre = $_POST['title'];
            $duree = $_POST['duration'];
            $genre = $_POST['gender'];
            $realisateur = $_POST['realis'];
            $acteurs = $_POST['actors'];
            $annee = $_POST['year'];
            $langue = $_POST['lang'];
            $description = $_POST['description'];
            $horaire = $_POST['diff'];
            header('Location:principale.php');
         }
 ?>