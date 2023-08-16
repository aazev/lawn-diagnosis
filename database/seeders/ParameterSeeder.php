<?php

namespace Database\Seeders;

use App\Models\Parameter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parameters = [
            [
                'name' => 'Soil Moisture Level',
                'possible_values' => [
                    [
                        'value' => 'Low',
                        'score' => 90,
                        'recommendation' => 'Water your lawn'
                    ],
                    [
                        'value' => 'Medium',
                        'score' => 30,
                        'recommendation' => 'Moisture doesn\'t seem to be a problem'
                    ],
                    [
                        'value' => 'High',
                        'score' => 10,
                        'recommendation' => 'Ok, maybe less watering next time'
                    ],
                ],
            ],
            [
                'name' => 'Days Since Last Watering',
                'possible_values' => [
                    [
                        'value' => '0-3',
                        'score' => 10,
                        'recommendation' => 'Watering frequency seems fine'
                    ],
                    [
                        'value' => '4-7',
                        'score' => 30,
                        'recommendation' => 'You should water your lawn a bit more often',
                    ],
                    [
                        'value' => '8-14',
                        'score' => 60,
                        'recommendation' => 'You should water your lawn more often',
                    ],
                    [
                        'value' => '15+',
                        'score' => 90,
                        'recommendation' => 'Plants need water to live, go water your lawn',
                    ]
                ]
            ],
            [
                'name' => 'Presence of Dry Patches',
                'possible_values' => [
                    [
                        'value' => 'Yes',
                        'score' => 90,
                        'recommendation' => 'Make sure to evenly water your lawn'
                    ],
                    [
                        'value' => 'No',
                        'score' => 0,
                        'recommendation' => 'Good job, seems like you\'re watering your lawn evenly'
                    ]
                ]
            ],
            [
                'name' => 'Types of Insects Seen',
                'possible_values' => [
                    [
                        'value' => 'Aphids',
                        'score' => 10,
                        'recommendation' => 'Aphids are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'Grubs',
                        'score' => 30,
                        'recommendation' => 'Grubs can cause serious damage to your lawn, you should take action'
                    ],
                    [
                        'value' => 'Whiteflies',
                        'score' => 30,
                        'recommendation' => 'Whiteflies can cause serious damage to your lawn, you should take action'
                    ]
                ],
                'allow_multiple' => true
            ],
            [
                'name' => 'Severity of Damage',
                'possible_values' => [
                    [
                        'value' => 'Low',
                        'score' => 10,
                        'recommendation' => 'Damage doesn\'t seem to be a problem'
                    ],
                    [
                        'value' => 'Medium',
                        'score' => 30,
                        'recommendation' => 'Damage is starting to be a problem, you should take action'
                    ],
                    [
                        'value' => 'High',
                        'score' => 90,
                        'recommendation' => 'Damage is a big problem, you should take action'
                    ],
                ],
            ],
            [
                'name' => 'Type of Weeds',
                'possible_values' => [
                    [
                        'value' => 'dandelion',
                        'score' => 10,
                        'recommendation' => 'Dandelions are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'clover',
                        'score' => 10,
                        'recommendation' => 'Clovers are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'crabgrass',
                        'score' => 10,
                        'recommendation' => 'Crabgrass is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'quackgrass',
                        'score' => 30,
                        'recommendation' => 'Quackgrass can cause serious damage to your lawn, you should take action'
                    ]
                ],
                'allow_multiple' => true
            ],
            [
                'name' => 'Coverage',
                'possible_values' => [
                    [
                        'value' => 'isolated patches',
                        'score' => 20,
                        'recommendation' => 'Weeds are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'widespread',
                        'score' => 90,
                        'recommendation' => 'Weeds are a big problem, you should take action'
                    ]
                ]
            ],
            [
                'name' => 'Affected Area',
                'possible_values' => [
                    [
                        'value' => 'small patches',
                        'score' => 10,
                        'recommendation' => 'Small areas aren\'t a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'half of the lawn',
                        'score' => 50,
                        'recommendation' => 'Half of the lawn is a big problem, you should take action'
                    ],
                    [
                        'value' => 'entire lawn',
                        'score' => 100,
                        'recommendation' => 'The entire lawn is a big problem, you should take action'
                    ],
                ]
            ],
            [
                'name' => 'Type of Pests',
                'possible_values' => [
                    [
                        'value' => 'moles',
                        'score' => 15,
                        'recommendation' => 'Moles are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'voles',
                        'score' => 15,
                        'recommendation' => 'Voles are not a big problem, but you should keep an eye on them'

                    ],
                    [
                        'value' => 'lawn shrimp',
                        'score' => 15,
                        'recommendation' => 'Lawn shrimp are not a big problem, but you should keep an eye on them'

                    ],
                    [
                        'value' => 'earthworms',
                        'score' => 15,
                        'recommendation' => 'Earthworms are not a big problem, but you should keep an eye on them'
                    ],
                ],
                'allow_multiple' => true
            ],
            [
                'name' => 'Compaction Level',
                'possible_values' => [
                    [
                        'value' => 'light',
                        'score' => 5,
                        'recommendation' => 'Compaction doesn\'t seem to be a problem'
                    ],
                    [
                        'value' => 'moderate',
                        'score' => 25,
                        'recommendation' => 'Compaction is starting to be a problem, you should take action'
                    ],
                    [
                        'value' => 'severe',
                        'score' => 60,
                        'recommendation' => 'Compaction is a big problem, you should take action'
                    ],
                ]
            ],
            [
                'name' => 'Type of Discoloration',
                'possible_values' => [
                    [
                        'value' => 'yellow patches',
                        'score' => 10,
                        'recommendation' => 'Yellow patches are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'brown patches',
                        'score' => 20,
                        'recommendation' => 'Brown patches are not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => 'reddish-brown',
                        'score' => 40,
                        'recommendation' => 'Reddish-brown patches are starting to be a problem, you should take action'
                    ],
                ]
            ],
            [
                'name' => 'Type of Fungus',
                'possible_values' => [
                    [
                        'value' => "Powdery Mildew",
                        'score' => 5,
                        'recommendation' => 'Powdery Mildew is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Brown Patch",
                        'score' => 15,
                        'recommendation' => 'Brown Patch is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Dollar Spot",
                        'score' => 10,
                        'recommendation' => 'Dollar Spot is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Fairy Ring",
                        'score' => 8,
                        'recommendation' => 'Fairy Ring is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Fusarium Blight",
                        'score' => 25,
                        'recommendation' => 'Fusarium Blight is starting to be a problem, you should take action'
                    ],
                    [
                        'value' => "Leaf Spot",
                        'score' => 2,
                        'recommendation' => 'Leaf Spot is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Necrotic Ring Spot",
                        'score' => 35,
                        'recommendation' => 'Necrotic Ring Spot is starting to be a problem, you should take action'
                    ],
                    [
                        'value' => "Pythium Blight",
                        'score' => 45,
                        'recommendation' => 'Pythium Blight is a big problem, you should take action'
                    ],
                    [
                        'value' => "Red Thread",
                        'score' => 20,
                        'recommendation' => 'Red Thread is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Rust",
                        'score' => 40,
                        'recommendation' => 'Rust is a big problem, you should take action'
                    ],
                    [
                        'value' => "Slime Mold",
                        'score' => 60,
                        'recommendation' => 'Slime Mold is a big problem, you should take action'
                    ],
                    [
                        'value' => "Snow Mold",
                        'score' => 20,
                        'recommendation' => 'Snow Mold is not a big problem, but you should keep an eye on them'
                    ],
                    [
                        'value' => "Summer Patch",
                        'score' => 35,
                        'recommendation' => 'Summer Patch is starting to be a problem, you should take action'
                    ],
                    [
                        'value' => "Take-All Patch",
                        'score' => 80,
                        'recommendation' => 'Take-All Patch is a big problem, you should take action'
                    ],
                ],
                'allow_multiple' => true
            ],
            [
                'name' => 'Growth Rate',
                'possible_values' => [
                    [
                        'value' => 'slow',
                        'score' => 10,
                        'recommendation' => 'Fungal growth doesn\'t seem to be a problem'
                    ],
                    [
                        'value' => 'moderate',
                        'score' => 30,
                        'recommendation' => 'Fungal growth is starting to be a problem, you should take action'
                    ],
                    [
                        'value' => 'fast',
                        'score' => 80,
                        'recommendation' => 'Fungal growth is a big problem, you should take action'
                    ],
                ]
            ],
            [
                'name' => 'Leaf Texture',
                'possible_values' => [
                    [
                        'value' => 'normal',
                        'score' => 0,
                        'recommendation' => ''
                    ],
                    [
                        'value' => 'brittle',
                        'score' => 15,
                        'recommendation' => 'Brittle leaves might indicate a problem with hidration'
                    ],
                    [
                        'value' => 'waxy',
                        'score' => 25,
                        'recommendation' => 'Waxy leaves might indicate a problem with fungae'
                    ],
                ]
            ],
            [
                'name' => 'Moss Growth',
                'possible_values' => [
                    [
                        'value' => 'Yes',
                        'score' => 90,
                        'recommendation' => 'Moss growth is a big problem, you should take action'
                    ],
                    [
                        'value' => 'No',
                        'score' => 0,
                        'recommendation' => ''
                    ],
                ]
            ],
        ];

        foreach ($parameters as $parameter) {
            Parameter::create($parameter);
        }
    }
}
