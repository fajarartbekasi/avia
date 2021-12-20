<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'));
    }
    public function create()
    {
        $roles = Role::all();

       return view('users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'name'      => 'required',
            'email'     => 'required',
            'roles'      => 'required',
            'password'  => 'required',
        ]);

        $this->validate($request, [

            'name'      => 'required',
            'email'     => 'required',
            'roles'      => 'required',
            'password'  => 'required',
        ]);


        $request->merge(['password' => bcrypt($request->get('password'))]);

        if ($user = User::create($request->except('roles'))) {
                $user->syncRoles($request->get('roles'));

                $findUser = User::with('roles')->findOrFail($user->id);
                if ($findUser->roles->first()->name == 'admin') {

                    return redirect()->back()->with([
                        'success' => 'Anda berhasil menambahkan admin baru'
                    ]);
                }elseif ($findUser->roles->first()->name == 'guru') {
                    $guru = Petugas::create([
                        'user_id'   => $findUser->id,
                    ]);

                    return redirect()->back()->with([
                        'success' => 'Anda berhasil menambahkan Petugas baru'
                    ]);
                }

        } else {
                return redirect()->back()->with([
                        'success' => 'Maaf sepertinya ada kesalahan dalam menambahkan member baru'
                    ]);
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $user = User::with('roles')->find($id);
        $roles = Role::all();

        return view('users.edit', compact('user','roles'));
    }
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required|min:1'
        ]);
        $user = User::findOrFail($id);

        $user->fill($request->except('roles','password'));

        if($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->save();
        $user->syncRoles($request->get('roles'));

        return redirect()->back()->with(['success' => 'terimakasih']);
    }
    public function destroy($id)
    {
        if ( Auth::user()->id == $id ) {
            flash()->warning('Deletion of currently logged in user is not allowed :(')->important();
            return redirect()->back();
        }

        if( User::findOrFail($id)->delete() ) {
            flash()->success('User has been deleted');
        } else {
            flash()->success('User not deleted');
        }

        return redirect()->back();
    }
    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);
        return $user;
    }
}
