<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CreateTest extends DuskTestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreate(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'flatley.micah@example.org')
                    ->type('password','password')
                    ->click('button[type="submit"]')
                    ->pause(10000)
                    ->click('a[class="btn btn-primary btn-round float-right"]')
                    ->type('input[class="form-control"]','hello world!')
                    ->select('select[class="form-control"]', '2')
                    ->type('div[aria-label="Editor editing area: main"]', 'hello world!')
                    ->click('a[class="btn btn-dark"]')
                    ->attach('input[class="d-none"]',base_path('tests/Feature/photos/picture.png'))
                    ->click('a[class="btn btn-dark"]')
                    ->click('input[class="dp__pointer dp__input_readonly dp__input dp__input_icon_pad dp__input_reg"]')
                    ->click('div[class="dp__cell_inner dp__pointer dp__today dp__date_hover"]')
                    ->click('button[class="dp__action_button dp__action_select"]')
                    ->click('a[class="btn btn-dark"]');            
        });
    }
}
