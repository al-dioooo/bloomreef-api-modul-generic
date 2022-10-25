<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('group') === "false") {
            $permissions = Permission::get(['id', 'page', 'action', 'name', 'description']);
        } else {
            $permissions = Permission::get(['id', 'page', 'action', 'name', 'description'])->groupBy('page');
        }

        return response()->json($permissions);
    }
}
