<?php

namespace Kntnt\GA_Scroll_Tracking;

class Loader {

    public function run() {
        if ( Plugin::option() ) {
            add_action( 'wp_head', [ $this, 'print_tracking_script' ] );
        }
    }

    public function print_tracking_script() {
        Plugin::include_template( 'scroll-depth-tracker.php', [
            'path' => Plugin::plugin_url( "js/scroll-depth-tracker.js" ),
            'settings' => json_encode( [
                'action' => Plugin::option( 'action', __( 'Max time on page', 'kntnt-ga-scroll-tracking' ) ),
                'beacon' => Plugin::option( 'beacon', true ),
                'category' => Plugin::option( 'category', __( 'Page', 'kntnt-ga-scroll-tracking' ) ),
                'debug' => Plugin::option( 'debug', false ),
                'delay' => Plugin::option( 'delay', true ),
                'labelNoScroll' => Plugin::option( 'labelNoScroll', __( 'Did Not Scroll', 'kntnt-ga-scroll-tracking' ) ),
                'labelScroll' => Plugin::option( 'labelScroll', __( 'Did Scroll', 'kntnt-ga-scroll-tracking' ) ),
                'sampleRate' => Plugin::option( 'sampleRate', 100 ),
                'scrollThreshold' => Plugin::option( 'scrollThreshold', 10 ),
                'setPage' => Plugin::option( 'setPage', true ),
                'timeout' => Plugin::option( 'timeout', 300 ),
                'timeThreshold' => Plugin::option( 'timeThreshold', 15 ),
                'metric' => Plugin::option( 'metric', null ) ?: null,
                'maxTimeOnPage' => Plugin::option( 'maxTimeOnPage', 30 ),
            ] ),
        ] );
    }

}
