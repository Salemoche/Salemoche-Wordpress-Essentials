<?php

/**
 * Register Block Class
 * 
 * @package Salemoche Blocks
 */

class SalemocheGrid {

    function __construct() {
        if (SHOW_SM_GRID) {
            $this->createGrid();
        }
    }

    public function createGrid () {
        echo '
            <div class="sm-grid sm-row">
                <div class="sm-block">
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                    <div class="sm-col sm-small-1 sm-medium-1 sm-large-1">
                        I am a column
                    </div>
                </div>
            </div>
        ';
    }

}

new SalemocheGrid();