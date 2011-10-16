<?php

namespace Gamz\TypefastrBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration;

class GameController
{
    /**
     * @Configuration\Route("/", name="index")
     * @Configuration\Template
     */
    public function indexAction()
    {
        return array();
    }
}
