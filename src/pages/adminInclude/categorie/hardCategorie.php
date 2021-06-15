<?php
    // Je récupère la liste catégorie
    $listeCategorie = getHardCategorie();
  
    //Conditionner l'accès au requete ci-dessous uniquement si le user est admin
    /* if(isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] = "admin")
    {


    } */
?>

<table class="mlr-a mt-3 p-1">
    <thead>
        <tr>
            <th colspan="2">Liste des Hardwares</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom de la catégorie</td>
            <td>Supprimer</td>
        </tr>
        <?php
            foreach($listeCategorie as $value){
                ?>
                    <tr>
                        <td><?= $value["console"]?></td>
                        <td class="ta-c tc-r"><a href="../../src/pages/admin.php?choix=listeCategorie&delete=true&value=<?=$value["console"]?>"><i class="far fa-plus-square"></a></td>
                    </tr>
                <?php
            }
        ?>
    </tbody>

</table>