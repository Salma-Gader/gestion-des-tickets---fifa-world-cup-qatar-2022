<?php
$pages = [
    'teams' =>[
        'title' => 'Teams',
        'table' => [
            'columns' => ['ID' ,'NAME' , 'COUNTRY' , 'ACTION'],
            'row' => [
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
    ],
    'stadiums' => [
        'title' => 'Stadiums',
        'table' => [
            'columns' => ['ID' , 'NAME' , 'LOCATION' , 'CAPACITY' , 'ACTION'],
            'row' => [
                [
                    'id' => 1,
                    'image' => "al-bayt.png",
                    'name' => "Al Bayt Stadium",
                    'description' => "Enjoy the warmest of Arab welcomes",
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
        ]
    ],
    'matches' => [
        'title' => 'Matches',
        'table' => [
            'columns' => ['ID' , 'NAME' , 'FIRST TEAM' , 'SECOUND TEAM' , 'DATE' , 'STADIUMS' , 'ACTION'],
            'row' => [
                [
                    'id' => 1,
                    'first_team' => [
                                        'id' => 1,
                                        'image' => "al-bayt.png",
                                        'name' => "Al Bayt Stadium",
                                        'description' => "Enjoy the warmest of Arab welcomes",
                                        'location' => "Al Khor City, 35km north of Doha",
                                        'capacity' => 68,895
                                    ],
                    'secound_team' => [
                                        'id' => 2,
                                        'image' => "lusail.png",
                                        'name' => "Lusail Stadium",
                                        'description' => "Alive with heritage, an icon for the future",
                                        'location' => "Lusail City, 20km north of central Doha",
                                        'capacity' => 88,966
                                    ],
                    'date' => date(rand()),
                    'stadium' =>   [
                                        'id' => 1,
                                        'image' => "al-bayt.png",
                                        'name' => "Al Bayt Stadium",
                                        'description' => "Enjoy the warmest of Arab welcomes",
                                        'location' => "Al Khor City, 35km north of Doha",
                                        'capacity' => 68,895
                                    ],
                ],
            ]
        ]
    ],
    'reservation' => [
        'title' => 'Reservation',
        'table' => [
            'columns' => ['ID' , 'USER NAME' , 'MATCHE' , 'STADIUM' , 'DATE' , 'ACTION'],
            'row' => [
                [
                    'id' => 1,
                    'user' => [
                                'id' => 1,
                                'first_name' => "fahed",
                                'last_name' => "123",
                                'email' => "fahed@gmail.com",
                                'password' => md5("fahed123")
                            ],
                    'matche' => [
                                    'id' => 1,
                                    'first_team' => [
                                                        'id' => 1,
                                                        'image' => "al-bayt.png",
                                                        'name' => "Al Bayt Stadium",
                                                        'description' => "Enjoy the warmest of Arab welcomes",
                                                        'location' => "Al Khor City, 35km north of Doha",
                                                        'capacity' => 68,895
                                                    ],
                                    'secound_team' => [
                                                        'id' => 2,
                                                        'image' => "lusail.png",
                                                        'name' => "Lusail Stadium",
                                                        'description' => "Alive with heritage, an icon for the future",
                                                        'location' => "Lusail City, 20km north of central Doha",
                                                        'capacity' => 88,966
                                                    ],
                                    'date' => date(rand()),
                                    'stadium' =>   [
                                                        'id' => 1,
                                                        'image' => "al-bayt.png",
                                                        'name' => "Al Bayt Stadium",
                                                        'description' => "Enjoy the warmest of Arab welcomes",
                                                        'location' => "Al Khor City, 35km north of Doha",
                                                        'capacity' => 68,895
                                                    ],
                                ],
                    'quantity' => 2,
                    'date' => date(rand()),
                ],
            ]
        ]
    ],
]

?>