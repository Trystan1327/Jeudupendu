
<?php echo form_open(); ?>
<form action="http://localhost/jeu/index.php/scriptJeu/jeu" method="post"> 

     
        <!-- <label for="champ">Trouver le mot !</label><br/> -->
        <input type="hidden" name="champ"value ="<?php  $motA; ?>" />
        <br>
    <label for="user">Trouver le mot caher pour gagner !</label><br/>
            <input type="text" name="user" value =" <?php echo $mot; ?>" />
        <div>
            <input type="submit" name="ok" value="Vous êtes sûr ?"/>
        </div>
</form>
<?php



// if(isset($_POST['ok']))
// { // si formulaire soumis
//     echo $champ = $_POST['champ'];
//     echo $user =  $_POST['user'];
//         if($user != $champ)
//         {
//             echo 'Perdu';
//         }else{
//             echo 'Gagné';
//         }
    
//             exit;
//         }    

    
    

    
// if($motuser = $mot)
// {
//     echo "gagné";
    
// }else{
//     echo "perdu";
// }


    // $this->jeu->champ = $this->input->post('champ');
?>
