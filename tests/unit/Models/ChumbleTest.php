<?php

namespace Remotelyliving\PlumbusPhp\Models;

class ChumbleTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Chumble
   */
  private $_sut;

  public function setUp() {

    $this->_sut = new Chumble();

  } // setUp

  /**
   * @test
   */
  public function chumble() {

    $this->assertInstanceOf( Chumble::class, $this->_sut );

  } // chumble

  /**
   * @test
   */
  public function wasRubbedByBlamf() {

    $this->_sut->setWasRubbedByBlamf( true );
    $this->assertTrue( $this->_sut->wasRubbedByBlamf() );

    $this->_sut->setWasRubbedByBlamf( false );
    $this->assertFalse( $this->_sut->wasRubbedByBlamf() );

    $this->_sut->setWasRubbedByBlamf( null );
    $this->assertFalse( $this->_sut->wasRubbedByBlamf() );

    $this->_sut->setWasRubbedByBlamf( 0 );
    $this->assertFalse( $this->_sut->wasRubbedByBlamf() );

  } // wasRubbedByBlamf

} // ChumbleTest
