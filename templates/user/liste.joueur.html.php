
        <div id="container_list">
            <!-- zone de connexion -->
            <div id="deconnect">
                <h1>Créer et Paramétrer Votre Quiiz</h1>
                <input type="button" value="Deconnexion">
            </div>
            <div id="mainn">
                <div id="affiche">
                    <div id="profil">
                    <img src="/img/-1_orig.jpg" alt=""><br>
                    </div>
                    <div class="liste"><a href="">Liste Questions</a><img src="/img/Icônes/ic-liste.png" alt=""></div>
                    <div class="liste"><a href="">Créer Admin</a><img src="/img/Icônes/ic-ajout.png" alt=""></div>
                    <div class="liste"><a href="">Liste Joueurs</a><img src="/img/Icônes/ic-liste-active.png" alt=""></div>
                    <div class="liste"><a href="">Créer Question</a><img src="/img/Icônes/ic-ajout.png" alt=""></div>
                </div>
                <div id="list">
                    <h2>Liste des Joueurs par score</h2>
                    <div>
                        <?php
                            $users = json_to_array("users");
                            echo "<table>";
                            echo "<tr>";
                            echo  "<td>Nom</td>";
                            echo  "<td>Prenom</td>";
                            echo  "<td>Score</td>";
                            echo "</tr>";
                            foreach ($users as $user) {
                                if ($user['role']=="Joueur") {
                                    echo "<tr>";
                                    echo "<td>".$user['nom']."</td>";
                                    echo "<td>".$user['prenom']."</td>";
                                    echo "<td>".$user['score']."</td>";
                                    echo "</tr>";  
                                }
                            }
                            echo "</table>";
                        ?>
                    </div>
                    <input type="button" value="Suivant">
                </div>
            </div>
            
        </div>

 