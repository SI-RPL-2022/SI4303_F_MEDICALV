<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MenambahkanOranisasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group menambahkanorganisasi
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/kategori/campaign')
                    ->assertSee('Kategori')
                    ->click('Tambahkan Kategori');
                    
        });
    }
}

