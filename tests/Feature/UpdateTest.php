<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class UpdateTest extends DuskTestCase
{
    /**
     * A basic feature test example.
     */
    public function testUpdate(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'flatley.micah@example.org')
                    ->type('password','password')
                    ->click('button[type="submit"]')
                    ->pause(10000)
                    ->click('a[class="btn btn-dark my-1"]')
                    ->type('input[class="form-control"]','hello world!')
                    ->click('a[class="btn btn-dark"]')
                    ->attach('input[class="d-none"]',base_path('tests/Feature/photos/picture.png'))
                    ->click('a[class="btn btn-dark"]')
                    ->click('a[class="btn btn-dark"]');            
        });
    }
}
