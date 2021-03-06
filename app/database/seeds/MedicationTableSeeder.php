<?php

class MedicationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('medications')->delete();

		Medication::create(array(
			'user_id'		=> 1,
			'name'			=> 'Vicodin',
			'dosage'		=> '300 mg',
			'dosage_time'	=> 'Morning',
			'medlist_id'	=> 21,
			'requirements'	=> 'Take once by mouth every 4 hours as needed.',
			'notes'			=> 'Based on your weight, do not take more than 6 tablets in a 24 hour period.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 2,
			'name'			=> 'Naproxen',
			'dosage'		=> '250 mg',
			'dosage_time'	=> 'Morning',
			'medlist_id'	=> 12,
			'requirements'	=> 'Take 2 to 3 times daily',
			'notes'			=> 'Take with a full glass of water.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 3,
			'name'			=> 'Lisinopril',
			'dosage'		=> '2.5 mg',
			'medlist_id'	=> 8,
			'dosage_time'	=> 'Morning',
			'requirements'	=> 'Take once by mouth daily.',
			'notes'			=> 'Do not take with Dr Pepper.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 4,
			'name'			=> 'Adderall',
			'dosage'		=> '10 mg',
			'medlist_id'	=> 1,
			'dosage_time'	=> 'Morning',
			'requirements'	=> 'Take 1 to 3 times daily with or without food.',
			'notes'			=> 'Can be taken with or without food.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 5,
			'name'			=> 'Mircozide',
			'dosage'		=> '12.5 mg',
			'dosage_time'	=> 'Morning',
			'medlist_id'	=> 10,
			'requirements'	=> 'Take once by mouth every 24 hours.',
			'notes'			=> 'Recommended to be taken at the same time every day.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));

		Medication::create(array(
			'user_id'		=> 6,
			'name'			=> 'Xanax',
			'dosage'		=> '1 mg',
			'dosage_time'	=> 'Morning',
			'medlist_id'	=> 23,
			'requirements'	=> 'Take 1 to 2 times daily with or without food.',
			'notes'			=> 'Dosage may be increased by your doctor until the drug starts working well.',
			'created_at'	=> new DateTime,
			'updated_at'	=> new DateTime
		));
	}
}