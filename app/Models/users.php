<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class users extends Model
{
    use HasFactory;

    protected $table = 'users';

    static function createDTOtoObject($request) {
        $user = new users();

        $user->Tocken = $request->Tocken;
        $user->id_discord = $request->id_discord;
        $user->name = $request->name;

        return ($user);
    }

    static function updateDTOtoObject($request, $users) {
        if ($request->Tocken)
            $users->Tocken = $request->Tocken;
        if ($request->id_discord)
            $users->id_discord = $request->id_discord;
        if ($request->name)
            $users->name = $request->name;

        return ($users);
    }

    static function getUserByIdiscord($id)
    {
        $user = DB::table('users')->where('id_discord', $id)->get();
        return $user;
    }
}
