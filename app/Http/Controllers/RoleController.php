<?php

namespace App\Http\Controllers;

use App\Models\ProjectUserAccess;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $users = User::all();
        return view('role.role', [
            'roles' => $roles,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = Role::all();
        $users = User::all();

        RoleUser::create([
            'roles_id' => $request -> roles,
            'users_id' => $request -> users,
        ]);
        return view('role.role', [
            'roles' => $roles,
            'users' => $users
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($projectId)
    {
        $pivotRecord = ProjectUserAccess::where('project_id', $projectId)->first();

        if ($pivotRecord) {
            $pivotRecord->delete();
        }
    }
}
