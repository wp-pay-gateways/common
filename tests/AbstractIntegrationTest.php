<?php

namespace Pronamic\WordPress\Pay\Gateways\Common;

use PHPUnit_Framework_TestCase;

/**
 * Title: Abstract Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 2.0.0
 * @since 1.0.0
 */
class AbstractIntegrationTest extends PHPUnit_Framework_TestCase {
	/**
	 * Test get ID function
	 */
	public function test_get_id() {
		$integration = $this->getMockForAbstractClass( __NAMESPACE__ . '\AbstractIntegration' );
		$integration->set_id( 'test-id' );

		$this->assertEquals( 'test-id', $integration->get_id() );
	}

	/**
	 * Test get name function
	 */
	public function test_get_name() {
		$integration = $this->getMockForAbstractClass( __NAMESPACE__ . '\AbstractIntegration' );
		$integration->set_name( 'Test Name' );

		$this->assertEquals( 'Test Name', $integration->get_name() );
	}
}
