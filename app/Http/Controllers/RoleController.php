<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Branch;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('paginate') === "false") {
            $role = Role::with(['users', 'permissions'])->filter(request()->only(['search', 'name', 'from', 'to', 'super']))->latest()->get();
        } else {
            $role = Role::with(['users', 'permissions'])->filter(request()->only(['search', 'name', 'from', 'to', 'super']))->latest()->paginate(15)->setPath('')->withQueryString();
        }

        return response()->json($role);
    }

    public function show($id)
    {
        $role = Role::with(['users', 'permissions'])->findOrFail($id);

        return response()->json($role);
    }

    public function store(CreateRoleRequest $request)
    {
        $branch = Branch::findOrFail($request->input('branch_id'));

        $role = Role::create($request->validatedExcept(['permission', 'user']));

        $role->branch()->associate($branch);

        if ($request->input('user')) {
            $role->users()->sync($request->input('user'));
        }

        if ($request->input('permission')) {
            $role->permissions()->sync($request->input('permission'));
        }

        return response()->json([
            'message' => 'Successfully created a new role'
        ]);
    }

    public function update(UpdateRoleRequest $request)
    {
        $branch = Branch::findOrFail($request->input('branch_id'));

        $role = Role::findOrFail($request->input('id'));
        $role->update($request->validatedExcept(['id', 'permission', 'user']));

        $role->branch()->associate($branch);

        $role->users()->sync($request->input('user'));

        $role->permissions()->sync($request->input('permission'));

        return response()->json([
            'message' => 'Successfully updated a role'
        ]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $role = Role::findOrFail($request->input('id'));

        $role->delete();

        return response()->json([
            'message' => 'Successfully deleted a role!'
        ]);
    }
}
