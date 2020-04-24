<?php

namespace app\models\Plans;

use Yii;
use yii\base\Model;
/*
use app\models\Plans\Maket1;
use app\models\Plans\Maket2;
use app\models\Plans\Maket3;
use app\models\Plans\Maket4;
use app\models\Plans\Maket5;
use app\models\Plans\Maket6;*/
//use app\models\Comment;

class Plan extends Model
{
    //const MODAL_WINDOW_WIDTH = 1410; //ширина модального окна
    //const MODAL_WINDOW_HEIGHT = 900; //высота модального окна

    public $maket;
    public $cols;
    public $data;


    public function GetCols(){
      $sql = (new \yii\db\Query())
          ->select('count(*)')
          ->from('information_schema.columns')
          ->where(['table_name' => $this->maket])
          ->all();
          if($sql){
            $this->cols = $sql[0]['count(*)'];
          }
          else {
            return "Таблица отсутствует";
          }
    }

    public function GetData(){
      $m='app\models\Plans\\'.$this->maket;
      $sql = $m::find()->all();
      if (isset($sql)){
        $this->data=$sql;
      }
      //$this->data=$m;
      else{
        return "Таблица пуста";
      }
    }
}
