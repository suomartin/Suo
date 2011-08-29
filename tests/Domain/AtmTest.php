<?php

namespace Test\Domain;

use Domain\Atm;

/**
 * Test class for Atm.
 * Generated by PHPUnit on 2011-07-28 at 19:21:23.
 */
class AtmTest extends \PHPUnit_Framework_TestCase
{
    public function testHasId()
    {
        $o_atm = new Atm('127.0.0.1');
        $this->assertAttributeEmpty('id', $o_atm);
    }

    public function testHasNetaddress()
    {
        $expected = '127.0.0.1';
        $o_atm = new Atm($expected);
        $this->assertAttributeEquals($expected, 'netaddress', $o_atm);
    }

    public function testHasDescrption()
    {
        $expected = '1st floor';
        $o_atm = new Atm('127.0.0.1', $expected);
        $this->assertAttributeEquals($expected, 'description', $o_atm);
    }

    public function testHasEmptyNetaddress()
    {
        $this->setExpectedException('DomainException', 'Net address cannot be empty');

        $o_atm = new Atm('');
        $this->assertAttributeEquals('', 'netaddress', $o_atm);
    }

}
