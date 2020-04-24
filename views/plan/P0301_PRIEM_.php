<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
?>
<?php
$post = Yii::$app->request->post();
if(!empty($post)): //Проверка параметров(ширина и длина) передаваемых модальному окну java-скриптом?>


<!--БЛОК-ОБЁРТКА ДЛЯ СОДЕРЖИМОГО МОДАЛЬНОГО ОКНА -->
<div class="wraps">
  <p><?= $model->maket ?></p>
  <div class="table100 ver2">
    <div id="get" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="19">Прочих</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Всего</th>
          <th colspan="9">Груженых</th>
          <th colspan="9">Порожних</th>
        </tr>
        <tr class="row100 head">
          <th>Всего</th>
          <th>крытых</th>
          <th>платформ</th>
          <th>полувагонов</th>
          <th>зерновозов</th>
          <th>рефрежераторов</th>
          <th>прочих</th>
          <th>цементовозов</th>
          <th>цистерн</th>

          <th>Всего</th>
          <th>крытых</th>
          <th>платформ</th>
          <th>полувагонов</th>
          <th>зерновозов</th>
          <th>рефрежераторов</th>
          <th>прочих</th>
          <th>цементовозов</th>
          <th>цистерн</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['NOD']?></td>
          <td><?=$data['DATE']?></td>
          <td><?=$data['VS']?></td>
          <td><?=$data['GRU']?></td>
          <td><?=$data['GRUKR']?></td>
          <td><?=$data['GRUPL']?></td>
          <td><?=$data['GRUPV']?></td>
          <td><?=$data['GRUZR']?></td>
          <td><?=$data['GRURF']?></td>
          <td><?=$data['GRUPR']?></td>
          <td><?=$data['GRUCM']?></td>
          <td><?=$data['GRUCS']?></td>
          <td><?=$data['POR']?></td>
          <td><?=$data['PORKR']?></td>
          <td><?=$data['PORPL']?></td>
          <td><?=$data['PORPV']?></td>
          <td><?=$data['PORZR']?></td>
          <td><?=$data['PORRF']?></td>
          <td><?=$data['PORPR']?></td>
          <td><?=$data['PORCM']?></td>
          <td><?=$data['PORCS']?></td>
        </tr>
      <?php  endforeach; ?>
    </table>
  </div>
</div>
<button id="btn_show" class="myButton">Добавить</button>

<form id=new>
  <div class="table100 ver2">
    <div id="add" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th rowspan="3">НОД</th>
          <th rowspan="3">Расчетная дата</th>
          <th colspan="19">Прочих</th>
        </tr>
        <tr class="row100 head">
          <th rowspan="2">Всего</th>
          <th colspan="9">Груженых</th>
          <th colspan="9">Порожних</th>
        </tr>
        <tr class="row100 head">
          <th>Всего</th>
          <th>крытых</th>
          <th>платформ</th>
          <th>полувагонов</th>
          <th>зерновозов</th>
          <th>рефрежераторов</th>
          <th>прочих</th>
          <th>цементовозов</th>
          <th>цистерн</th>

          <th>Всего</th>
          <th>крытых</th>
          <th>платформ</th>
          <th>полувагонов</th>
          <th>зерновозов</th>
          <th>рефрежераторов</th>
          <th>прочих</th>
          <th>цементовозов</th>
          <th>цистерн</th>
        </tr>

        <tr class="row100 body">
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="text" name = "DATE" class="form-control"/></td>
          <td><input type="text" name = "VS" class="form-control"/></td>
          <td><input type="text" name = "GRU" class="form-control"/></td>
          <td><input type="text" name = "GRUKR" class="form-control"/></td>
          <td><input type="text" name = "GRUPL" class="form-control"/></td>
          <td><input type="text" name = "GRUPV" class="form-control"/></td>
          <td><input type="text" name = "GRUZR" class="form-control"/></td>
          <td><input type="text" name = "GRURF" class="form-control"/></td>
          <td><input type="text" name = "GRUPR" class="form-control"/></td>
          <td><input type="text" name = "GRUCM" class="form-control"/></td>
          <td><input type="text" name = "GRUCS" class="form-control"/></td>
          <td><input type="text" name = "POR" class="form-control"/></td>
          <td><input type="text" name = "PORKR" class="form-control"/></td>
          <td><input type="text" name = "PORPL" class="form-control"/></td>
          <td><input type="text" name = "PORPV" class="form-control"/></td>
          <td><input type="text" name = "PORZR" class="form-control"/></td>
          <td><input type="text" name = "PORRF" class="form-control"/></td>
          <td><input type="text" name = "PORPR" class="form-control"/></td>
          <td><input type="text" name = "PORCM" class="form-control"/></td>
          <td><input type="text" name = "PORCS" class="form-control"/></td>
        </tr>
      </table>
    </div>
  </div>
  <button id="btn_save" type="submit" class="myButton" >Отправить</button>
</form>
<!--button class="styler">Кнопка</button-->
</div><!--КОНЕЦ БЛОКА-ОБЁРТКИ ДЛЯ СОДЕРЖИМОГО МОДАЛЬНОГО ОКНА -->


<?php else: //В случае провала выдаём мессадж ?>
    <div class="container">
        <h3>
            <p>Здесь должно отображаться Ваше изображение</p>
        </h3>
    </div>
<?php endif;?>
