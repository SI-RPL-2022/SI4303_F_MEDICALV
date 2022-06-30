<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MelihatDashboardOrganisasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group dashboardorganisasi
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboardorganisasi')
                    ->assertSee('Dashboard Organisasi');
        });
    }
}
