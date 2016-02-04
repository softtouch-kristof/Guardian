<?php

namespace Database\Seeds;

use Cloudoki\Guardian\Role;
use Cloudoki\Guardian\RoleToken;
use Illuminate\Database\Seeder;

class GuardianRolesSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
	public function run()
	{
		// The Roles
		$admin = Role::create (
		[
			'name'			=>  'Administrator',
			'description'	=>  'All rights are granted'
		]);
		
		$editor = Role::create (
		[
			'name'			=>  'Editor',
			'description'	=>  'Most rights are granted, except closing'
		]);
		
		$intern = Role::create (
		[
			'name'			=>  'Intern',
			'description'	=>  'Some rights are granted'
		]);
		
		$guest = Role::create (
		[
			'name'			=>  'Guest',
			'description'	=>  'Only limited view rights are granted'
		]);
		
		// The Tokens
		// prove 4 example tokens, in a way Guest has 1, and admin 4
		
	}
}
