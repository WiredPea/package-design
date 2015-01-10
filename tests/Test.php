<?php
/**
 * Created by PhpStorm.
 * User: noe
 * Date: 10/01/15
 * Time: 14:20
 */

namespace WiredPea\PackageDesign;

use \WiredPea\PackageDesign\Workshop;

class Test extends \PHPUnit_Framework_TestCase {
    public function test_it_has_a_name() {
        $workshop = new Workshop("John");
        $this->assertSame('John', $workshop->name(), "Test succeeded");
    }
}
