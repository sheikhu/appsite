<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WorksTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $images = [
            'cabin', 'cake', 'circus', 'game', 'safe', 'submarine'
            ];
        DB::table('works')->truncate();
		foreach($images as $image)
		{
			Work::create([
                'title' => $faker->sentence(3),
                'date_project' => $faker->dateTime,
                'client' => $faker->company,
                'description' => $faker->paragraph(2),
                'image' => 'freelancer/img/portfolio/'.$image.'.png',
                'service' => $faker->sentence(2)
			]);
		}
	}

}
