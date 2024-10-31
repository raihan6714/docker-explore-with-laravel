<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return Factory|View|Application()
     */
    public function dashboard(Request $request): Factory|View|Application
    {
        flash()->success('Your order has been placed.');
        return view('backend.pages.dashboard.dashboard');
    }

    /**
     * Write code on Method
     *
     * @return Factory|View|Application()
     */
    public function users(Request $request): Factory|View|Application
    {
        $users = User::get();
        return view('users', compact('users'));
    }
}
