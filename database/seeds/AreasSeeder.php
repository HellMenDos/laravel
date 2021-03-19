<?php

use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'address' => 'ул. Охтинская, д. 7',
                'contract_number' => '564654656565',
                'contract_date' => '2020-02-22',
                'contract_file' => '',
                'land_area' => 12.00,
                'house_area' => 3.00,
                'quantity_residents' => 5,
                'сounters' => '{"water_number":"1231231","water_verify_date":"2020-01-01","water_first_meter":"7","electr_number":"12312312","electr_verify_date":"2020-07-01","electr_first_meter":"5"}',
            ],
            [
                'id' => 2,
                'address' => 'ул. Охтинская, д. 10',
                'contract_number' => '3453454345',
                'contract_date' => '2020-02-20',
                'contract_file' => '',
                'land_area' => 15.00,
                'house_area' => 2.50,
                'quantity_residents' => 3,
                'сounters' => '{"water_number":"1231231","water_verify_date":"2020-01-01","water_first_meter":"7","electr_number":"12312312","electr_verify_date":"2020-07-01","electr_first_meter":"5"}',
            ],
            [
                'id' => 3,
                'address' => 'ул. Охтинская, д. 16',
                'contract_number' => '34534543454',
                'contract_date' => '2020-01-12',
                'contract_file' => '',
                'land_area' => 20.00,
                'house_area' => 3.50,
                'quantity_residents' => 4,
                'сounters' => '{"water_number":"1231231","water_verify_date":"2020-01-01","water_first_meter":"7","electr_number":"12312312","electr_verify_date":"2020-07-01","electr_first_meter":"5"}',
            ],
            [
                'id' => 4,
                'address' => 'ул. Охтинская, д. 17',
                'contract_number' => '1223412312',
                'contract_date' => '2020-03-12',
                'contract_file' => '',
                'land_area' => 20.00,
                'house_area' => 3.00,
                'quantity_residents' => 3,
                'сounters' => '{"water_number":"323232","water_verify_date":"2020-02-21","water_first_meter":"3","electr_number":"4563456","electr_verify_date":"2020-02-21","electr_first_meter":"2","electr_night_first_meter":"1"}',
            ],
            [
                'id' => 5,
                'address' => 'ул. Охтинская, д. 1',
                'contract_number' => '23423423',
                'contract_date' => '2020-07-17',
                'contract_file' => 'files/Z747PevBjLngIhk5iNsyAI88vOyZKBwmbvy30BDa.jpeg',
                'land_area' => 30.00,
                'house_area' => 2.00,
                'quantity_residents' => 2,
                'сounters' => '{"water_number":"323232","water_verify_date":"2020-02-21","water_first_meter":"3","electr_number":"4563456","electr_verify_date":"2020-02-21","electr_first_meter":"2","electr_night_first_meter":"1"}',
            ],
        ];
        DB::table('areas')->insert($data);
    }
}
