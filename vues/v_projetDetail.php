<div id="contenu">
      <h2>Liste des projets avec Details</h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des projets avec Details
       </caption>
             <tr>
                <th >code projet</th>  
                <th >libellé</th>  
                <th >nom</th>  
                <th >prenom</th>  
                <th >&nbsp;</th>              
             </tr>
          
    <?php    
	   foreach ($lesProjetsDetails as $unProjetDetail) {
			$codeProjet = $unProjetDetail['codeprojet'];
			$nomProjet = $unProjetDetail['nomprojet'];
                        $nom = $unProjetDetail['nom'];
                        $prenom = $unProjetDetail['prenom'];
		?>		
            <tr> <td><?php echo $codeProjet ?></td>
                <td><?php echo $nomProjet ?></td>
                <td><?php echo $nom ?></td>
                <td><?php echo $prenom ?></td>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  