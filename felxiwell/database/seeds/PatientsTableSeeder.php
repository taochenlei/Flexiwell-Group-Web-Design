<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'firstName' => 'Alice',
            'lastName' => 'Yang',
            'dateOfBirth' => '1981-05-22',
            'gender' => 'female',
            'phone' => '0420902311',
            'height' => '161',
            'weight' => '52.1',
            'doctor_id' => '1',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Brown',
            'lastName' => 'Alenxader',
            'dateOfBirth' => '1982-05-22',
            'gender' => 'male',
            'phone' => '0420902312',
            'height' => '162',
            'weight' => '52.2',
            'doctor_id' => '1',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Daniel',
            'lastName' => 'Goodman',
            'dateOfBirth' => '1983-05-22',
            'gender' => 'male',
            'phone' => '0420902313',
            'height' => '163',
            'weight' => '52.3',
            'doctor_id' => '1',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Bonny',
            'lastName' => 'Honey',
            'dateOfBirth' => '1984-05-22',
            'gender' => 'female',
            'phone' => '0420902314',
            'height' => '164',
            'weight' => '52.4',
            'doctor_id' => '2',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Json',
            'lastName' => 'John',
            'dateOfBirth' => '1985-05-22',
            'gender' => 'male',
            'phone' => '0420902315',
            'height' => '165',
            'weight' => '52.5',
            'doctor_id' => '2',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
