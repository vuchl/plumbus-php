<?php

namespace Remotelyliving\PlumbusPhp\Managers;

use Remotelyliving\PlumbusPhp\Exceptions\OutOfSchleemException;
use Remotelyliving\PlumbusPhp\Models\Chumble;
use Remotelyliving\PlumbusPhp\Models\DingleBop;
use Remotelyliving\PlumbusPhp\Models\Fleeb;
use Remotelyliving\PlumbusPhp\Models\Grumbo;
use Remotelyliving\PlumbusPhp\Models\Schleem;

class BlamfTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  private $_dinglebop;

  /**
   * @var \Remotelyliving\PlumbusPhp\Managers\Blamf
   */
  private $_sut;

  public function setUp() {

    $this->_dinglebop = $this->createMock( DingleBop::class );
    $this->_sut       = new Blamf();

  } // setUp

  /**
   * @test
   */
  public function blamf() {

    $this->assertInstanceOf( Blamf::class, new Blamf() );

  } // blamf

  /**
   * @test
   */
  public function cutFleeb() {

    $fleeb_pieces = $this->_sut->cutFleeb( new Fleeb() );

    $this->assertEquals( Blamf::FLEEB_DEFAULT_PIECES, count( $fleeb_pieces ) );

    foreach ( $fleeb_pieces as $fleeb ) {
      $this->assertInstanceOf( Fleeb::class, $fleeb );
    }

  } // cutFleeb

  /**
   * @test
   */
  public function shavePloobis() {

    $grumbo = new Grumbo();

    $this->_sut->shavePloobis( $grumbo );

    $this->assertFalse( isset( $grumbo->ploobis ) );

  } // shavePloobis

  /**
   * @test
   */
  public function shaveGrumboAway() {

    $grumbo = new Grumbo();

    $this->_dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $grumbo->push( $this->_dinglebop );

    $this->_sut->shavePloobis( $grumbo );
    $this->_sut->rubAgainstTheChumbles( $grumbo );

    $this->assertSame( $this->_dinglebop, $this->_sut->shaveGrumboAway( $grumbo ) );

  } // shaveGrumboAway

  /**
   * @test
   */
  public function rubAgainsTheChumbles() {

    $grumbo = new Grumbo();

    $this->_dinglebop
      ->method( 'wasSmoothedWithSchleem' )
      ->willReturn( true );

    $grumbo->push( $this->_dinglebop );

    $this->_sut->rubAgainstTheChumbles( $grumbo );

    $this->assertEquals( Grumbo::CHUMBLE_PER_GRUMBO_COUNT, count( $grumbo->chumbles ) );

    foreach ( $grumbo->chumbles as $chumble ) {
      $this->assertInstanceOf( Chumble::class, $chumble );
    }

  } // rubAgainsTheChumbles

  /**
   * @test
   */
  public function smoothDinglebopWithSchleem() {

    $schleem = new Schleem();

    $this->_dinglebop->expects( $this->once() )
      ->method( 'handleSmoothing' )
      ->with( $schleem );

    $repurposed_schleem = $this->_sut->smoothDinglebopWithSchleem( $this->_dinglebop, $schleem );

    $this->assertSame( $schleem, $repurposed_schleem );


  } // smoothDinglebopWithSchleem

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\OutOfSchleemException
   */
  public function smoothDinglebopWithSchleemUsedUp() {

    $schleem = $this->createMock( Schleem::class );
    $schleem
      ->method( 'isUsedUp' )
      ->willReturn( true );

    $this->_dinglebop->expects( $this->never() )
      ->method( 'handleSmoothing' );

    $this->_sut->smoothDinglebopWithSchleem( $this->_dinglebop, $schleem );

  } // smoothDinglebopWithSchleemUsedUp

  /**
   * @test
   */
  public function rubDinglebopWithFleeb() {

    $fleeb = new Fleeb();

    $this->_dinglebop->expects( $this->once() )
      ->method( 'handleRubbing' )
      ->with( $fleeb );

    $this->_sut->rubDinglebopWithFleeb( $this->_dinglebop, $fleeb );

  } // rubDinglebopWithFleeb

} // BlamfTest
