<?php

namespace tests\units;

use mageekguy\atoum;

class HelloWorld extends atoum {

  public function HelloWorldTest() {
    $this
      ->given($this->newTestedInstance)
      ->then
        ->string($this->testedInstance->Hello())
          ->isEqualTo('Hello World!');
  }
}
