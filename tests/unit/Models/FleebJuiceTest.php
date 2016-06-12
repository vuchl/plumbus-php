<?php

namespace Remotelyliving\PlumbusPhp\Models;

class FleebJuiceTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function fleebJuice() {

    $this->assertInstanceOf( FleebJuice::class, new FleebJuice() );

  } // fleebJuice

} // FleebJuiceTest
