<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organisation;
use Carbon\Carbon;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Book::insert([
            ['name' => 'Coillte', 
             'description' => 'Coillte, Irelands semi-state forestry company, is responsible for managing 440,000 hectares of primarily forested lands. It is the nations largest forester and producer of certified wood, a natural, renewable and sustainable resource. Coillte is also the largest provider of outdoor recreation space in Ireland, it enables wind-energy on the estate, processes forestry by-products and undertakes nature rehabilitation projects of scale. Coillte delivers the multiple benefits of forestry, including forests for climate, for nature, for wood and for people
              Coillte is part of a wider forestry sector, that together manages approximately 11% of Irelands land, supports 12,000 jobs and contributes €2.3bn to the economy annually.',
              'website_url' => 'https://www.coillte.ie/',
              'organization_type' => 'Forestry',
              'contact' => '0818 367 378',
              'email' => 'info@coillte.ie',
              'created_at' => $currentTimestamp,
              'updated_at' => $currentTimestamp],

              ['name' => 'Coillte', 
             'description' => 'Coillte, Irelands semi-state forestry company, is responsible for managing 440,000 hectares of primarily forested lands. It is the nations largest forester and producer of certified wood, a natural, renewable and sustainable resource. Coillte is also the largest provider of outdoor recreation space in Ireland, it enables wind-energy on the estate, processes forestry by-products and undertakes nature rehabilitation projects of scale. Coillte delivers the multiple benefits of forestry, including forests for climate, for nature, for wood and for people
              Coillte is part of a wider forestry sector, that together manages approximately 11% of Irelands land, supports 12,000 jobs and contributes €2.3bn to the economy annually.',
              'website_url' => 'https://www.coillte.ie/',
              'organization_type' => 'Forestry',
              'contact' => '0818 367 378',
              'email' => 'info@coillte.ie',
              'created_at' => $currentTimestamp,
              'updated_at' => $currentTimestamp],

              ['name' => 'Coillte', 
             'description' => 'Coillte, Irelands semi-state forestry company, is responsible for managing 440,000 hectares of primarily forested lands. It is the nations largest forester and producer of certified wood, a natural, renewable and sustainable resource. Coillte is also the largest provider of outdoor recreation space in Ireland, it enables wind-energy on the estate, processes forestry by-products and undertakes nature rehabilitation projects of scale. Coillte delivers the multiple benefits of forestry, including forests for climate, for nature, for wood and for people
              Coillte is part of a wider forestry sector, that together manages approximately 11% of Irelands land, supports 12,000 jobs and contributes €2.3bn to the economy annually.',
              'website_url' => 'https://www.coillte.ie/',
              'organization_type' => 'Forestry',
              'contact' => '0818 367 378',
              'email' => 'info@coillte.ie',
              'created_at' => $currentTimestamp,
              'updated_at' => $currentTimestamp],

              ['name' => 'Coillte', 
             'description' => 'Coillte, Irelands semi-state forestry company, is responsible for managing 440,000 hectares of primarily forested lands. It is the nations largest forester and producer of certified wood, a natural, renewable and sustainable resource. Coillte is also the largest provider of outdoor recreation space in Ireland, it enables wind-energy on the estate, processes forestry by-products and undertakes nature rehabilitation projects of scale. Coillte delivers the multiple benefits of forestry, including forests for climate, for nature, for wood and for people
              Coillte is part of a wider forestry sector, that together manages approximately 11% of Irelands land, supports 12,000 jobs and contributes €2.3bn to the economy annually.',
              'website_url' => 'https://www.coillte.ie/',
              'organization_type' => 'Forestry',
              'contact' => '0818 367 378',
              'email' => 'info@coillte.ie',
              'created_at' => $currentTimestamp,
              'updated_at' => $currentTimestamp],

              ['name' => 'Coillte', 
             'description' => 'Coillte, Irelands semi-state forestry company, is responsible for managing 440,000 hectares of primarily forested lands. It is the nations largest forester and producer of certified wood, a natural, renewable and sustainable resource. Coillte is also the largest provider of outdoor recreation space in Ireland, it enables wind-energy on the estate, processes forestry by-products and undertakes nature rehabilitation projects of scale. Coillte delivers the multiple benefits of forestry, including forests for climate, for nature, for wood and for people
              Coillte is part of a wider forestry sector, that together manages approximately 11% of Irelands land, supports 12,000 jobs and contributes €2.3bn to the economy annually.',
              'website_url' => 'https://www.coillte.ie/',
              'organization_type' => 'Forestry',
              'contact' => '0818 367 378',
              'email' => 'info@coillte.ie',
              'cre  ated_at' => $currentTimestamp,
                    'updated_at' => $currentTimestamp]
             
              

        ]);
    }
}

        
