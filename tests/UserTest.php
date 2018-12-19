<?php

/**
* 
*/
namespace tests;
use \PHPUnit\Framework\TestCase;
class Usertest extends TestCase
{
	protected $user;

	public function setUp(){
		$this->user= new \App\User;
	}
	
	public function testWeCanGetFirstName()
	{
		$this->user->setFirstName('chandra');

		$this->assertEquals($this->user->getFirstName(),'chandra');
	}

	/** @test */
	public function we_can_get_fullname()
	{
		$this->user->setFirstName('chandra');
		$this->user->setLastName('prakash');
		$this->assertEquals($this->user->getFullName(),'chandra prakash');
	}

	/** @test */
	public function check_valid_email_provided_by_user()
	{
		$this->user->setEmail('chandra.prakash@faircent.com');

		$this->assertTrue($this->user->checkValidEmail());
	}

}