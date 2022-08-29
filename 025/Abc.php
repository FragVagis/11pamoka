<?php

class Abc extends C {

    use A;

    public $kas = 123;

    public function read()
    {
        return'-ABC-';
    }

}