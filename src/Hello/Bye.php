<?php

namespace Hello ;

use Hello\Hi ;

class Bye extends Hi
{

    public  static function say()
    {
        return Hi::some(' uu ') . " Say Bye";
    }
}