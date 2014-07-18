<?php
namespace OdinsHat\FreeAgentApiV2;

use OdinsHat\FreeAgentApiV2\FreeagentApi\Contacts;
use OdinsHat\FreeAgentApiV2\FreeagentApi\Estimates;
use OdinsHat\FreeAgentApiV2\FreeagentApi\Expenses;
use OdinsHat\FreeAgentApiV2\FreeagentApi\Invoices;

/**
 * An API wrapper for the FreeAgent v2 REST API
 * that uses OAuth for authentication of
 * API requests.
 *
 * @author Doug Bromley <doug@tintophat.com>
 * @copyright Doug Bromley
 * @link https://github.com/OdinsHat/PHP-FreeAgent-API-v2
 * @license MIT
 */

class FreeAgentApiV2
{

    /**
     * OAuth client ID
     * @var string
     */
    private $identifier;

    /**
     * OAuth client secret
     * @var string
     */
    private $secret;

    /**
     * OAuth access token
     * @var string
     */
    private $token;

    /**
     * The refresh value sent back by OAuth
     * @var int
     */
    private $refresh;

    /**
     * The client user agent string to use
     * @var string
     */
    private $user_agent = 'PHP-FreeAgent-API-v2 (https://github.com/OdinsHat/PHP-FreeAgent-API-v2)';

    /**
     * FreeAgent's OAuth Authorization Endpoint
     * @var string
     */
    private $oauth_auth_endpoint = 'https://api.freeagent.com/v2/approve_app';

    /**
     * FreeAgent OAuth Token Endpoint
     * @var string
     */
    private $oauth_token_endpoint = 'https://api.freeagent.com/v2/token_endpoint';

    /**
     * Base API URL endpoint
     * @var string
     */
    private $base_api_url = 'https://api.freeagent.com/v2/';


    public function __construct()
    {

    }

    public function refreshToken()
    {

    }

    public function loadToken()
    {

    }

    public function writeToken()
    {

    }

    public function get($type, $id)
    {

    }

    public function post($type, $id, $data)
    {

    }

    public function put($type, $id, $data)
    {

    }

    public function delete($type, $id)
    {

    }
}
