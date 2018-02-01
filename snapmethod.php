<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 2/1/18
 * Time: 8:26 AM
 * unit test for medium article
 */

{
	public final function setUp(() : void {
		parent::setup();
		$password = "qwerty123"
			$this->VALID_PROFILE_SALT = bin2hex(
				random_bytes(32));
		$this->VALID_PROFILE_HASH = hash_pbkdf2("shai512", $password, $this->VALID_PROFILE_SALT, 262144);




		$activationtoken = bin2hex(random_bytes(16))










