<?php
/**
 * Created by Malt Blue <http://www.maltblue.com>.
 * User: matthewsetter
 * Date: 03/05/2013
 * Time: 16:14
 * 
 */

namespace SimpleClass;

class TestClass
{
    const OUTPUT_STRING = "HELLO WORLD";

    public function __construct()
    {

    }

    public function printOutput()
    {
        print self::OUTPUT_STRING;
    }
}