<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product')->insert([
            [
                "name" => "1502 vacuum - 400 amp",
                "partModelNo" => "1502-V4C1D1",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "39121529",
                "contractorType" => "1502 Vacuum",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Vacuum",
                "rollSlideFixed" => "Fixed",
                "primaryVoltage" => "5000",
                "amps" => "400",
                "desc" => 'Series "A"',
                "additionalKeywords" => "VZ4-PE-C 5000, 1502-V4C1D1",
                "price" => "* please call or request quote",
                "shippingWeight" => "46 pounds",
                "image" => "img/contractor.png"
            ],
            [
                "name" => "1502 vacuum - 400 amp, Gray-plastic",
                "partModelNo" => "(1502-V4CBD-1) / (1502-V4DBDA-1) / (1502-VC4DBDB-0) / (1502-V4CCD-1)",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "39121529",
                "contractorType" => "1502 Vacuum",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Vacuum",
                "rollSlideFixed" => "Fixed",
                "primaryVoltage" => "(2400 / 5000) - (2500/7200) - (2500/5000)",
                "amps" => "360 - 400",
                "controlVoltage" => "120 AC",
                // "desc" => '',
                "additionalKeywords" => "1502-V4CBD1-1",
                "price" => "* please call or request quote",
                "shippingWeight" => "46 pounds",
                "image" => ""
            ],
            [
                "name" => "1502 vacuum - 450 amp",
                "partModelNo" => "",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "",
                "contractorType" => "",
                "brandName" => "",
                "vacuumAir" => "",
                "rollSlideFixed" => "",
                "primaryVoltage" => "",
                "amps" => "",
                "desc" => "",
                "additionalKeywords" => "",
                "price" => "",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "1502 vacuum - 800 amp",
                "partModelNo" => "(1502-VC8DXDA-1) / (1502-V8DXDA-1)",
                "modelNo" => "Series E",
                "partNo" => "",
                "UNSPSC" => "39121529",
                "contractorType" => "1502 Vacuum",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Vacuum",
                "rollSlideFixed" => "Fixed",
                "primaryVoltage" => "2500 / 7200",
                "amps" => "800",
                "desc" => "3Ø, 50/60Hz, Interrupting Capacity 12000Amp., Altitude 0-1000M",
                "additionalKeywords" => "Rockwell Automation",
                "price" => "* please call or request quote",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "1502 vacuum - 800 amp",
                "partModelNo" => "1502-V8C6D1",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "39121529",
                "contractorType" => "1502 Vacuum",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Vacuum",
                "rollSlideFixed" => "Fixed",
                "primaryVoltage" => "2500 / 7200",
                "amps" => "800",
                "desc" => 'Series A, 3 φ, Interrupting Rate: 11',
                "additionalKeywords" => "VZ8-PE-C",
                "price" => "* please call or request quote",
                "shippingWeight" => "122 pounds",
                "image" => ""
            ],
            [
                "name" => "Allen Bradley 1500 - 400 Amp",
                "partModelNo" => "",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "",
                "contractorType" => "",
                "brandName" => "",
                "vacuumAir" => "",
                "rollSlideFixed" => "",
                "primaryVoltage" => "",
                "amps" => "",
                "desc" => '',
                "additionalKeywords" => "",
                "price" => "",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "1502 - 400 Amp",
                "partModelNo" => "(1502-A4C3D1) / (1502-A4C3D3)",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "39121529",
                "contractorType" => "1502",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Air",
                "rollSlideFixed" => "Slide-In",
                "primaryVoltage" => "5000 / 2500",
                "amps" => "400",
                "desc" => '',
                "additionalKeywords" => "Centerline, 1502A4C3D1",
                "price" => "* please call or request quote",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "Allen Bradley - 1502 -800 Amp",
                "partModelNo" => "",
                "modelNo" => "A",
                "partNo" => "1502-A8C4D3",
                "UNSPSC" => "39121529",
                "contractorType" => "1502",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Air",
                "rollSlideFixed" => "Roll-In",
                "primaryVoltage" => "5000",
                "amps" => "800",
                "desc" => '',
                "additionalKeywords" => "",
                "price" => "* please call or request quote",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "Allen Bradley - 1152 - 400 Amp",
                "partModelNo" => "",
                "modelNo" => "",
                "partNo" => "",
                "UNSPSC" => "",
                "contractorType" => "",
                "brandName" => "",
                "vacuumAir" => "",
                "rollSlideFixed" => "",
                "primaryVoltage" => "",
                "amps" => "",
                "desc" => '',
                "additionalKeywords" => "",
                "price" => "",
                "shippingWeight" => "",
                "image" => ""
            ],
        ]);
    }
}
