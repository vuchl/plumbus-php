<?php

namespace Remotelyliving\PlumbusPhp\Managers;

use Remotelyliving\PlumbusPhp\Models\DingleBop;

class SchlamiTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  private $_dinglebop;

  public function setUp() {

    $this->_dinglebop = $this->createMock( DingleBop::class );

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

    Schlami::spitOnDingleBop( $this->_dinglebop );

  } // spitOnDingleBop

  /**
   * @test
   */
  public function rubDingleBop() {

    $this->_dinglebop->expects( $this->once() )
      ->method( 'setWasRubbedBySchlami' )
      ->with( true );

    Schlami::rubDingleBop( $this->_dinglebop );

  } // rubDingleBop

} // SchlamiTest
