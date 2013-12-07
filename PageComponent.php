<?php

namespace yii\page;

use yii\base\Object;

class PageComponent extends Object
{

    public $title;
    public $name;
    public $content;

    public function init()
    {
        parent::init();
        $this->content = $this->title . ' ' . $this->name;
    }

    public function __construct($config = array())
    {
        parent::__construct($config);
    }

}
