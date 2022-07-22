<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            
            <a href='principale.php?deconnexion=true'>
                <span>Déconnexion</span>
            </a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="validationxml.php">
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" name="title" id="title" size="30" maxlength="30" />
                            </div>
                            <div class="form-group">
                                <label for="duration" >Durée</label>
                                <input type="text" name="duration" id="duration" size="30" maxlength="30">
                            </div>
                            <div class="form-group">
                                <label for="gender">Genre</label>
                                <input type="text" name="gender" id="gender" size="30" maxlength="30">
                            </div>
                    
                        <div class="form-group">
                                <label for="realis">Realisateur</label>
                                <input type="text" name="realis" id="realis" size="30" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="realis">Acteurs</label>
                            <input type="text" name="actors" id="actors" size="30" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="realis">Annee de reproduction</label>
                            <input type="text" name="year" id="year" size="30" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="realis">Langue</label>
                            <input type="text" name="lang" id="lang" size="30" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="realis">Description                                                                                                                                               </label>
                            <input type="text" name="description" id="description" size="30" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="realis">Horaires de diffusion</label>
                            <input type="text" name="diff" id="diff" size="30" maxlength="30">
                        </div>
                        <div class="form-submit">
                            <input type="submit" name="submit" id="submit" value="Ajouter">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <style>
            form{
                border: 1px solid rgb(180, 163, 131);
                padding:3px;
                
            }
            .form-group{
            width:400px;
            padding-left: 305px;
            text-align: left;
            vertical-align: top;
            }
            label.form-control{
            float: left;
            margin-left: -305px;
            font-weight:bold;
            }
            .form-submit{
            width: 400px;
            padding-left: 305px;
            padding-top: 23px;
            text-align: left;
            vertical-align: bottom;
            
            }
        </style>
    </div>
            
        </div>
    </body>
</html>