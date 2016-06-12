<?php

namespace Remotelyliving\PlumbusPhp\Models;

use Remotelyliving\PlumbusPhp\Managers\Blamf;

class GrumboTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\Grumbo
   */
  private $_sut;

  public function setUp() {

    $this->_sut = new Grumbo();

  } // setUp

  /**
   * @test
   */
  public function grumbo() {

    $this->assertInstanceOf( Grumbo::class, $this->_sut );
    $this->assertInstanceOf( Ploobis::class, $this->_sut->ploobis );
    $this->assertEquals( Grumbo::CHUMBLE_PER_GRUMBO_COUNT, count( $this->_sut->chumbles ) );
    $this->assertNull( $this->_sut->dinglebop );

    foreach ( $this->_sut->chumbles as $chumble ) {
      $this->assertInstanceOf( Chumble::class, $chumble );
    }

  } // grumbo

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException
   */
  public function pushInvalidDinglebop() {

    $this->_sut->push( new DingleBop() );

  } // pushInvalidDinglebop

  /**
   * @test
   */
  public function pushDinglebop() {

    $dinglebop = $this->createMock( DingleBop::class );
    $dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $this->_sut->push( $dinglebop );

    $this->assertInstanceOf( DingleBop::class, $this->_sut->dinglebop );

  } // pushDinglebop

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException
   */
  public function extractDinglebopWithPloobisStillAttached() {

    $dinglebop = $this->createMock( DingleBop::class );
    $dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $this->_sut->push( $dinglebop );
    $this->_sut->extractDinglebop();

  } // extractDinglebopWithPloobisStillAttached

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException
   */
  public function extractDinglebopWithChumblesUnrubbed() {

    $dinglebop = $this->createMock( DingleBop::class );
    $dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $this->_sut->push( $dinglebop );

    unset( $this->_sut->ploobis );

    $this->_sut->extractDinglebop();

  } // extractDinglebopWithChumblesUnrubbed

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\PlumbusPhpException
   */
  public function extractDinglebopWithNoChumblesOnGrumbo() {

    $dinglebop = $this->createMock( DingleBop::class );
    $dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $this->_sut->push( $dinglebop );

    unset( $this->_sut->ploobis );

    $this->_sut->chumbles = [];

    $this->_sut->extractDinglebop();

  } // extractDinglebopWithNoChumblesOnGrumbo

  /**
   * @test
   */
  public function extractDinglebop() {

    $dinglebop = $this->createMock( DingleBop::class );
    $dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $this->_sut->push( $dinglebop );

    unset( $this->_sut->ploobis );

    Blamf::rubAgainstTheChumbles( $this->_sut );

    $this->assertInstanceOf( DingleBop::class, $this->_sut->extractDinglebop() );

  } // extractDinglebop

  
} // GrumboTest
