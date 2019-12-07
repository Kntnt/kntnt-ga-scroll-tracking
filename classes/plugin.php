<?php

namespace Kntnt\GA_Scroll_Tracking;

class Plugin extends Abstract_Plugin {

    public function classes_to_load() {
        return [
            'admin' => [
                'init' => [
                    'Settings',
                ],
            ],
            'public' => [
                'init' => [
                    'Loader',
                ],
            ],
        ];
    }

}
