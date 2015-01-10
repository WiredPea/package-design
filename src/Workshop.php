<?php
/**
 * Created by PhpStorm.
 * User: noe
 * Date: 10/01/15
 * Time: 14:22
 */

namespace WiredPea\PackageDesign;


class Workshop {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function name() {
        return $this->name;
    }
}
