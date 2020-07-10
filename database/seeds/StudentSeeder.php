<?php

use Illuminate\Database\Seeder;

use App\Student;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) {
            $nuovo_studente = new Student();
            $nuovo_studente->firstname = $faker->firstName;
            $nuovo_studente->lastname = $faker->lastName;
            $nuovo_studente->freshman = $faker->numberBetween($min = 10000000, $max = 99999999);
            $nuovo_studente->mail = $faker->email;
            $nuovo_studente->save();
        }
    }
}
