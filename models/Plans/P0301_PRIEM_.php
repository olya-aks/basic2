<?php
namespace app\models\Plans;

use yii\db\ActiveRecord;

class P0301_PRIEM_  extends ActiveRecord
{
  //  const STATUS_INACTIVE = 0;
  //  const STATUS_ACTIVE = 1;

    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{P0301_PRIEM_}}';
    }
}
?>
