<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class JadikanFavoritTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group jadifavorit
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/telusuricampaign')
                    ->press('Jadikan Favorit')
                    ->assertSee('dijadikan favorit!');
        });
    }
}
