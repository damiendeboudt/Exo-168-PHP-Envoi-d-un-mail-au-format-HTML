<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès
 * / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'foxhyzi@gmail.com',
    'damien.deboudt@sfr.fr'
];

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <span>Information importante sur les nouveaux arrivages</span>
            </div>
        </body>
    </html>
';

foreach ($to as $key => $value) {
    mail($value, "Newsletter", $html);
    if ( mail($value, "Newsletter", $html)) {
        echo "le mail a bien été envoyé à " . $value . "<br>";
    } else {
        echo "Erreur lors de l'envoi du mail à " . $value . "<br>";
    }
}
