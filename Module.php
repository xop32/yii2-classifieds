<?php

namespace classifieds;

use Yii;
use yii\base\Module as BaseModule;

/**
 * This is just an example.
 */
class Module extends BaseModule
{

  /**
   * Coun of ads in home page
   * @var int
   */
   public $countOfAds

    public function init()
    {
        parent::init();
    }
}
