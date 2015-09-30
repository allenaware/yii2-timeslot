<?php

namespace allenaware\timeslot;
use Yii;
use yii\widgets\InputWidget;
/**
 * This is just an example.
 */
class TimeSlot extends \yii\widgets\InputWidget
{
    public $times;

    public function init()
    {
        parent::init();



    }
    public function run()
    {
        parent::run();
        echo $this->attribute;
    }
}
