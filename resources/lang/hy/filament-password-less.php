<?php

return [
    'login' => [
        'fields' => [
            'email' => [
                'label' => 'Էլ. հասցե'
            ],
        ],

        'messages' => [
            'passphrase_sent' => 'Մենք անցաբառ ուղարկել ենք ձեր էլ. փոստի հասցեին՝ մուտք գործելու համար:',
            'magic_link_sent' => 'Մենք հաղորդագրություն ենք ուղարկել ձեր էլ. փոստի հասցեին՝ մուտք գործելու համար:'
        ],
    ],

    'confirm' => [
        'fields' => [
            'passphrase' => [
                'label' => 'Անցաբառ'
            ],
        ],

        'buttons' => [
            'confirm' => [
                'label' => 'Հաստատել'
            ],
            'resend' => [
                'help_text' => 'Էլ. փոստ չե՞ք ստանում:',
                'label' => 'Նորից ուղարկել անցաբառը'
            ]
        ],

        'messages' => [
            'passphrase_resent' => 'Մենք նորից ուղարկել ենք անցաբառը ձեր էլ. փոստին, խնդրում ենք ստուգել:',
        ],
    ]
];
