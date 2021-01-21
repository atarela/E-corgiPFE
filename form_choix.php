<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un produit</title>
    <meta charset="utf-8">




</head>
<body >

   

   
<form action="form_choix.php" method="post" enctype="multipart/form-data">
    <table>
        
        
        
        <tr>
        <td>categorie:</td>
        <td><select name="categorie">
                <option value="1">
                    Corgis
                    
                </option>
                <option value="2">
                    Accessoires
                </option>
                <option value="3">Alimentation</option>
            </select>
        </td>
        </tr>

        <tr>
        <td colspan="2" align="center">
         <input type="submit" name="addchamp" value="suite"></td>
        </tr> 
        
    </table>
</form>
<?php
if (isset($_POST['addchamp']))
    {
    
    switch ($_POST['categorie']) {
                
            case 1:
                header('location:form_cat_corgi.php');
                break;
            case 2:
                header('location:form_cat_acce.php');
                break;
            case 3:
                header('location:form_cat_alim.php');
                break;  
        }

    }
?>

</body>
</html>
