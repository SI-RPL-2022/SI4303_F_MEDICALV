<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TelusuriCampaignTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group telusuri
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->clickLink('Telusuri Campaign')
                    ->assertSee('Telusuri Campaign');
        });
    }
}
