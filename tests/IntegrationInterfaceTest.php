<?php

namespace Pronamic\WordPress\Pay\Gateways\Common;

use PHPUnit_Framework_TestCase;

/**
 * Title: Integration Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 * @since 1.0.0
 */
class IntegrationInterfaceTest extends PHPUnit_Framework_TestCase {
	/**
	 * Test
	 */
	public function test() {
		$this->assertTrue( interface_exists( __NAMESPACE__ . '\IntegrationInterface' ) );
	}
}
