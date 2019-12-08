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

        $fields["message"] = [
            'type' => 'html',
            'label' => __( "WARNING", 'kntnt-ga-scroll-tracking' ),
            'html' => sprintf( __( 'These settings are only for advanced users who are familiar with the settings of <a href="%s" target="_blank" rel="noopener">Chris Goddard\'s code</a>.', 'kntnt-ga-scroll-tracking' ), 'https://chrisgoddard.blog/2016/05/10/building-a-better-scroll-depth-tracking-plugin-for-google-analytics/' ),
        ];

        $fields["action"] = [
            'type' => 'text',
            'label' => __( "Action", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'Pageview End' ),
        ];

        $fields["beacon"] = [
            'type' => 'select',
            'label' => __( "Beacon", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'true' ),
            'options' => [
                - 1 => '',
                0 => 'false',
                1 => 'true',
            ],
            'filter-after' => function ( $val ) { return ( - 1 == $val ) ? '' : $val; },
            'filter-before' => function ( $val ) { return ( '' == $val ) ? - 1 : $val; },
        ];

        $fields["category"] = [
            'type' => 'text',
            'label' => __( "Category", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'Page' ),
        ];

        $fields["debug"] = [
            'type' => 'select',
            'label' => __( "Debug", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'false' ),
            'options' => [
                - 1 => '',
                0 => 'false',
                1 => 'true',
            ],
            'filter-after' => function ( $val ) { return ( - 1 == $val ) ? '' : $val; },
            'filter-before' => function ( $val ) { return ( '' == $val ) ? - 1 : $val; },
        ];

        $fields["delay"] = [
            'type' => 'select',
            'label' => __( "Delay", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'true' ),
            'options' => [
                - 1 => '',
                0 => 'false',
                1 => 'true',
            ],
            'filter-after' => function ( $val ) { return ( - 1 == $val ) ? '' : $val; },
            'filter-before' => function ( $val ) { return ( '' == $val ) ? - 1 : $val; },
        ];

        $fields["labelNoScroll"] = [
            'type' => 'text',
            'label' => __( "No Scroll Label", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'Did not scroll' ),
        ];

        $fields["labelScroll"] = [
            'type' => 'text',
            'label' => __( "Scroll Label", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'Did scroll' ),
        ];

        $fields["sampleRate"] = [
            'type' => 'integer',
            'label' => __( "Sample Rate", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), '100' ),
        ];

        $fields["scrollThreshold"] = [
            'type' => 'text',
            'label' => __( "Scroll Threshold", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'max' => 100,
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), '10' ),
        ];

        $fields["setPage"] = [
            'type' => 'select',
            'label' => __( "Set Page", 'kntnt-ga-scroll-tracking' ),
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'true' ),
            'options' => [
                - 1 => '',
                0 => 'false',
                1 => 'true',
            ],
            'filter-after' => function ( $val ) { return ( - 1 == $val ) ? '' : $val; },
            'filter-before' => function ( $val ) { return ( '' == $val ) ? - 1 : $val; },
        ];

        $fields["timeout"] = [
            'type' => 'integer',
            'label' => __( "Timeout", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), '300' ),
        ];

        $fields["timeThreshold"] = [
            'type' => 'integer',
            'label' => __( "Time Threshold", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), '15' ),
        ];

        $fields["metric"] = [
            'type' => 'select',
            'label' => __( "Metric", 'kntnt-ga-scroll-tracking' ),
            'options' => [
                0 => '',
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
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), 'None' ),
        ];

        $fields["maxTimeOnPage"] = [
            'type' => 'integer',
            'label' => __( "Max Time on Page", 'kntnt-ga-scroll-tracking' ),
            'min' => 0,
            'description' => sprintf( __( 'Leave empty to use the default value: <code>%s</code>', 'kntnt-ga-scroll-tracking' ), '30' ),
        ];

        $fields['submit'] = [
            'type' => 'submit',
        ];


        return $fields;

    }

}
