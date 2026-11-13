<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Journée Multimédia UNCHK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- =========================================================
     TP PHP - Le site de la Journée Multimédia UNCHK
     Nom et prénom de l'étudiant(e) : ..............................
     ========================================================= -->

<header>
    <?php
    // EXERCICE 1 : avec echo, afficher
    //   - un titre <h1> : Journée Multimédia UNCHK 2026
    //   - un paragraphe <p> : Créer, partager, innover.

    ?>
</header>

<div class="bienvenue">
    <?php
    // EXERCICE 4 (a) : afficher Bonjour, Bon après-midi ou Bonsoir
    //   selon l'heure, suivi de : bienvenue sur notre site !

    ?>
</div>

<main>

    <!-- ===================== PARTIE 1 ===================== -->
    <h1 class="partie">Partie 1</h1>

    <section class="carte">
        <h2><span class="numero">Ex. 2</span>L'événement</h2>
        <?php
        // EXERCICE 2 : créer les variables
        //   $date, $lieu, $prix_ticket, $places_total, $places_reservees
        // puis calculer $places_restantes et $recette
        // puis afficher chaque information dans un <p>

        ?>
        <p class="a-faire">Exercice 2 à compléter (supprimez cette ligne quand c'est fait)</p>
    </section>

    <section class="carte">
        <h2><span class="numero">Ex. 3</span>Les inscriptions</h2>
        <?php
        // EXERCICE 3 : selon $places_restantes, afficher
        //   - 0 place          : Complet !                              (classe "complet")
        //   - 10 places ou moins : Plus que ... places, dépêchez-vous ! (classe "alerte")
        //   - sinon            : Inscriptions ouvertes : ... places disponibles. (classe "ok")

        ?>
        <p class="a-faire">Exercice 3 à compléter</p>
    </section>

    <section class="carte">
        <h2><span class="numero">Ex. 4</span>Le tarif</h2>
        <?php
        // EXERCICE 4 (b) : créer $est_etudiant (true ou false)
        //   si c'est un étudiant : Tarif étudiant : 1000 FCFA
        //   sinon               : Tarif normal : 2000 FCFA

        ?>
        <p class="a-faire">Exercice 4 (b) à compléter</p>
    </section>

    <!-- ===================== PARTIE 2 ===================== -->
    <h1 class="partie">Partie 2</h1>

    <section class="carte">
        <h2><span class="numero">Ex. 5</span>Le programme</h2>
        <?php
        // EXERCICE 5 : créer le tableau $ateliers (5 ateliers)
        //   afficher le nombre d'ateliers avec count()
        //   puis la liste <ul class="ateliers"> avec foreach

        ?>
        <p class="a-faire">Exercice 5 à compléter</p>
    </section>

    <section class="carte">
        <h2><span class="numero">Ex. 6</span>Le calculateur de prix</h2>
        <?php
        // EXERCICE 6 : écrire les fonctions
        //   calculerTotal($nombre, $prix) : retourne $nombre x $prix
        //   afficherPrix($montant)        : retourne le montant suivi de " FCFA"
        // puis afficher le prix de 1, 3 et 10 tickets

        ?>
        <p class="a-faire">Exercice 6 à compléter</p>
    </section>

    <section class="carte">
        <h2><span class="numero">Ex. 7 et 8</span>Réserver mes tickets</h2>

        <form method="post" action="">
            <label>Votre prénom :</label>
            <input type="text" name="prenom">

            <label>Atelier choisi :</label>
            <select name="atelier">
                <?php
                // EXERCICE 7 : créer une <option> pour chaque atelier
                //   du tableau $ateliers, avec foreach

                ?>
            </select>

            <label>Nombre de tickets :</label>
            <input type="number" name="nombre" value="1">

            <button type="submit">Réserver</button>
        </form>

        <?php
        // EXERCICE 8 : si le formulaire a été envoyé
        //   - récupérer le prénom, l'atelier et le nombre de tickets
        //   - prénom vide           : message d'erreur   (classe "erreur")
        //   - nombre plus petit que 1 : message d'erreur (classe "erreur")
        //   - plus de tickets que de places restantes : message d'erreur
        //   - sinon : message de confirmation avec le total (classe "succes")

        ?>
    </section>

</main>

<footer>
    Journée Multimédia UNCHK · Licence 2 MIC · TP PHP
</footer>

</body>
</html>
