<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddCampaignTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @group AddCampaign
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/addcampaign')
                    ->assertSee('Mulai Campaign')
                    ->press('Buat Campaign');
        });
    }
}
