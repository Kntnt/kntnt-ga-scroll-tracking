<?php

namespace Kntnt\GA_Scroll_Tracking;

class Settings extends Abstract_Settings {

    /**
     * Returns the settings menu title.
     */
    protected function menu_title() {
        return __( 'GA Scroll Tracking', 'kntnt-ga-scroll-tracking' );
    }

    /**
     * Returns the settings page title.
     */
    protected function page_title() {
        return __( "Google Analytics Scroll Tracking", 'kntnt-ga-scroll-tracking' );
    }

    /**
     * Returns all fields used on the settings page.
     */
    protected function fields() {

        $fields["action"] = [
            'type' => 'text',
            'label' => __( "Action", 'kntnt-ga-scroll-tracking' ),
            'default' => 'Pageview End',
        ];

        $fields["beacon"] = [
            'type' => 'checkbox',
            'label' => __( "Beacon", 'kntnt-ga-scroll-tracking' ),
            'default' => true,
        ];

        $fields["category"] = [
            'type' => 'text',
            'label' => __( "Category", 'kntnt-ga-scroll-tracking' ),
            'default' => 'Page',
        ];

        $fields["debug"] = [
            'type' => 'checkbox',
            'label' => __( "Debug", 'kntnt-ga-scroll-tracking' ),
            'default' => false,
        ];

        $fields["delay"] = [
            'type' => 'checkbox',
            'label' => __( "Delay", 'kntnt-ga-scroll-tracking' ),
            'default' => true,
        ];

        $fields["labelNoScroll"] = [
            'type' => 'text',
            'label' => __( "No Scroll label", 'kntnt-ga-scroll-tracking' ),
            'default' => 'Did Not Scroll',
        ];

        $fields["labelScroll"] = [
            'type' => 'text',
            'label' => __( "Scroll label", 'kntnt-ga-scroll-tracking' ),
            'default' => 'Did Scroll',
        ];

        $fields["sampleRate"] = [
            'type' => 'integer',
            'label' => __( "Sample Rate", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'default' => 100,
        ];

        $fields["scrollThreshold"] = [
            'type' => 'text',
            'label' => __( "Scroll Threshold", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'max' => 100,
            'default' => 10,
        ];

        $fields["setPage"] = [
            'type' => 'checkbox',
            'label' => __( "Set Page", 'kntnt-ga-scroll-tracking' ),
            'default' => true,
        ];

        $fields["timeout"] = [
            'type' => 'integer',
            'label' => __( "Timeout", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'default' => 300,
        ];

        $fields["timeThreshold"] = [
            'type' => 'integer',
            'label' => __( "Time threshold", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'default' => 15,
        ];

        $fields["metric"] = [
            'type' => 'select',
            'label' => __( "Metric", 'kntnt-ga-scroll-tracking' ),
            'options' => [
                0 => 'None',
                1 => 'Metrics1',
                2 => 'Metrics2',
                3 => 'Metrics3',
                4 => 'Metrics4',
                5 => 'Metrics5',
                6 => 'Metrics6',
                7 => 'Metrics7',
                8 => 'Metrics8',
                9 => 'Metrics9',
                10 => 'Metrics10',
                11 => 'Metrics11',
                12 => 'Metrics12',
                13 => 'Metrics13',
                14 => 'Metrics14',
                15 => 'Metrics15',
                16 => 'Metrics16',
                17 => 'Metrics17',
                18 => 'Metrics18',
                19 => 'Metrics19',
                20 => 'Metrics20',
            ],
            'default' => 0,
        ];

        $fields["maxTimeOnPage"] = [
            'type' => 'integer',
            'label' => __( "Max time on page", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'default' => 30,
        ];

        $fields['submit'] = [
            'type' => 'submit',
        ];


        return $fields;

    }

}
