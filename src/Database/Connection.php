<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://laravel-tenancy.com
 * @see https://github.com/hyn/multi-tenant
 */

namespace Cmarsiglia\TenantCore\Database;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Config\Repository as Config;

class Connection
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @var Dispatcher
     */
    protected $events;

    /**
     * @var ConnectionResolverInterface
     */
    protected $connection;

    /**
     * @var DatabaseManager
     */
    private $db;

    /**
     * @var Kernel
     */
    protected $artisan;

    /**
     * Connection constructor.
     * @param Config $config
     * @param DatabaseManager $db
     * @param Kernel $artisan
     */
    public function __construct(
        Config $config,
        DatabaseManager $db,
        Kernel $artisan
    ) {
        $this->config = $config;
        $this->db = $db;
        $this->artisan = $artisan;

        $this->enforceDefaultConnection();
    }

    protected function enforceDefaultConnection()
    {
        if ($default = $this->config->get('tenantcore.tenant')) {
            $this->config->set('database.default', $default);
        }
    }




}
