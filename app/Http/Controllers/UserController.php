<?php

namespace App\Http\Controllers;

use App\Models\users;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    function show()
    {
        return users::all();
    }

    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Tocken' => 'nullable',
            'id_discord' => 'required',
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'A field is missing'
            ], 400);
        } else {
            $users = users::createDTOtoObject($request);

            $users->save();

            return response($users, 201);
        }
    }

    function update(Request $request, $id)
    {
        $users = users::findOrFail($id);

        if ($users) {
            $users = users::updateDTOtoObject($request, $users);
            $users->save();
            return response()->json([
                'message' => 'User update'
            ]);
        }
        else
        {
            return response()->json([
                'message' => 'User not found'
            ], 400);
        }
    }

    public function destroy($id)
    {
        $users = users::findOrFail($id);

        if ($users) {
            $users->delete();
            return response()->json([
                'message' => 'User deleted'
            ]);
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 400);
        }
    }

    public function getUserById($id)
    {
        return users::findOrFail($id);
    }

    public function getUserByIdiscord($id)
    {
        return users::getUserByIdiscord($id);
    }
}
