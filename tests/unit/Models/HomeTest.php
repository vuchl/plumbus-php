<?php

namespace Remotelyliving\PlumbusPhp\Models;

use Remotelyliving\PlumbusPhp\Factories\PlumbusFactory;
use Remotelyliving\PlumbusPhp\Plumbus;

class HomeTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function homeHasPlumbus() {

    $home = new Home( ( new PlumbusFactory() )->make() );

    $this->assertTrue( $home->hasPlumbus() );
    $this->assertInstanceOf( Plumbus::class, $home->getPlumbus() );

  } // homeHasPlumbus

} // HomeTest
