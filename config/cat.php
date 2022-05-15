<?php

return [
    'parts' => [
        'head' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'light',
                'hue' => ['monochrome', 'orange', 'yellow']
            ],
            'variations' => [
                [
                    [11, 1, 2, 1],
                    [10, 2, 3, 1],
                    [4, 1, 2, 1],
                    [4, 2, 3, 1],
                    [4, 8, 4, 1],
                    [3, 10, 5, 2],
                    [2, 12, 7, 3]
                ]
            ]
        ],
        'spot' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'light',
                'hue' => 'monochrome'
            ],
            'variations' => [
                [
                    [3, 10, 10, 1],
                    [4, 8, 11, 1],
                    [5, 6, 12, 1],
                    [5, 6, 9, 1]
                ],
                [
                    [3, 10, 10, 1],
                    [4, 8, 11, 1],
                    [5, 6, 12, 1],
                    [5, 6, 9, 1],
                    [3, 1, 5, 2],
                    [4, 1, 2, 4],
                    [5, 1, 3, 3],
                    [6, 1, 4, 1]
                ],
                [
                    [3, 10, 10, 1],
                    [4, 8, 11, 1],
                    [5, 6, 12, 1],
                    [5, 6, 9, 1],
                    [12, 1, 5, 2],
                    [11, 1, 2, 4],
                    [10, 1, 3, 3],
                    [9, 1, 4, 1]
                ],
            ]
        ],
        'ears' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'light',
                'hue' => ['monochrome', 'pink']
            ],
            'variations' => [[
                [4, 2, 4, 2],
                [11, 2, 4, 2]
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
                    [6, 1, 8, 2],
                    [6, 2, 9, 1],
                    [10, 1, 8, 2],
                    [10, 2, 9, 1]
                ],
                [
                    [5, 3, 9, 1],
                    [10, 3, 9, 1]
                ],
            ]
        ],
        'nose' => [
            'colors' => [
                'format' => 'rgb',
                'luminosity' => 'light',
                'hue' => 'pink'
            ],
            'variations' => [
                [
                    [8, 2, 10, 2],
                    [7, 2, 11, 1],
                    [9, 2, 11, 1]
                ],
                [
                    [9, 2, 10, 2],
                    [8, 2, 11, 1]
                ]
            ]
        ]
    ],
    'small_parts' => ['eyes', 'nose', 'ears']
];
