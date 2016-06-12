<?php

namespace Remotelyliving\PlumbusPhp\Models;

class HizzardTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function hizzard() {

    $this->assertInstanceOf( Hizzard::class, new Hizzard() );

  } // hizzard

  /**
   * @test
   */
  public function isInTheWay() {

    $this->assertTrue( ( new Hizzard() )->isInTheWay() );

  } // isInTheWay

} // HizzardTest
