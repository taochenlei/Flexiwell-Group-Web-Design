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
            'dateOfInjury' => '2005-05-22',
            'dateOfAssessment' => '2005-06-22',
            'gender' => 'female',
            'phone' => '0420902311',
            'height' => '161',
            'weight' => '52.1',
            'doctor_id' => '1',
            'bloodPressureS' => '100',
            'bloodPressureD' => '80',
            'heartRate' => '90',
            'neckFlexion' => '20',
            'neckExtension' => '30',
            'elbowFlexion' => '100',
            'elbowExtension' => '0',
            'gripStrengthL1' => '50.0',
            'gripStrengthL2' => '51.0',
            'gripStrengthL3' => '52.0',
            'gripStrengthR1' => '53.0',
            'gripStrengthR2' => '54.0',
            'gripStrengthR3' => '55.0',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Brown',
            'lastName' => 'Alenxader',
            'dateOfBirth' => '1982-05-22',
            'dateOfInjury' => '2005-05-22',
            'dateOfAssessment' => '2005-06-22',
            'gender' => 'male',
            'phone' => '0420902312',
            'height' => '162',
            'weight' => '52.2',
            'doctor_id' => '3',
            'bloodPressureS' => '101',
            'bloodPressureD' => '81',
            'heartRate' => '91',
            'neckFlexion' => '21',
            'neckExtension' => '31',
            'elbowFlexion' => '101',
            'elbowExtension' => '1',
            'gripStrengthL1' => '50.1',
            'gripStrengthL2' => '51.1',
            'gripStrengthL3' => '52.1',
            'gripStrengthR1' => '53.1',
            'gripStrengthR2' => '54.1',
            'gripStrengthR3' => '55.1',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Daniel',
            'lastName' => 'Goodman',
            'dateOfBirth' => '1983-05-22',
            'dateOfInjury' => '2005-05-22',
            'dateOfAssessment' => '2005-06-22',
            'gender' => 'male',
            'phone' => '0420902313',
            'height' => '163',
            'weight' => '52.3',
            'doctor_id' => '1',
            'bloodPressureS' => '102',
            'bloodPressureD' => '82',
            'heartRate' => '92',
            'neckFlexion' => '22',
            'neckExtension' => '32',
            'elbowFlexion' => '102',
            'elbowExtension' => '2',
            'gripStrengthL1' => '50.2',
            'gripStrengthL2' => '51.2',
            'gripStrengthL3' => '52.2',
            'gripStrengthR1' => '53.2',
            'gripStrengthR2' => '54.2',
            'gripStrengthR3' => '55.2',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Bonny',
            'lastName' => 'Honey',
            'dateOfBirth' => '1984-05-22',
            'dateOfInjury' => '2005-05-22',
            'dateOfAssessment' => '2005-06-22',
            'gender' => 'female',
            'phone' => '0420902314',
            'height' => '164',
            'weight' => '52.4',
            'doctor_id' => '2',
            'bloodPressureS' => '103',
            'bloodPressureD' => '83',
            'heartRate' => '93',
            'neckFlexion' => '23',
            'neckExtension' => '33',
            'elbowFlexion' => '103',
            'elbowExtension' => '3',
            'gripStrengthL1' => '50.3',
            'gripStrengthL2' => '51.3',
            'gripStrengthL3' => '52.3',
            'gripStrengthR1' => '53.3',
            'gripStrengthR2' => '54.3',
            'gripStrengthR3' => '55.3',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);

        DB::table('patients')->insert([
            'firstName' => 'Json',
            'lastName' => 'John',
            'dateOfBirth' => '1985-05-22',
            'dateOfInjury' => '2005-05-22',
            'dateOfAssessment' => '2005-06-22',
            'gender' => 'male',
            'phone' => '0420902315',
            'height' => '165',
            'weight' => '52.5',
            'doctor_id' => '2',
            'bloodPressureS' => '104',
            'bloodPressureD' => '84',
            'heartRate' => '94',
            'neckFlexion' => '24',
            'neckExtension' => '34',
            'elbowFlexion' => '104',
            'elbowExtension' => '4',
            'gripStrengthL1' => '50.4',
            'gripStrengthL2' => '51.4',
            'gripStrengthL3' => '52.4',
            'gripStrengthR1' => '53.4',
            'gripStrengthR2' => '54.4',
            'gripStrengthR3' => '55.4',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
