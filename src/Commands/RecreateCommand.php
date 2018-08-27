<?php

namespace Cmarsiglia\TenantCore\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Kernel;

class RecreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenantCore:recrea';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recreamos la base de datos de cada inquilino con los cambios necesario';


private $kernel;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Kernel $kernel)
    {
        parent::__construct();
        $this->kernel = $kernel;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $this->kernel->call('make:model', ['name' => 'Tenant']);
        $this->info('Tenant, TenantUser, TenantDatabase models created successfully.');
      }

}
