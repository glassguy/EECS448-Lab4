<?php
$Q1 = $_POST["Question1"];
$Q2 = $_POST["Question2"];
$Q3 = $_POST["Question3"];
$Q4 = $_POST["Question4"];
$Q5 = $_POST["Question5"];

$correct = 0;
$total = 5;

echo "<h1>Results:</h1>";

echo "Q1) Who's that Pokémon?:<br>";
echo "<img src='quizimages/pikachucolor.jpeg' width ='150px' height='150px'><br>";
if($Q1 == "A") {
  echo "<b>CORRECT!</b><br>Your answer: Pikachu<br>Correct answer: Pikachu<br><br>";
  $correct++;
}
else {
  if($Q1 == "B") {
    echo "<b>INCORRECT!</b><br>Your answer: Mouseman<br>Correct answer: Pikachu<br><br>";
  }
  elseif($Q1 == "C") {
    echo "<b>INCORRECT!</b><br>Your answer: Electric Weasel<br>Correct answer: Pikachu<br><br>";
  }
  else {
    echo "<b>INCORRECT!</b><br>Your answer: Yellow Fellow<br>Correct answer: Pikachu<br><br>";
  }
}

echo "Q2) Who's that Pokémon?:<br>";
echo "<img src='quizimages/gengarcolor.jpeg' width ='150px' height='150px'><br>";
if($Q2 == "C") {
  echo "<b>CORRECT!</b><br>Your answer: Gengar<br>Correct answer: Gengar<br><br>";
  $correct++;
}
else {
  if($Q2 == "A") {
    echo "<b>INCORRECT!</b><br>Your answer: Buster<br>Correct answer: Gengar<br><br>";
  }
  elseif($Q2 == "B") {
    echo "<b>INCORRECT!</b><br>Your answer: Ghostly Ghoul<br>Correct answer: Gengar<br><br>";
  }
  else {
    echo "<b>INCORRECT!</b><br>Your answer: Hostess<br>Correct answer: Gengar<br><br>";
  }
}

echo "Q3) Who's that Pokémon?:<br>";
echo "<img src='quizimages/snorlaxcolor.jpeg' width ='150px' height='150px'><br>";
if($Q3 == "B") {
  echo "<b>CORRECT!</b><br>Your answer: Snorlax<br>Correct answer: Snorlax<br><br>";
  $correct++;
}
else {
  if($Q3 == "A") {
    echo "<b>INCORRECT!</b><br>Your answer: Manwich™<br>Correct answer: Snorlax<br><br>";
  }
  elseif($Q3 == "C") {
    echo "<b>INCORRECT!</b><br>Your answer: Mangino<br>Correct answer: Snorlax<br><br>";
  }
  else {
    echo "<b>INCORRECT!</b><br>Your answer: Paper Weight<br>Correct answer: Snorlax<br><br>";
  }
}

echo "Q4) Who's that Pokémon?:<br>";
echo "<img src='quizimages/charmandercolor.jpeg' width ='150px' height='150px'><br>";
if($Q4 == "D") {
  echo "<b>CORRECT!</b><br>Your answer: Charmander<br>Correct answer: Charmander<br><br>";
  $correct++;
}
else {
  if($Q4 == "A") {
    echo "<b>INCORRECT!</b><br>Your answer: Sally Mander<br>Correct answer: Charmander<br><br>";
  }
  elseif($Q4 == "B") {
    echo "<b>INCORRECT!</b><br>Your answer: Firezard<br>Correct answer: Charmander<br><br>";
  }
  else {
    echo "<b>INCORRECT!</b><br>Your answer: Lil Smokies<br>Correct answer: Charmander<br><br>";
  }
}

echo "Q5) Who's that Pokémon?:<br>";
echo "<img src='quizimages/mewtwocolor.jpeg' width ='150px' height='150px'><br>";
if($Q5 == "B") {
  echo "<b>CORRECT!</b><br>Your answer: Mewtwo<br>Correct answer: Mewtwo<br><br>";
  $correct++;
}
else {
  if($Q5 == "A") {
    echo "<b>INCORRECT!</b><br>Your answer: Mew<br>Correct answer: Mewtwo<br><br>";
  }
  elseif($Q5 == "C") {
    echo "<b>INCORRECT!</b><br>Your answer: Mewthree<br>Correct answer: Mewtwo<br><br>";
  }
  else {
    echo "<b>INCORRECT!</b><br>Your answer: New Mew Power o' Two<br>Correct answer: Mewtwo<br><br>";
  }
}

$percent = $correct / $total;
$percent = $percent * 100;

echo "You recieved a <b>" . $percent ."%</b>";

?>
