<?php
use iutnc\deefy\audio\tracks\AlbumTrack;
use iutnc\deefy\render\AlbumTrackRenderer;

//1
//creation de deux pistes
$piste1 = new AlbumTrack("placebo","../../ressources/audio/01-Im_with_you_BB-King-Lucille.mp3");
$piste2 = new AlbumTrack("verite_3","un_deuxieme_chemin");

  //2
  //affichage en allant chercher chacune des variables une par une
  echo $piste1->numero."-".$piste1->titre." (".$piste1->auteur.") "." en ".$piste1->annee." de ".$piste1->album." <".$piste1->genre."> ".$piste1->duree."s "."audio : ".$piste1->audio;
  echo "<br>\n";
  printf("%d- %s(%s) en %s de %s <%s> %ds audio : %s",$piste1->numero,$piste1->titre,$piste1->auteur,$piste1->annee,$piste1->album,$piste1->genre,$piste1->duree,$piste1->audio);
  echo "<br>\n";
  print "$piste1->numero-$piste1->titre ($piste1->auteur) en $piste1->annee de $piste1->album <$piste1->genre> $piste1->duree s audio : $piste1->audio";
  //sauter des lignes dans l affichage html avec la balise <br> et dans le code source avec \n
  echo "<br>\n";
  echo "<br>\n";

  //3
  // affichage en utilisant la methode toString()
  echo $piste1->__toString();
  echo "<br>\n";
  print_r ($piste2->__toString());
  echo "<br>\n";
  var_dump($piste1->__toString());
  echo "<br>\n";
  echo "<br>\n";

  $p1 = new AlbumTrackRenderer($piste1);
  echo $p1->render(1);
  echo "<br>\n";
  echo $p1->render(2);
  echo "<br>\n";echo "<br>\n";
