
<link rel='stylesheet' href='css/style.css?v=2'>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<header>
<h1>じゃんけんゲーム</h1>
</header>
<body>
  
<div id="container">

<!-- <div class="outre">
<div class="inner"> -->

  <!-- <form action="index.php" method="post"> -->

  <form action="index.php" method="post">
  
  <h2>名前を入力して、選んでね</h2>
  <br>
  <div id="name">
  <input type="text" name="name" size="7">

  </div>
  
<!-- <h1 clas="choice">選んでね</h1> -->

    <div id="btn">
      <!-- <div class="gu"> -->
    <button type="image" name="gu" src="img/gu.jpg" >グー</button>
<!-- </div> -->
<!-- <div class="tyoki"> -->
    <button type="submit" name="tyoki">チョキ</button>
    <!-- </div> -->
    <!-- <div class="pa"> -->
    <button type="submit" name="pa">パー</button>
    <!-- </div> -->

    </div>

  </form>


<script>


//  $("#btn").on(click,function () {
//  if($('input[name="name"]').val() =="") {
//    alert("名前を入れてね");
//    return false;
//   }
function chk() {

    if($('input[name="name"]').val() =="") {
        alert("必須項目が記入されていません。");
        return false;
    }
});


</script>

<div id="act">


<?php




$name=$_POST["name"];
// $send=$_POST["send"];
// echo alert("helow");




$num = mt_rand(1,3);
$win ='<img src="img/win.png" />';
$lose ='<img src="img/lose.png" />';
$draw ='<img src="img/draw.png" />';
$again ='<img src="img/again.png" />';
echo '<img style="margin-right:80px">';


$gu='<img src="img/gu.jpg" />';
$tyoki='<img src="img/tyoki.png" />';
$pa='<img src="img/pa.png" />';

// echo "選んでね";
// echo "<br>";
// echo '<img style="margin-right:100px">';
// echo $name;

if(isset($_POST['gu'])) {
        echo  $name;
        echo $gu;
        echo "<br>";
        if($num == 1){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $gu;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $draw;
          
        }
        if($num == 2){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $tyoki;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $win;
        }
        if($num == 3){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $pa;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $lose;
        }
      } else if(isset($_POST['tyoki'])) {
        echo $name;
        echo "<br>";
        echo $tyoki;
        echo "<br>";
        if($num == 1){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $gu;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $lose;
        }
        if($num == 2){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $tyoki;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $draw;
        }
        if($num == 3){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $pa;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $win;
        }
        
      } else if(isset($_POST['pa'])) {
        echo $name;
        echo "<br>";
        echo $pa;
        echo "<br>";
        if($num == 1){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $gu;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $win;
        }
        if($num == 2){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $tyoki;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $lose;
        }
        if($num == 3){
          echo "<h2>相手</h2>";
          echo "<br>";
          echo $pa;
          echo "<br>";
          echo "<h2>結果</h2>";
          echo $draw;
        }
        
        
      
      }            
      
      
      
      ?>

  </div>
<!-- 
  <button type="submit" name="del" class="del">もう一回勝負する</button> -->
<!-- koko -->
</div>


      </body>
      </html>


<!-- 
1=グー
2＝ちょき
3＝パー
 -->