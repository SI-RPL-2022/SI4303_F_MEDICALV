<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CampaignFavoritTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group campaignfavorit
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->visit('/campaignfavorit')
                    ->assertSee('Campaign Favorit');
        });
    }
}
