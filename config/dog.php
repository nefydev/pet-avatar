<?php

return [
    'parts' => [
        'head' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'light',
                'hue' => ['monochrome', 'orange']
            ],
            'variations' => [[
                [5, 6, 2, 1],
                [4, 8, 3, 7]
            ]]
        ],
        'spot' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'light',
                'hue' => 'monochrome'
            ],
            'variations' => [
                [
                    [7, 2, 8, 1],
                    [6, 4, 9, 1],
                    [4, 8, 10, 3]
                ],
                [
                    [7, 2, 8, 1],
                    [6, 4, 9, 1],
                    [4, 8, 10, 3],
                    [4, 1, 3, 2],
                    [5, 2, 2, 2],
                    [7, 1, 2, 1]
                ],
                [
                    [7, 2, 8, 1],
                    [6, 4, 9, 1],
                    [4, 8, 10, 3],
                    [11, 1, 3, 2],
                    [9, 2, 2, 2],
                    [8, 1, 2, 1]

                ],
            ]
        ],
        'ears' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'dark',
                'hue' => ['orange', 'monochrome']
            ],
            'variations' => [[
                [3, 1, 4, 9],
                [2, 1, 5, 7],
                [12, 1, 4, 9],
                [13, 1, 5, 7]
            ]]
        ],
        'collar' => [
            'colors' => [
                'format' => 'rgb',
                'hue' => ['random']
            ],
            'variations' => [[
                [5, 6, 13, 1]
            ]]
        ],
        'eyes' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'dark',
                'hue' => 'monochrome'
            ],
            'variations' => [
                [
                    [5, 1, 7, 3],
                    [5, 2, 8, 1],
                    [10, 1, 7, 3],
                    [10, 2, 8, 1]
                ],
                [
                    [5, 3, 8, 1],
                    [10, 3, 8, 1]
                ],
            ]
        ],
        'nose' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'dark',
                'hue' => 'monochrome'
            ],
            'variations' => [
                [[7, 2, 10, 1]]
            ]
        ],
        'mouth' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'dark',
                'hue' => 'red'
            ],
            'variations' => [
                [
                    [6, 2, 11, 2]
                ],
                [
                    [9, 2, 11, 2]
                ]

            ]
        ]
    ],
    'small_parts' => ['eyes', 'mouth']
];
