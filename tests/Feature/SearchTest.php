<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;


class SearchTest extends DuskTestCase
{
    /**
     * A basic feature test example.
     */
    public function testSearch(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'flatley.micah@example.org')
                    ->type('password','password')
                    ->click('button[type="submit"]')
                    ->pause(10000)
                    ->type('input[placeholder="Search Product..."]', 'at')
                    ->select('select[class="form-control col-12 col-md-3 mx-md-1 my-1 my-md-0"]', '5')
                    ->click('a[class="btn btn-secondary btn-circle"]')
                    ->pause(10000)
                    ->assertSee('aspernatur');
        });
    }
}
