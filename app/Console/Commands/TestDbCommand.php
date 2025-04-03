<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TestDbCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-db-command';

    protected $header;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = 0;
        $files = File::files(storage_path('app/test'));

        $headers = [
            'id' => 'id',
            'brand' => 'brand',
            'sku' => 'sku',
            'product_name' => 'product_name',
            'product_model' => 'product_model',
            'status' => 'status',
            'name_1' => 'name_1',
            'name_2' => 'name_2',
            'name_3' => 'name_3',
            'name_4' => 'name_4',
            'name_5' => 'name_5',
            'name_6' => 'name_6',
            'name_7' => 'name_7',
            'name_8' => 'name_8',
            'name_9' => 'name_9',
            'name_10' => 'name_10',
            'name_11' => 'name_11',
            'name_12' => 'name_12',
            'name_13' => 'name_13',
            'name_14' => 'name_14',
            'name_15' => 'name_15',
            'name_16' => 'name_16',
            'name_17' => 'name_17',
            'name_18' => 'name_18',
            'name_19' => 'name_19',
            'name_20' => 'name_20',
        ];

        foreach ($files as $file) {
            if (($handle = fopen($file, 'r')) !== false) {
                $data = [];
                while (($row = fgetcsv($handle, 0, "\t")) !== false) {
                    if (!$this->header) {
                        $this->header = $row;
                        continue;
                    }

                    $row = array_combine(array_keys($headers), array_pad($row, count($headers), ''));

                    $data[] = [
                        'brand' => $row['brand'],
                        'sku' => $row['sku'],
                        'product_name' => $row['product_name'],
                        'product_model' => $row['product_model'],
                        'status' => $row['status'],
                        'name_1' => trim(preg_replace('/^[^a-zA-Z0-9]+|[^a-zA-Z0-9]+$/', '', $row['name_1'])),
                        'name_2' => trim(preg_replace('/^[^a-zA-Z0-9]+|[^a-zA-Z0-9]+$/', '', $row['name_2'])),
                        'name_3' => trim(preg_replace('/^[^a-zA-Z0-9]+|[^a-zA-Z0-9]+$/', '', $row['name_3'])),
                        'name_4' => trim(preg_replace('/^[^a-zA-Z0-9]+|[^a-zA-Z0-9]+$/', '', $row['name_4'])),
                        'name_5' => $row['name_5'],
                        'name_6' => $row['name_6'],
                        'name_7' => $row['name_7'],
                        'name_8' => $row['name_8'],
                        'name_9' => $row['name_9'],
                        'name_10' => $row['name_10'],
                        'name_11' => $row['name_11'],
                        'name_12' => $row['name_12'],
                        'name_13' => $row['name_13'],
                        'name_14' => $row['name_14'],
                        'name_15' => $row['name_15'],
                        'name_16' => $row['name_16'],
                        'name_17' => $row['name_17'],
                        'name_18' => $row['name_18'],
                        'name_19' => $row['name_19'],
                        'name_20' => $row['name_20'],
                    ];

                    $data = array_unique($data, SORT_REGULAR);

                    if (count($data) > 250) {
                        $this->insertData($data);
                        $data = [];
                    }


                    $count++;
                    $this->info('Inserting data ' . $row['product_name'] . '--' . $row['product_model'] . '/' . $count);
                }

                if (!empty($data)) {
                    $this->insertData($data);
                }
            }
        }
    }

    public function insertData($data)
    {
        DB::table('webike_oem_converted')->insert($data);
    }
}
