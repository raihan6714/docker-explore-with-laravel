<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Write code on Method
     *
     * @return Factory|View|Application()
     */
    public function dashboard(Request $request): Factory|View|Application
    {
        flash()->success('Login Successfully');
        return view('backend.pages.dashboard.dashboard');
    }

    public function home()
    {
        return view('frontend.pages.home.index');
    }

    public function shop()
    {
        return view('frontend.pages.shop.index');
    }

    public function shopDetail()
    {
        return view('frontend.pages.shopDetail.index');
    }

    public function pricing()
    {
        return view('frontend.pages.pricing.index');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout.index');
    }

    public function blog()
    {
        return view('frontend.pages.blog.index');
    }

    public function blogDetail()
    {
        return view('frontend.pages.blogDetail.index');
    }

    public function about()
    {
        return view('frontend.pages.about.index');
    }

    public function appointment()
    {
        return view('frontend.pages.appointment.index');
    }

    public function serviceDetail()
    {
        return view('frontend.pages.serviceDetail.index');
    }

    public function team()
    {
        return view('frontend.pages.team.index');
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }

    public function faqs()
    {
        return view('frontend.pages.faqs.index');
    }

    public function error()
    {
        return view('frontend.pages.error.index');
    }
}
