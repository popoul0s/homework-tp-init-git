<?php
/**********************************************************************
*
*
C L A S S E
D E B O G A G E
*
*/
// La classe fait partie de l'espace de nommage Model du paradigme MVC
namespace Model;
/**
* Cette classe est une boite à outils où nous pouvons stocker des
* méthodes nous facilitant le débogage d'un projet.
*/
class Debogage
{
/**
* Permet de mettre en forme une variable pour un affichage dans
* une page HTML lors du débogage.
*
* @param $value
* @return void
*/
static public function afficher($value = null, $titre = null)
{
// Mise en form pour Bootstrap
echo "<div class='form-control form-control-sm mb-sm-3'>";
if ($titre)
echo '<h6>Débogage de ' . $titre . ' :</h6><hr>';
else
echo '<h6>Débogage:</h6><hr>';
echo '<pre>';
var_dump($value);
echo '</pre>';
echo "</div>";
}
}