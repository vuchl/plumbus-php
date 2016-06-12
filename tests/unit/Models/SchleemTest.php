<?php

namespace Remotelyliving\PlumbusPhp\Models;

class SchleemTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function schleem() {

    $this->assertInstanceOf( Schleem::class, new Schleem() );

  } // schleem

} // SchleemTest
