<?php
namespace Drahak\Restful;

use Nette\Application\IRouter;
use Nette\Http;

/**
 * IResourceRouter
 * @package Drahak\Restful\Routes
 * @author Drahomír Hanák
 */
interface IResourceRouter extends IRouter
{

	/** Resource methods */
	const GET = 4;
	const POST = 8;
	const PUT = 16;
	const DELETE = 32;
	const HEAD = 64;

	/** Combined resource methods */
	const RESTFUL = 124; // GET | POST | PUT | DELETE | HEAD
	const CRUD = 60; // PUT | GET | POST | DELETE

	/**
	 * Is this route mapped to given method
	 * @param int $method
	 * @return bool
	 */
	public function isMethod($method);

	/**
	 * Get request method flag
	 * @param Http\IRequest $httpRequest
	 * @return string|null
	 */
	public function getMethod(Http\IRequest $httpRequest);

}