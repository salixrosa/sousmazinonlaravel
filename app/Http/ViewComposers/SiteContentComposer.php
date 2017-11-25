<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class SiteContentComposer
{
    public $movieList = [];
    /**
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function head(View $view)
    {
        $view->with('title', 'Willow Sells');
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function header(View $view)
    {
        $view->with('header', 'Willow Sells');
        $view->with('tagline', 'Programmer && Maker');
    }
}