<?php

/**
 * Title: Integration Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_IntegrationInterfaceTest extends PHPUnit_Framework_TestCase {
	/**
	 * Test
	 */
	public function test() {
		$this->assertTrue( interface_exists( 'Pronamic_WP_Pay_Gateways_IntegrationInterface' ) );
	}
}
