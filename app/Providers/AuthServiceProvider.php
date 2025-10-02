<?php

namespace App\Providers;

use App\Models\Credential;
use App\Models\Execution;
use App\Models\Workflow;
use App\Policies\CredentialPolicy;
use App\Policies\ExecutionPolicy;
use App\Policies\WorkflowPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Workflow::class => WorkflowPolicy::class,
        Execution::class => ExecutionPolicy::class,
        Credential::class => CredentialPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
    }
}
