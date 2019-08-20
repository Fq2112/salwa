<?php

use Illuminate\Database\Seeder;

class BusinessSectors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \App\Models\BusinessSectors::create([
            'icon' => 'flaticon-oil-platform',
            'name' => 'Oil & Gas',
            'description' => '<p>There are 3 (three) main sectors in Oil & Gas to support the industry and future prospects.</p><ol><li>Upstream = E&P (exploration and production)</li><li>Midstream = Transportation</li><li>Downstream = Refining</li></ol>',
            'segments' => '<p><b>SALWA ENGINEERING</b> focus on number 3 (Refining), with the following segments:</p><ol><li>Oil Refinery</li><li>Tank Farm</li><li>CNG, LNG, LPG Plant</li></ol>',
            'uri' => 'oil-gas',
            'banner' => $faker->imageUrl(1920,400),
            'image' => $faker->imageUrl(),
        ]);

        \App\Models\BusinessSectors::create([
            'icon' => 'flaticon-refinery',
            'name' => 'Petrochemical',
            'description' => '<p>Petrochemicals is a chemical industry that cannot be separated from the Oil & Gas sector, because the materials used are from the process of oil and natural gas. The chemical industry is divided into 3 (three) sectors:</p><ol><li>Upstream Industry = Processing basic materials (primer)</li><li>Intermediate Industry = Processing of intermediate materials</li><li>Downstream Industry = Processing of finished materials</li></ol>',
            'segments' => '<p>There are 3 (three) raw materials used in the Petrochemical (Olivine, Aromatic, Syn-Gas), and <b>SALWA ENGINEERING</b> industries focus on the three of them, with the following segments:</p><ol><li>Chemical & Petrochemical Plant</li><li>Aromatic & Extraction Refinery Plant</li></ol>',
            'uri' => 'petrochemical',
            'banner' => $faker->imageUrl(1920,400),
            'image' => $faker->imageUrl(),
        ]);

        \App\Models\BusinessSectors::create([
            'icon' => 'flaticon-manufacture',
            'name' => 'Industrial & Manufacture',
            'description' => '<p>Industries that produce or convert raw materials, components or other parts into finished materials.</p>',
            'segments' => '<p><b>SALWA ENGINEERING</b>, focus on all the following segments:</p><ol><li>Palm Oil Plant</li><li>Food & Baverage Industry</li><li>Automotive & Industrial Lubricant</li><li>Paper Mill Industry</li><li>Feed Industry</li><li>Steel Industry</li><li>Cement Industry</li><li>Small Industry</li></ol>',
            'uri' => 'industrial-manufacture',
            'banner' => $faker->imageUrl(1920,400),
            'image' => $faker->imageUrl(),
        ]);

        \App\Models\BusinessSectors::create([
            'icon' => 'flaticon-power-plant',
            'name' => 'Power Plant',
            'description' => '<p>In essence, the most important thing in power plant is the <b>Generator</b>, a rotating machine that converts mechanical energy into electrical energy, the type depends on the material and its driving force.</p>',
            'segments' => '<p><b>SALWA ENGINEERING</b>, focus on all the following segments:</p><ol><li>Biomass Power Generation</li><li>Micro-Hydro Power Generation</li><li>Hydro Power Plant</li><li>Geothermal Power Plant</li><li>Gas Turbine Power Plant</li><li>Steam Coal Power Plant</li></ol>',
            'uri' => 'power-plant',
            'banner' => $faker->imageUrl(1920,400),
            'image' => $faker->imageUrl(),
        ]);

        \App\Models\BusinessSectors::create([
            'icon' => 'flaticon-mining-industry',
            'name' => 'Mining',
            'description' => '<p>Activities that explore and exploit minerals present in the earth. In this sector, we\'re only make mining construction and refining smelter plant.</p>',
            'segments' => '<p><b>SALWA ENGINEERING</b>, focus on all the following segments:</p><ol><li>Gold Mining</li><li>Nickel Mining</li><li>Steel Mining</li><li>Coal Mining</li><li>Small Mining</li></ol>',
            'uri' => 'mining',
            'banner' => $faker->imageUrl(1920,400),
            'image' => $faker->imageUrl(),
        ]);

        \App\Models\BusinessSectors::create([
            'icon' => 'flaticon-hook',
            'name' => 'Infrastructure & Property',
            'description' => '<p>Until this very moment and in the future, it will be very necessary to develop an area that is the main target, therefore we\'re also exist to serve and handle this sector.</p>',
            'segments' => '<p><b>SALWA ENGINEERING</b>, focus on all the following segments:</p><ol><li>Industrial Estate</li><li>Public & Private Estate</li><li>Facility & Public Building</li><li>Airport & Seaport, Jetty</li><li>Drainage & Hydrology</li></ol>',
            'uri' => 'infrastructure-property',
            'banner' => $faker->imageUrl(1920,400),
            'image' => $faker->imageUrl(),
        ]);
    }
}

