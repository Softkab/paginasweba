<?php
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use Illuminate\Database\Seeder;

class DominiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$faker = FakerFactory::create();
    	foreach (range(1,20) as $index) {
        DB::table('dominios')->insert([
            'nombre' => $faker->domainName,
        ]);
    	}
    }
}
