<?php

namespace Remotelyliving\PlumbusPhp\Models;

class PloobisTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function ploobis() {

    $this->assertInstanceOf( Ploobis::class, new Ploobis() );

  } // ploobis

} // PloobisTest
