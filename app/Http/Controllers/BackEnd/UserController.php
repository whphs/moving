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
        return view('backend.user.index', compact('users'));
    }

    /**
     * Edit selected user's role
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request, $id) {
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update selected user's role
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect('/admin/user')->with('status', __('string.updated_success'));
    }

    /**
     * Delete selected user
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy(Request $request, $id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user')->with('status', __('string.deleted_success'));
    }
}
