<div id="contenu">
      <h2>Consulter les Employés informaticien </h2>
      <div class="corpsForm">
     <table >
  	   <caption> Descriptif des Employes 
       </caption>
             <tr>
                <th >nom</th>  
                <th >prénom</th> 
                <th >&nbsp;</th>              
             </tr>
          
    <?php    
	   foreach ($lesEmployes as $unEmploye) {
			$nom = $unEmploye['nom'];
			$prenom = $unEmploye['prenom'];
		?>		
            <tr> <td> <?php echo $nom ?> </td>
                <td> <?php echo $prenom ?> </td>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  