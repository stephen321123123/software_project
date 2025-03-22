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
        Organisation::insert([
            [
                'name' => 'Coillte',
                'description' => "Coillte, Ireland’s semi-state forestry company, is responsible for managing 440,000 hectares of primarily forested lands. It is the nation’s largest forester and producer of certified wood, a natural, renewable and sustainable resource. Coillte is also the largest provider of outdoor recreation space in Ireland, it enables wind-energy on the estate, processes forestry by-products and undertakes nature rehabilitation projects of scale. Coillte delivers the multiple benefits of forestry, including forests for climate, for nature, for wood and for people. Coillte is part of a wider forestry sector, that together manages approximately 11% of Ireland's land, supports 12,000 jobs and contributes €2.3bn to the economy annually.",
                'url' => 'https://www.coillte.ie/',
                'organisation_type' => 'Forestry',
                'contact' => '818367378',
                'email' => 'info@coillte.ie',
            ],
            [
                'name' => 'Pocket Forests',
                'description' => "Pocket Forests is a social enterprise, accelerating social change through the power of people and plants. Pocket Forests was set up in Dublin in 2020 by Ashe Conrad-Jones and Catherine Cleary. It's our very own method of planting native trees, shrubs and groundcover plants in small urban areas. We follow some of the Miyawaki technique. Akira Miyawaki was a Japanese botanist who pioneered a technique for growing a forest of native trees, with dense, mixed native planting which mimics the layers of a natural forest.",
                'url' => 'https://www.pocketforests.ie/',
                'organisation_type' => 'Forestry',
                'contact' => null,
                'email' => 'info@pocketforests.ie',
            ],
            [
                'name' => 'Irish Wildlife Trust',
                'description' => "The Irish Wildlife Trust’s vision is an Ireland where wild nature thrives, and society enjoys the benefits of coexisting with diverse, functioning ecosystems. The Irish Wildlife Trust’s mission is to protect and restore biodiversity in Ireland by motivating and supporting people to take action for nature. We aim to achieve this through assertive advocacy, inspirational rewilding, and building empowered communities for nature.",
                'url' => 'https://iwt.ie/',
                'organisation_type' => 'Forestry',
                'contact' => '01 445 7259',
                'email' => 'info@iwt.ie',
            ],
            [
                'name' => 'Kildare Wildlife Rescue',
                'description' => "We are a volunteer-run charity organisation dedicated to the rescue, rehabilitation, and return of injured, sick and orphaned wildlife in Kildare and beyond. Our dedicated team of over 100 volunteers work hard to minimise the suffering of Ireland’s wildlife. Our aim is always to return animals in our care to the wild.",
                'url' => 'https://www.kwr.ie/',
                'organisation_type' => 'Wildlife',
                'contact' => null,
                'email' => 'info@kwr.ie',
            ],
            [
                'name' => 'National Parks & Wildlife Service',
                'description' => "To secure the conservation of a representative range of ecosystems to maintain and enhance populations of flora and fauna in Ireland. To designate and advise on the protection of habitats and species identified for nature conservation (Natural Heritage Areas (NHA), Special Areas of Conservation (SAC) and Special Protection Areas (SPA) having particular regard to the need to consult with interested parties. To make the necessary arrangements for the implementation of National and EU legislation and policies for nature conservation and biodiversity including the EU Habitats and Birds Directives, and for the ratification and implementation of the range of international Conventions and Agreements relating to the natural heritage.",
                'url' => 'https://www.npws.ie/',
                'organisation_type' => 'Forestry/Wildlife',
                'contact' => '01 888 2000',
                'email' => 'natureconservation@npws.gov.ie',
            ]
        ]);
    }
}
