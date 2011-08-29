<?php

namespace Test\Domain;

use Domain\User;

/**
 * Test class for User.
 * Generated by PHPUnit on 2011-08-27 at 13:48:07.
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testHasId()
    {
        $o_user = new User('Test', '', '', 'pass');
        $this->assertAttributeEmpty('id', $o_user);
    }

    public function testHasLastName()
    {
        $s_expected = 'Test';

        $o_user = new User($s_expected, '', '', 'pass');
        $this->assertAttributeEquals($s_expected, 'last_name', $o_user);
    }

    public function testHasEmptyLastName()
    {
        $this->setExpectedException('DomainException', 'User last name cannot be empty');

        $o_user = new User('', '', '', 'pass');
        $this->assertAttributeEquals('', 'last_name', $o_user);
    }

    public function testHasFirstName()
    {
        $s_expected = 'TestFirst';

        $o_user = new User('Test', $s_expected, '', 'pass');
        $this->assertAttributeEquals($s_expected, 'first_name', $o_user);
    }

    public function testHasSecondName()
    {
        $s_expected = 'TestSecond';

        $o_user = new User('Test', 'TestFirst', $s_expected, 'pass');
        $this->assertAttributeEquals($s_expected, 'second_name', $o_user);
    }

    public function testHasPassword()
    {
        $s_expected = 'pass';

        $o_user = new User('Test', '', '', $s_expected);
        $this->assertAttributeEquals($s_expected, 'password', $o_user);
    }

    public function testHasEmptyPassword()
    {
        $this->setExpectedException('DomainException', 'Password cannot be empty');

        $o_user = new User('Test', '', '', '');
        $this->assertAttributeEquals('', 'password', $o_user);
    }

    public function testHasWorkWithTicketDefault()
    {
        $o_user = new User('Test', '', '', 'pass');
        $this->assertAttributeEquals(true, 'work_with_ticket', $o_user);
    }


    public function testHasWorkWithTicketFalse()
    {
        $o_user = new User('Test', '', '', 'pass', false);
        $this->assertAttributeEquals(false, 'work_with_ticket', $o_user);
    }

}