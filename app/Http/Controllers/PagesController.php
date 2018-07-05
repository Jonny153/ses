<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $pages;
    protected $services;

    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        $this->pages = config('common.pages');
        $this->services = config('common.services');
    }

    public function main()
    {
        return view('main');
    }

    public function pages($page, $subpage = null)
    {
        abort_if(!in_array($page, $this->pages), 404);

        if ($page == 'services' && $subpage) {
            abort_if(!in_array($subpage, $this->services), 404);
            return view('services.' . $subpage);
        }

        return view('pages.' . $page);

    }

}
