<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $equipments = [
            [
                'id' => 1,
                'category_id' => 1,
                'asset_code' => 'EQ-SRV-0050',
                'name' => 'Server cloud',
                'specification' => 'Server cloud bagus',
                'condition' => 'baik',
                'status' => 'dipinjam',
                'daily_rental_fee' => 75000,
                'image_path' => null,
            ],
            [
                'id' => 2,
                'category_id' => 2, 
                'asset_code' => 'EQ-IOT-005',
                'name' => 'Raspberry Pi 4 Model B (8GB RAM) Starter Kit',
                'specification' => 'Quad-core Cortex-A72 @1.5GHz, 8GB LPDDR4, MicroSD 64GB Class 10, Casing Alumunium Aktif Fan, Power Supply Type-C Resmi',
                'condition' => 'baik',
                'status' => 'tersedia',
                'daily_rental_fee' => 15000,
                'image_path' => 'equipments/1729420000_eq_iot_005.png',
            ],
            [
                'id' => 3,
                'category_id' => 1, 
                'asset_code' => 'EQ-SRV-001',
                'name' => 'Dell PowerEdge T40 Server',
                'specification' => 'Server cloud bagus',
                'condition' => 'baik',
                'status' => 'dipinjam',
                'daily_rental_fee' => 50000,
                'image_path' => null,
            ],
            [
                'id' => 4,
                'category_id' => 3, 
                'asset_code' => 'EQ-DRN-001',
                'name' => 'DJI Mavic Air 2 Fly More Combo',
                'specification' => 'drone bagus',
                'condition' => 'baik',
                'status' => 'tersedia',
                'daily_rental_fee' => 50000,
                'image_path' => null,
            ],
            [
                'id' => 5,
                'category_id' => 2, 
                'asset_code' => 'EQ-IOT-002',
                'name' => 'Rasberry pi',
                'specification' => 'rasberry bagus rusak sedikit',
                'condition' => 'rusak_ringan',
                'status' => 'dalam_perbaikan',
                'daily_rental_fee' => 20000,
                'image_path' => null,
            ],
            [
                'id' => 6,
                'category_id' => 3, 
                'asset_code' => 'EQ-DRN-003',
                'name' => 'FPV Racing Drone BetaFPV Cetus Pro',
                'specification' => 'Drone bagus',
                'condition' => 'baik',
                'status' => 'tersedia',
                'daily_rental_fee' => 25000,
                'image_path' => null,
            ],
        ];

        foreach ($equipments as $item) {
            Equipment::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
