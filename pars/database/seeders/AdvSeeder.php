<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adv;

class AdvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ($this->readCsv() as $ad ) {
          Adv::firstOrCreate([
            'name' => strip_tags($ad['Name']),
            'price' => (int)strip_tags($ad['Price']),
            'bedrooms' => (int)strip_tags($ad['Bedrooms']),
            'bathrooms' => (int)strip_tags($ad['Bathrooms']),
            'storeys' => (int)strip_tags($ad['Storeys']),
            'garages' => (int)strip_tags($ad['Garages']),
          ]);
        }
    }

    private function readCsv()
    {
      $filePath = storage_path('app/public/csv/data.csv');
      $file = fopen($filePath, 'r');
  
      $header = fgetcsv($file);
  
      $rows = [];
      while ($row = fgetcsv($file)) {
          $rows[] = array_combine($header, $row);
      }
  
      fclose($file);
      return $rows;
    }
}
