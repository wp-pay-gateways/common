<?php

/**
 * Title: Abstract Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbstractIntegrationTest extends PHPUnit_Framework_TestCase {
	/**
	 * Test get ID function
	 */
	public function test_get_id() {
		$reflection = new ReflectionClass( 'Pronamic_WP_Pay_Gateways_AbstractIntegration' );

		$property = $reflection->getProperty( 'id' );
		$property->setAccessible( true );

		$integration = $this->getMockForAbstractClass( 'Pronamic_WP_Pay_Gateways_AbstractIntegration' );

		$property->setValue( $integration, 'test-id' );

		$this->assertEquals( 'test-id', $integration->get_id() );
	}

	/**
	 * Test get name function
	 */
	public function test_get_name() {
		$reflection = new ReflectionClass( 'Pronamic_WP_Pay_Gateways_AbstractIntegration' );

		$property = $reflection->getProperty( 'name' );
		$property->setAccessible( true );

		$integration = $this->getMockForAbstractClass( 'Pronamic_WP_Pay_Gateways_AbstractIntegration' );

		$property->setValue( $integration, 'Test Name' );

		$this->assertEquals( 'Test Name', $integration->get_name() );
	}
}
