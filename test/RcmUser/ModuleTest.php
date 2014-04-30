<?php


namespace RcmUser\Test;

require_once __DIR__ . '/../Zf2TestCase.php';

use RcmUser\Module;
use RcmUser\Test;
use RcmUser\Zf2TestCase;


class ModuleTest extends Zf2TestCase
{
    /** @var  \RcmInstanceConfig\Module */
    protected $module;

    public function setUp()
    {
        $this->module = new Module();
    }

    /**
     * No covers tag so this tests both class map file and module file
     */
    public function testGetAutoloaderConfig()
    {
        $autoLoadConfig = $this->module->getAutoloaderConfig();
        $mapPath = array_pop($autoLoadConfig['Zend\Loader\ClassMapAutoloader']);
        $this->assertTrue(is_array(include($mapPath)));
    }

    /**
     * No covers tag so this tests both class map file and module file
     */
    public function testGetConfig()
    {
        $this->assertTrue(is_array($this->module->getConfig()));
    }
} 