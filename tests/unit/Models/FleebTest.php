<?php

namespace Remotelyliving\PlumbusPhp\Models;

class FleebTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function fleeb() {

    $this->assertInstanceOf( Fleeb::class, new Fleeb() );

  } // fleeb

  /**
   * @test
   */
  public function hasAllTheFleebJuice() {

    $dry_fleeb    = new Fleeb();
    $juiced_fleeb = new Fleeb( new FleebJuice() );

    $this->assertFalse( $dry_fleeb->hasAllTheFleebJuice() );
    $this->assertTrue( $juiced_fleeb->hasAllTheFleebJuice() );

  } // hasAllTheFleebJuice

} // FleebTest
