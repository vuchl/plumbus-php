<?php

namespace Remotelyliving\PlumbusPhp\Models;

class DinglebopTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \Remotelyliving\PlumbusPhp\Models\DingleBop
   */
  private $_sut;

  public function setUp() {

    $this->_sut = new DingleBop();

  } // setUp

  /**
   * @test
   */
  public function dingleBop() {

    $this->assertInstanceOf( DingleBop::class, $this->_sut );

  } // dingleBop

  /**
   * @test
   */
  public function areSeveralHizzardsInTheWay() {

    $this->assertTrue( $this->_sut->areSeveralHizzardsInTheWay() );

  } // areSeveralHizzardsInTheWay

  /**
   * @test
   */
  public function isPlumbusable() {

    $this->assertFalse( $this->_sut->isPlumbusable() );

    $this->_sut->setWasRubbedBySchlami( true );

    $this->assertFalse( $this->_sut->isPlumbusable() );

    $this->_sut->setWasSpatOnBySchlami( true );

    $this->assertFalse( $this->_sut->isPlumbusable() );

    $this->_sut->handleRubbing( new Fleeb( new FleebJuice() ) );

    $this->assertFalse( $this->_sut->isPlumbusable() );

    $this->_sut->handleSmoothing( new Schleem() );

    $this->assertTrue( $this->_sut->isPlumbusable() );

  } // isPlumbusable

  /**
   * @test
   * @expectedException \Remotelyliving\PlumbusPhp\Exceptions\FleebHydrationException
   */
  public function handleRubbingFleebException() {

    $this->_sut->handleRubbing( new Fleeb() );

  } // handleRubbingFleebException
  
} // DinglebopTest
