<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class scriptJeu extends CI_Controller 
{
    public function jeu()
    {

        $this->load->helper('form', 'url'); 

         //Chargement de la librairie 'database'
        $this->load->database(); 
        $this->load->library('form_validation'); 
        $this->load->view('header');
        
        

        $motAtrouver =array();

        
        
        $motUser = array();
        

        // Déclaration du tableau associatif à tranmettre à la vue
        $motUser['mot'] = ' ';
        $motAtrouver['motA']='PHP';
       var_dump($motAtrouver);
       var_dump($motUser);

       
      
        // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
     
        

        $this->load->view('jeu',$motUser );
      
        if($motUser = $motAtrouver)
        {
            echo "Gagné";
        }elseif($motUser != $motAtrouver){
         echo "Perdu"; 

         exit;
        }
        $this->load->view('footer');
       
            
        }
      
      
        
   
    
  
   
     


}

?>