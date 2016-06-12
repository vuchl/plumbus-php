<?php

namespace Remotelyliving\PlumbusPhp\Abstracts;

use Remotelyliving\PlumbusPhp\Exceptions\NonPlumbusableStateException;
use Remotelyliving\PlumbusPhp\Interfaces\Plumbusable;

abstract class RegularOldPlumbus {

  public function __construct( Plumbusable $plumbusable ) {

    if ( !$plumbusable->isPlumbusable() ) {
      throw new NonPlumbusableStateException( 'I cannot make a plumbus out of this crap, Summer' );
    }

  } // __construct

} // RegularOldPlumbus
