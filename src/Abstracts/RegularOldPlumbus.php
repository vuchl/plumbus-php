<?php

namespace Remotelyliving\PlumbusPhp\Abstracts;

use Remotelyliving\PlumbusPhp\Exceptions\NonPlumbusableStateException;
use Remotelyliving\PlumbusPhp\Interfaces\Plumbusable;

abstract class RegularOldPlumbus {

  public function __construct( Plumbusable $plumbusable ) {

    if ( !$plumbusable->isPlumbusable() ) {
      throw new NonPlumbusableStateException( "This plumbusable isn't plumbussy enough yet." );
    }

  } // __construct

} // RegularOldPlumbus
