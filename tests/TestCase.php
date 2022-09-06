<?php

namespace Analyzen\Admin\Tests;

use Analyzen\Admin\Models\User;
use Analyzen\Admin\Models\Admin;
use Analyzen\Admin\Models\Candidate;
use Illuminate\Foundation\Testing\WithFaker;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Laravel\Passport\PassportServiceProvider;
use Analyzen\Admin\ServiceProvider;
use Analyzen\Candidate\ServiceProvider as CandidateServiceProvider;

class TestCase extends OrchestraTestCase
{
    // use WithFaker;

    protected $candidate;

    protected function setUp(): void
    {
        parent::setUp();

        $this->loadLaravelMigrations();
        $this->artisan('migrate')->run();

        $user = User::factory()->create();
        $this->user = $user;
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */

    protected function getEnvironmentSetUp($app)
    {
        $guards = $app['config']->get('auth.guards');

        $guards['api'] = [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ];

        $app['config']->set('auth.guards', $guards);

        $app['config']->set('auth.defaults.guard', 'api');

        $app['config']->set('auth.providers.users.model', User::class);
    }

    protected function getPackageProviders($app)
    {
        return [
            // 'Analyzen\\Candidate\\ServiceProvider',
            'Analyzen\\Auth\\ServiceProvider',
            'Analyzen\\Auth\\AuthServiceProvider',
            PassportServiceProvider::class,
            ServiceProvider::class,
            // CandidateServiceProvider::class,
        ];
    }
}
