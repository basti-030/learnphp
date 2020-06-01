<?php
//Das ist ein einzeiliger Kommentar
//Sag der Welt: "Hallo" mit der Echo funktion (zeige auf Display an)

/**
 * ein mehrzeiliger Kommentar
 */

//Deklaration und Initialisierung einer Variablen vom Typ String

$name = "Sebastian";
$sirname = "Gropp";

echo "Hallo $name $sirname <br>";


//neuer Abschnitt - jetzt wird gerechnet

$zahl1 = 187; //integer zum rechnen
$zahl2 = 666;
$sum = $zahl1 + $zahl2;

echo "Die Summe aus $zahl1 und $zahl2 ist gleich $sum <br>"; 

//Eine neue Rechenaufgabe
// $zahl2 = 3;
// $zahl1 = 3.054; . bezeichnet eine Kommastelle (Dezimalzahl) diese nennt man Float 
// $sum = $zahl1 ** $zahl2;

// echo "$zahl1 hoch $zahl2 ist gleich $sum <br>"; 

//Jetzt die Richtige Rechnung dazu :)
$zahl2 = 3;
$quadrat = $zahl2 ** 2;

echo "$zahl2 hoch 2 ist gleich $quadrat <br>";

/**
 * jetzt kommt ein Array
 */

 //Das ist ein assoziativer Array
 $person = ["vorname" => "Sascha", "nachname" => "Böge", "alter" => 42];

 //nummerischer Array
 $haustiere = ["Katze", "Hund", "Pferd", "Gepard", "Schildkröte", "Frosch", "Adler", "Chinchilla", "Elefant", "Löwe", "Fuchs", "Maus", "Schwein"];

echo "Ich will Eins $haustiere[6].<br>";
echo "Und Ich will Eins $haustiere[12].<br>";

echo "$person[vorname] $person[nachname] ist $person[alter]<br> ";