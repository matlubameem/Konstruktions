<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showProjectAdd()
    {
        return view('back_end.project.add');
    }

    public function processProjectAdd(Request $request)
    {
        $client = null;
        if ($request->post('client_type') == 'old') {
            $client = Role::whereRoleSlug('client')->firstOrFail()->users();
        }
    }

}
