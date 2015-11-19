<?php

/**
 * Title: Abstract Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 * @see https://github.com/thephpleague/omnipay-common/blob/master/src/Omnipay/Common/AbstractGateway.php
 */
abstract class Pronamic_WP_Pay_Gateways_AbstractIntegration implements Pronamic_WP_Pay_Gateways_IntegrationInterface {
	protected $id;

	protected $name;

	public function get_id() {
		return $this->id;
	}

	public function get_name() {
		return $this->name;
	}
}
