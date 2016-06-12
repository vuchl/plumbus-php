<?php

namespace Remotelyliving\PlumbusPhp;

use Remotelyliving\PlumbusPhp\Models\DingleBop;

class PlumbusTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  private $_dinglebop;

  public function setUp() {

    $this->_dinglebop = $this->createMock( DingleBop::class );

  } // setUp

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\NonPlumbusableStateException
   */
  public function plumbusNonPlumbusableDinglebopException() {

    $this->_dinglebop
      ->method( 'isPlumbusable' )
      ->willReturn( false );

    new Plumbus( $this->_dinglebop );

  } // plumbusNonPlumbusableDinglebopException

  /**
   * @test
   */
  public function plumbus() {

    $this->_dinglebop
      ->method( 'isPlumbusable' )
      ->willReturn( true );

    $plumbus = new Plumbus( $this->_dinglebop );

    $this->assertInstanceOf( Plumbus::class, $plumbus );

  } // plumbus
  
} // PlumbusTest
