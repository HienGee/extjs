<?php
namespace Hien\Extjs;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Extjs
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test($msg = ''){
        $config_arr = $this->config->get('extjs.options');
        return $msg.' hello world';
    }
}