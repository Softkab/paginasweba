<?php
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use Illuminate\Database\Seeder;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
    	$faker = FakerFactory::create();
    	foreach (range(1,20) as $index) {
        DB::table('paginas')->insert([
            'titulo' => $faker->name,
            'dominios_id' => $faker->numberBetween(1,20),
            'contenido' => $faker->randomHtml(2,3),
        ]);
    	}
    }
}
