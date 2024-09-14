<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class DeleteTest extends DuskTestCase
{
    /**
     * A basic feature test example.
     */
    public function testDelete(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'flatley.micah@example.org')
                    ->type('password','password')
                    ->click('button[type="submit"]')
                    ->pause(10000)
                    ->click('a[class="btn btn-danger my-1"]')
                    ->click('button[class="swal2-confirm swal2-styled swal2-default-outline"]');
        });
    }
}
