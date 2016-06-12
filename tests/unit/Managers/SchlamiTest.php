<?php

namespace Remotelyliving\PlumbusPhp\Managers;

use Remotelyliving\PlumbusPhp\Models\DingleBop;

class SchlamiTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  private $_dinglebop;

  /**
   * @var \Remotelyliving\PlumbusPhp\Managers\Schlami
   */
  private $_sut;

  public function setUp() {

    $this->_dinglebop = $this->createMock( DingleBop::class );
    $this->_sut       = new Schlami();

  } // setUp

  /**
   * @test
   */
  public function schlami() {

    $this->assertInstanceOf( Schlami::class, new Schlami() );

  } // schlami

  /**
   * @test
   */
  public function spitOnDingleBop() {

    $this->_dinglebop->expects( $this->once() )
      ->method( 'setWasSpatOnBySchlami' )
      ->with( true );

    $this->_sut->spitOnDingleBop( $this->_dinglebop );

  } // spitOnDingleBop

  /**
   * @test
   */
  public function rubDingleBop() {

    $this->_dinglebop->expects( $this->once() )
      ->method( 'setWasRubbedBySchlami' )
      ->with( true );

    $this->_sut->rubDingleBop( $this->_dinglebop );

  } // rubDingleBop

} // SchlamiTest
