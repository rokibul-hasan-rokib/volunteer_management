<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = (new User())->getAllUsers();
        return view('admin.modules.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = (new User())->storeUser($request);
            DB::commit();
            alert_success('User created successfully');
            return redirect()->route('user.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            alert_error(__('Failed! ' . $th->getMessage()));
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.modules.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $role)
    {
        return view('admin.modules.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $role)
    {
        dd($request->all());
        try {
            DB::beginTransaction();
            (new User())->updateUser($request, $role);
            alert_success('Role updated successfully');
            DB::commit();
            return redirect()->route('role.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            alert_error(__('Failed! ' . $th->getMessage()));
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();
            (new User())->deleteUser($user);
            DB::commit();
            alert_success('Role deleted successfully');
            return redirect()->route('role.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            alert_error(__('Failed! ' . $th->getMessage()));
            return redirect()->back();
        }
    }
}
