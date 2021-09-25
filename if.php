<?php

$brave_hp = 30;
$brave_attack = 10;
$brave_defense = 5;

$enemy_hp = 30;
$enemy_attack = 5;
$enemy_defense = 10;

$select_attack = mt_rand(0,3);

if($select_attack == 0){
  echo "かいしんのいちげき";
  $enemy_damage = $brave_attack - $enemy_defense + mt_rand(20,30);
  $enemy_hp = $enemy_hp - $enemy_damage;
}else{
  echo "つうじょうこうげき";
  $enemy_damage = $brave_attack - $enemy_defense + mt_rand(3,5);
  $enemy_hp = $enemy_hp - $enemy_damage;
}

echo "<br>";

echo "敵に".$enemy_damage."のダメージを与えた。";
echo "<br>";
echo "残りHPは".$enemy_damage."だ。";
echo "<br>";

if($enemy_hp > 20){
  echo "敵は元気だ";
}elseif($enemy_hp > 10){
  echo "敵はちょっと弱っている";
}elseif($enemy_hp > 5){
  echo "敵はかなり弱っている";
}elseif($enemy_hp > 0){
  echo "敵は瀕死だ";
}else{
  echo "敵はしんだ";
}

echo "<br>";

$select_attack = mt_rand(0,3);

if($select_attack == 0){
  echo "かいしんのいちげき";
  $brave_damage = $enemy_attack - $brave_defense + mt_rand(10,20);
  $brave_hp = $brave_hp - $enemy_damage;
}else{
  echo "つうじょうこうげき";
  $brave_damage = $enemy_attack - $brave_defense + mt_rand(3,5);
  $brave_hp = $brave_hp - $brave_damage;
}

echo "<br>";

echo "敵から".$brave_damage."のダメージを受けた。";
echo "<br>";
echo "残りHPは".$brave_hp."だ。";
echo "<br>";

if($brave_hp > 20){
  echo "勇者は元気だ";
}elseif($brave_hp > 10){
  echo "勇者はちょっと弱っている";
}elseif($brave_hp > 5){
  echo "勇者はかなり弱っている";
}elseif($brave_hp > 0){
  echo "勇者は瀕死だ";
}else{
  echo "勇者は死んだ";
}

?>
