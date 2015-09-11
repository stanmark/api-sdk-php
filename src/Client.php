<?php

namespace Hitmeister\Component\Api;

use Hitmeister\Component\Api\Transport\Transport;

/**
 * Class Client
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class Client
{
	const VERSION = 'development';

	/** @var Transport */
	private $transport;

	/**
	 * @param Transport $transport
	 */
	public function __construct(Transport $transport)
	{
		$this->transport = $transport;
	}
}