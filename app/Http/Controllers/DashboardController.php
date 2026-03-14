<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.ecommerce');
    }

    public function project()
    {
        return view('dashboard.project');
    }

    public function crm()
    {
        return view('dashboard.crm');
    }

    public function chat()
    {
        return view('dashboard.chat');
    }

    public function mail()
    {
        return view('dashboard.mail');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function login()
    {
        return view('dashboard.login');
    }

    public function register()
    {
        return view('dashboard.register');
    }

    public function analytics()
    {
        return view('dashboard.analytics');
    }

    public function ecommerceCustomer()
    {
        return view('dashboard.ecommerce_customer');
    }

    public function crmLeads()
    {
        return view('dashboard.crm_leads');
    }

    public function hrm()
    {
        return view('dashboard.hrm');
    }

    public function timeTracker()
    {
        return view('dashboard.time_tracker');
    }

    public function hiring()
    {
        return view('dashboard.hiring');
    }

    public function kanban()
    {
        return view('dashboard.kanban');
    }

    public function landing()
    {
        return view('dashboard.landing');
    }

    public function help()
    {
        return view('dashboard.help');
    }

    public function docs()
    {
        return view('dashboard.docs');
    }

    public function components()
    {
        return view('dashboard.components');
    }

    public function changelog()
    {
        return view('dashboard.changelog');
    }

    public function migration()
    {
        return view('dashboard.migration');
    }

    public function fileManager()
    {
        return view('dashboard.file_manager');
    }

    public function componentDetail($type)
    {
        $title = ucwords(str_replace('-', ' ', $type));
        return view('dashboard.component_detail', compact('title', 'type'));
    }

    public function pricing()
    {
        return view('dashboard.pricing');
    }

    public function faq()
    {
        return view('dashboard.faq');
    }

    public function showcase()
    {
        return view('dashboard.showcase');
    }
}
