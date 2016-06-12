<?php

namespace Remotelyliving\PlumbusPhp\Factories;

use Remotelyliving\PlumbusPhp\Models\Schleem;
use Remotelyliving\PlumbusPhp\Plumbus;

class PlumbusFactoryTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function plumbusFactory() {

    $this->assertInstanceOf( PlumbusFactory::class, new PlumbusFactory() );

  } // plumbusFactory

  /**
   * @test
   */
  public function make() {

    $this->assertInstanceOf( Plumbus::class, ( new PlumbusFactory() )->make() );

  } // make

  /**
   * @test
   */
  public function useUpSchleemAndKeepTruckin() {

    $plumbus_factory = new PlumbusFactory();

    for ( $i = ( Schleem::DEFAULT_UNITS_OF_SCHLEEM + 1 ); $i > 0; $i-- ) {
      $this->assertInstanceOf( Plumbus::class, $plumbus_factory->make() );
    }

  } // useUpSchleemAndKeepTruckin
  
} // PlumbusFactoryTest
