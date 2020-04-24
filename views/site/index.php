<?php
use yii\helpers\Html;
use app\models\Plans\Maket1;
use app\models\Plans\P0061_PGR_;
use app\models\Plans\Maket3;
use app\models\Plans\Maket4;
use app\models\Plans\Maket5;
use app\models\Plans\Maket6;
$this->title = 'МИВЦ';
//$this->params['breadcrumbs'][] = $this->title;

$host = 'localhost';
$database = 'n_p_s';
$user = 'root';
$password ='';
$link = mysqli_connect($host,$user,$password,$database) or die ("ошибка" . mysqli_error($link));

?>
<!--div class="page-header">
    <h1><?= Html::encode($this->title) ?></h1>


</div-->


<div id="wrap" class="clr container">
  <div class="page-header-first-page-news">
    <h2>Передача плановых показателей :</h2>
  </div>

  <?php

/*
    $photo = Maket1::find()->all();
    foreach ($photo as $i) {
      echo $i['field1'] .'  ';
      echo $i['field2'] .'  ';
      echo $i['field3'] .'  ';
      echo '<br>';
    }
    $photo = P0061_PGR_::find()->all();
    foreach ($photo as $i) {
      echo $i['ESR'] .'  ';
      echo $i['NOD'] .'  ';
      echo '<br>';
    }

/*
  $test="maket32";

  $result = (new \yii\db\Query())
      ->select('maket')
      ->from('testtable')
      //->where( [':maket' => $test])
      //->where('maket=maket')
      ->where(['maket' => $test])
      ->all();


      if($result){
        foreach ($result as $comment) {
          echo "<p>".$comment['maket']. "</p>";
        }
      }
      else {
        echo "<p>Данные не получены</p>";
      }

      */



  ?>
     <div class="wrapper">
       <h5 for="inputDate">Выберите макет:</h5>
       <h5 for="inputDate">Введите регион:</h5>
       <h5 for="dateform">Введите дату:</h5>
       <div></div>



       <form action="formdata" method="post" name="form1">
           <select id="maket" class="chosen-select">
             <?php
             //$sql = "INSERT INTO testtable VALUES ('testname','test')";


               $sql = "select name from plans";
               $result = mysqli_query($link,$sql) or die ("ошибка" . mysqli_error($link));
               if ($result)
                 {
                   $rows = mysqli_num_rows($result);
                   for ($i = 0 ; $i < $rows ; ++$i)
                   {
                       $row = mysqli_fetch_row($result);
                       echo "<option>$row[0] </option>";
                   }
                     // очищаем результат
                     mysqli_free_result($result);
                 }
             ?>

           </select>
         </form>

         <form action="formdata" method="post" name="form1">
           <select id="region" class="chosen-select">

             <?php
               $sql = "select name from plans";
               $result = mysqli_query($link,$sql) or die ("ошибка" . mysqli_error($link));
               if ($result)
                 {
                   $rows = mysqli_num_rows($result);
                   for ($i = 0 ; $i < $rows ; ++$i)
                   {
                       $row = mysqli_fetch_row($result);
                       echo "<option>$row[0] </option>";
                   }
                     // очищаем результат
                     mysqli_free_result($result);
                 }
                 //mysqli_close($link);
             ?>

           </select>
         </form>

         <div class="form-group">
             <div class='input-group date' id='datetimepicker2'>
                 <input type='text' class="form-control"/>
                 <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                 </span>
             </div>
         </div>

         <!--button id="abc" class="styler" type="submit">Кнопка</button-->
         <button class="myButton">Поиск</button>
         </div>
         <div id="select"></div>

</div>
