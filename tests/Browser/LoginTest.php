<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')                 
            ->value('#email','ishan@example.com' )                
            ->value('#password', 'Ishan@pass1')->press('Login')                
            ->assertPathIs('/home')->assertSee('You are logged In!');     
            });
    }
}
