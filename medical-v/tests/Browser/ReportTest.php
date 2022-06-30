<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReportTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group report
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/loginvol')
                    ->type('email','her@gmail.com')
                    ->type('password','herherher')
                    ->visit('/campaignsaya');
        });
    }
}
