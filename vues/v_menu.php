 <!-- Division pour le menu -->
    <div id="menuGauche">
    
        <ul id="menuList">
            <li >
		 Bienvenu(e) : <?php echo $_SESSION['login']?>	
		</li>
           <li >
              Les projets
              <ul>
                <li >
                  <a href="index.php?do=lesProjets" title="Les projets">Seul</a>
               </li>
                 <li >
                  <a href="index.php?do=lesProjetsDetails" title="Les projets">Détails</a>
               </li>
              </ul>
           </li>
           <li >
              <a href="index.php?do=lesEmployes" title="Les employés">Les employés</a>
           </li>
             <li >
              <a href="index.php?do=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>
    