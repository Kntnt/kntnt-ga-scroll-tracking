<?php

namespace Kntnt\GA_Scroll_Tracking;

use function The_SEO_Framework\pll__;

class Loader {

    public function run() {
        // The script added by this plugin must come AFTER the Google Analytics script.
        add_action( 'wp_head', [ $this, 'print_tracking_script' ], 99999 );
    }

    public function print_tracking_script() {
        Plugin::include_template( 'scroll-depth-tracker.php', [
            'path' => Plugin::plugin_url( "js/scroll-depth-tracker.js" ),
            'settings' => json_encode( $this->settings() ),
        ] );
    }

    private function settings() {
        $settings = [];
        if ( $action = Plugin::option( 'action' ) ) {
            $settings['action'] = $action;
        }
        if ( $beacon = Plugin::option( 'beacon' ) ) {
            $settings['beacon'] = (bool) $beacon;
        }
        if ( $category = Plugin::option( 'category' ) ) {
            $settings['category'] = $category;
        }
        if ( $debug = Plugin::option( 'debug' ) ) {
            $settings['debug'] = (bool) $debug;
        }
        if ( $delay = Plugin::option( 'delay' ) ) {
            $settings['delay'] = (bool) $delay;
        }
        if ( $labelNoScroll = Plugin::option( 'labelNoScroll' ) ) {
            $settings['labelNoScroll'] = $labelNoScroll;
        }
        if ( $labelScroll = Plugin::option( 'labelScroll' ) ) {
            $settings['labelScroll'] = $labelScroll;
        }
        if ( $sampleRate = Plugin::option( 'sampleRate' ) ) {
            $settings['sampleRate'] = $sampleRate;
        }
        if ( $scrollThreshold = Plugin::option( 'scrollThreshold' ) ) {
            $settings['scrollThreshold'] = $scrollThreshold;
        }
        if ( $setPage = Plugin::option( 'setPage' ) ) {
            $settings['setPage'] = (bool) $setPage;
        }
        if ( $timeout = Plugin::option( 'timeout' ) ) {
            $settings['timeout'] = $timeout;
        }
        if ( $timeThreshold = Plugin::option( 'timeThreshold' ) ) {
            $settings['timeThreshold'] = $timeThreshold;
        }
        if ( $metric = Plugin::option( 'metric' ) ) {
            $settings['metric'] = $metric;
        }
        if ( $maxTimeOnPage = Plugin::option( 'maxTimeOnPage' ) ) {
            $settings['maxTimeOnPage'] = $maxTimeOnPage;
        }
        return $settings;
    }

}
