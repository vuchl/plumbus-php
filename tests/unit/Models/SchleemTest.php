<?php

namespace Remotelyliving\PlumbusPhp\Models;

class SchleemTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function schleem() {

    $this->assertInstanceOf( Schleem::class, new Schleem() );

  } // schleem

  /**
   * @test
   */
  public function markSchleemAsUsedUp() {

    $schleem = new Schleem();

    $this->assertFalse( $schleem->isUsedUp() );

    for ( $i = Schleem::DEFAULT_UNITS_OF_SCHLEEM; $i > 0; $i-- ) {
      $schleem->markSchleemAsUsed();
    }

    $this->assertTrue( $schleem->isUsedUp() );

  } // markSchleemAsUsedUp

} // SchleemTest
