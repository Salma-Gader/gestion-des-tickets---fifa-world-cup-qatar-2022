<?php
$tables = [
    'teams' =>[
                'title' => 'Teams',
                'columns' => ['ID' , 'image' ,'NAME' , 'COUNTRY' , 'ACTION'],
                'data' => [
                    [
                        'id' => 1,
                        'image' => "Morocco.png",
                        'name' => "Morocco national football team",
                        'aka' => "The Atlas Lions",
                        'country' => "Morocco",
                    ],
                    [
                        'id' => 2,
                        'image' => "Canada.png",
                        'name' => "Canada men's national soccer team",
                        'aka' => "",
                        'country' => "Canada"
                    ],
                ]
            ],
    'stadiums' => [
                'title' => 'Stadiums',
                'columns' => ['ID' , 'image' , 'NAME' , 'LOCATION' , 'CAPACITY' , 'ACTION'],
                'data' => [
                    [
                        'id' => 1,
                        'image' => "al-bayt.png",
                        'name' => "Al Bayt Stadium",
                        'mini-description' => "Enjoy the warmest of Arab welcomes",
                        'location' => "Al Khor City, 35km north of Doha",
                        'capacity' => 68,895
                    ],
                    [
                        'id' => 2,
                        'image' => "lusail.png",
                        'name' => "Lusail Stadium",
                        'description' => "Alive with heritage, an icon for the future",
                        'location' => "Lusail City, 20km north of central Doha",
                        'capacity' => 88,966
                    ],
                ]
            ],
]

?>