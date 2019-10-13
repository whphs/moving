<?php

namespace App\Http\Controllers\BackEnd;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Get all registered user list
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Edit selected user's role
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editRole(Request $request, $id) {
        $user = User::find($id);
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update selected user's role
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateRole(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->username;
        $user->role = $request->role;
        $user->update();

        return redirect('/admin/users')->with('status', 'Updated Successfully');
    }

    /**
     * Delete selected user
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/users')->with('status', 'Deleted Successfully');
    }
}
