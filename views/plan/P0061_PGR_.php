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
          <th>Код станции</th>
          <th>НОД</th>
          <th>Расчетная дата</th>
          <th>План суточной погрузки вагонов</th>
          <th>План суточной погрузки тонн</th>
        </tr>
      <?php foreach ($model->data as $data): ?>
        <tr class="row100 body">
          <td><?=$data['ESR'] ?></td>
          <td><?=$data['NOD'] ?></td>
          <td><?=$data['DATE'] ?></td>
          <td><?=$data['PLNVAG'] ?></td>
          <td><?=$data['PLNTON'] ?></td>
        </tr>
      <?php  endforeach; ?>
    </table>
  </div>
</div>
<button id="btn_show" class="myButton">Добавить</button>

<form id="new">
  <div class="table100 ver2">
    <div id="add" class="table100-body js-pscroll">
      <table>
        <tr class="row100 head">
          <th>Код станции</th>
          <th>НОД</th>
          <th>Расчетная дата</th>
          <th>План суточной погрузки вагонов</th>
          <th>План суточной погрузки тонн</th>
        </tr>
        <tr class="row100 body">
          <td><input type="text" name = "ESR" class="form-control"/></td>
          <td><input type="text" name = "NOD" class="form-control"/></td>
          <td><input type="text" name = "DATE" class="form-control"/></td>
          <td><input type="text" name = "PLNVAG" class="form-control"/></td>
          <td><input type="text" name = "PLNTON" class="form-control"/></td>
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
