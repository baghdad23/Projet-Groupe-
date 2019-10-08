<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL projet</title>
</head>
<body>
<head>
    <h1>PROJET MAEKETPLACE</h1>
    <a href="#"><img src="" id="logo"></a>
    <nav>
        <ul>
            <li><a href="<?php echo url("/") ?>">accueil</a></li>
            <li><a href="<?php echo url("/infos") ?>">Comment ça marche?</a></li>
            <li><a href="<?php echo url("/contact") ?>">contact</a></li>
        </ul>
    </nav>
    <button type="submit" id="inscription">S'INSCRIRE</button>
    <button type="submit" id="connexion">SE CONNECTER</button>
</head>
<main>
    <h3>SECTION ACCUEIL</h3>
    <section>
        <form method="GET" action="">
            <input type="radio" name="service" value="besoinService">
            <label>J'ai besoin d'un service</label>
            <input type="radio" name="service" value="rendreService">
            <label>Je veux rendre un service</label>
            <select name="categorie" required>
                <option value="" selected="selected">Type de service</option>
                <optgroup label="ADMINISTRATION">
                    <option>Aide à la rédaction, lettres, CV, corrections</option>
                    <option>Aide administrative, impôts, question juridiques</option>
                    <option>Comptabilité du foyer</option>
                    <option>Traduction de documents</option>
                </optgroup>
                <optgroup label="AIDE A LA PERSONNE">
                    <option>Accompagnement – Aide aux personnes âgées</option>
                    <option>Aide – Bras pour déménagement</option>
                    <option>Aide aux personnes à mobilité réduite</option>
                    <option>Courses à votre place – Aide aux courses</option>
                    <option>Transport de personnes ou de matériel</option>
                </optgroup>
                <optgroup label="ANIMAUX DE COMPAGNIE">
                    <option>Visite</option>
                    <option>Garde</option>
                    <option>Promenade</option>
                </optgroup>
                <optgroup label="AUTRES">
                    <option>Précisez</option>
                </optgroup>
                <optgroup label="BRICOLAGE">
                    <option>Électricité</option>
                    <option>Maçonnerie</option>
                    <option>Mécanique (réparation, voiture, vélo, etc)</option>
                    <option>Montage de meubles, étagères, etc.</option>
                    <option>Peinture</option>
                    <option>Plomberie</option>
                    <option>Réparation petit matériel (précisez)</option>
                    <option>Restauration</option>
                </optgroup>
                <optgroup label="COURS">
                    <option>Art et artisanat</option>
                    <option>Musique, danse, chant</option>
                    <option>Langues</option>
                </optgroup>
                <optgroup label="ENFANCE">
                    <option>Garde d'enfants</option>
                    <option>Sortie d'école</option>
                    <option>Aide au devoirs</option>
                </optgroup>
                <optgroup label="MAISON">
                    <option>Aide au rangement</option>
                    <option>Couture (reprises, broderie, machine, etc)</option>
                    <option>Cuisine</option>
                    <option>Jardinage – Arrosage – Conseils (précisez)</option>
                    <option>Ménage – Repassage – Vitres</option>
                </optgroup>
                <optgroup label="NUMÉRIQUE">
                    <option>Graphisme (précisez)</option>
                    <option>Informatique (word, excel, logiciels divers)</option>
                    <option>Petit dépannage informatique (précisez)</option>
                    <option>Photographie, retouches (précisez)</option>
                </optgroup>
                <optgroup label="SANTÉ /BEAUTÉ">
                    <option>Conseil nutrition – Diététique</option>
                    <option>Maquillage</option>
                    <option>Coupe – Soins cheveux – Coiffure</option>
                    <option>Techniques relaxation</option>
                    <option>Manucure - Ongles</option>
                </optgroup>
            </select>
            <section>
                <h3>CATEGORIES</h3>
                <div>
                    <img src="../public/assets/images/iconAdministration.png" title="iconAdministration">
                    <div>
                        <h4>ADMINISTRATION</h4>
                        <p>Aide à la rédaction, lettres, CV, corrections</p>
                        <p>Aide administrative, impôts, question juridiques</p>
                        <p>Comptabilité du foyer</p>
                        <p>Traduction de documents</p>
                    </div>
                </div>
                <div>
                    <img src="../public/assets/images/iconAideapersonne.png" title="iconAdministration">
                    <div>
                        <h4>AIDE A LA PERSONNE</h4>
                        <p>Accompagnement – Aide aux personnes âgées</p>
                        <p>Aide – Bras pour déménagement</p>
                        <p>Aide aux personnes à mobilité réduite</p>
                        <p>Courses à votre place – Aide aux courses</p>
                        <p>Transport de personnes ou de matériel</p>
                    </div>
                </div>
                <div>
                    <img src="../public/assets/images/iconAnimaux.png" title="iconAdministration">
                    <div>
                        <h4>ANIMAUX DE COMPAGNIE</h4>
                        <p>Visite</p>
                        <p>Garde</p>
                        <p>Promenade</p>
                    </div>
                </div>
                <div>
                    <img src="../public/assets/images/iconBricolage.png" title="iconAdministration">
                    <div>
                        <h4>BRICOLAGE</h4>
                        <p>Électricité</p>
                        <p>Mécanique (réparation, voiture, vélo, etc)</p>
                        <p>Montage de meubles, étagères, etc.</p>
                        <p>Peinture</p>
                        <p>Plomberie</p>
                        <p>Réparation petit matériel (précisez)</p>
                        <p>Restauration</p>
                    </div>
                </div>
                <div>
                    <img src="../public/assets/images/iconCours.png" title="iconAdministration">
                    <div>
                        <h4>COURS</h4>
                        <p>Art et artisanat</p>
                        <p>Mécanique (réparation, voiture, vélo, etc)</p>
                        <p>Montage de meubles, étagères, etc.</p>
                        <p>Peinture</p>
                        <p>Plomberie</p>
                        <p>Réparation petit matériel (précisez)</p>
                        <p>Restauration</p>
                    </div>
                </div>
            </section>
        </form>
    </section>
</main>
<footer>
    <p>XXX est une initiative de la Maison du quartier. Elle est soutenue par la ville de Marseille.</p>
    <p>Vous pouvez nous soumettre des idées d’améliorations, suggérer des services manquants ou signaler un abus : contact@labanquedetemps.com</p>
    <a href="#">Mentions légales</a>
    <a href="#">Conditions Générales d'Utilisation</a>
    <ul>
        <li><a href="<?php echo url("/espace-membre") ?>">membre</a></li>
        <li><a href="<?php echo url("/espace-admin") ?>">admin</a></li>
    </ul>
</footer>
    
</body>
</html>