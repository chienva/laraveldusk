<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Users;
use Tests\Browser\Pages\LoginPage;

class TestLogin extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->on(new LoginPage)
                    ->loginUser()
                    ->visit('/')
                    ->waitFor('.is-login')
                    ->assertSee('You are logged in');
        });
    }

}
