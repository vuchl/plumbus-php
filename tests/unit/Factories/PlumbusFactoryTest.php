<?php

namespace Remotelyliving\PlumbusPhp\Factories;

use Remotelyliving\PlumbusPhp\Plumbus;

class PlumbusFactoryTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function plumbusFactory() {

    $this->assertInstanceOf( PlumbusFactory::class, new PlumbusFactory() );

  } // plumbusFactory

  /**
   * @test
   */
  public function make() {

    $this->assertInstanceOf( Plumbus::class, ( new PlumbusFactory() )->make() );

  } // make
  
} // PlumbusFactoryTest
