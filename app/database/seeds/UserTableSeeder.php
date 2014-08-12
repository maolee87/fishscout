<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {

  	$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 300; $i++)
		{
		  $user = User::create(array(
		    'username' => $faker->userName,
		    'firstname' => $faker->firstName,
		    'lastname' => $faker->lastName,
		    'email' => $faker->email,
		    'password' => $faker->word,



			'country' => $faker->country,
			'region' => $faker->state,
			'zip' => $faker->postcode,
			'place' => $faker->city,
			'street' => $faker->streetAddress,
			'street_number' => $faker->buildingNumber,
	        
	        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
	        'activated' => $faker->numberBetween($min = 0, $max = 1),

	        'path_to_avatar' => $faker->country,
	        'phone' => $faker->randomNumber($nbDigits = NULL),
	        'user_info' => $faker->text($maxNbChars = 300),
	        'regitstration_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
	        'activation_date' => $faker->date($format = 'Y-m-d', $max = 'now'),

	        'user_group_id' => $faker->numberBetween($min = 0, $max = 3),


		  ));
		}
	
	/*
	$user = User::create(array(
	  'username' => 'philipbrown',
	  'firstname' => 'Philip',
	  'lastname' => 'Brown',
	  'email' => 'phil@ipbrown.com',
	  'password' => 'qwerty'
	));	
	*/
  }
 
}