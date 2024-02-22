<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\OrganizationsModel;

class OrganizationController extends Controller
{
    public function index() {
        $contacts = Organization::all();
        return view('Organization.index', compact('organization'));
    }
}
