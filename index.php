<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
  <h1>
  <!-- 問題1 -->
    <?php  echo'Hello  world!';

// 問題２

function hello(){
    $a  = "PHP";
    $b = "school";
    return   $a.$b;
}
 echo hello();
//   問題３

 $n =10;
 echo $n+5;
//   問題４

 $n  =1.05;
 echo $n * 2000;
// 問題５
 if($a >=80){
    echo 'congratulation';

 }elseif( $a>=60){
    echo "ok";
 }else{
    echo "Dont mind";
 };
//  問題６
if(! $id === "" || ! $name === ""){
    echo "OKです。";
}else{
echo "idまたはpassを入力してください。";
}
// 問題７
$arr = array('aaa','bbb','ccc');
echo $arr[1];
// 問題８
$answer = 0;
for($i =0; $i>10;$i++){
    $answer += 0.1;
}
echo $answer;
// 問題９

echo  date("Y/m/d H:i");
// 年、月、日　などを入れる方法がわかりませんでした。

// 問題10
$strs = "apple,orange,peach";
$str = explode("",$strs);
print_r($strs);
// 問題１１　　正規表現　がよくわかりませんでした。

// 問題１２
for ($i = 1;$i <10; $i ++){
    $count = $i;
    if($i % 3 === 0){
        echo '<b>$count<b>';
    }
}
// 問題１３
function addition(){

    $start = 1;
    $end = 100;
    $total = 0;

    for($i = 1; $i < $end; $i ++){
        $total += $i;
        
    }
    echo $total;
}
// 問題１４
function additions(){
    $start = 1;
    $end = 10000;
    $total = 0;

    for($i = 1 ; $i <= $end ; $i ++){
$total += $i;
    }
    // 末尾を取り出すやり方がわかりませんでした。
}

    ?>
  </h1>


    
 
</body>
</html>