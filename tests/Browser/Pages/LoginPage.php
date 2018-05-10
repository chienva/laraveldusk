<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page as BasePage;
use App\Users;
use Tests\Browser\Components\InputLoginComponent;

class LoginPage extends BasePage
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */

    public function loginUser(Browser $browser)
    {
        $getUsers = Users::where('id', 1)->first(); //get user from table_users where user_id is 1

        $browser->visit($this->url())
                ->within(new InputLoginComponent, function ($browser) use ($getUsers) {
                        $browser->doLogin($getUsers->email, $getUsers->passwd);
                });
    }
}
