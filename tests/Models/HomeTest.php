<?php

use Remotelyliving\PlumbusPhp\Factories\PlumbusFactory;
use Remotelyliving\PlumbusPhp\Models\Home;

class HomeTest extends PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function homeHasPlumbus() {

    $home = new Home( ( new PlumbusFactory() )->make() );

    $this->assertTrue( $home->hasPlumbus() );

  } // homeHasPlumbus

} // HomeTest
