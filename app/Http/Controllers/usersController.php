<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Requests;
use Webpatser\Uuid\Uuid;

class usersController extends Controller
{

    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = null;
        $role = isset($_GET["role"]) && !empty($_GET["role"]) ? $_GET["role"] : null;

        try
        {
            if (isset($role) && !empty($role))
            {
                $users = User::Where('role', $role)->get();
            }
            else
            {
                $users = User::all();
            }

            $response = [
                "msg" => "List of Users.",
                'user' => $users
            ];
    
            return response()->json($response, 200);
        }
        catch (\Exception $e)
        {
            //log error
            Log::error("Error occurred while getting users - " . $e->getMessage());
        }

        $response = [
            "msg" => "Error occurred while getting users",
        ];

        return response()->json($response, 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "role" => "required"
        ]);

        $name = $request->input("name");
        $role = $request->input("role");

        $user = new User([
            "id" => Uuid::generate()->string,
            "name" => $name,
            "role" => $role
        ]);

        try
        {    
            if ($user->save())
            {
                $response = [
                    "msg" => "User Created.",
                    'user' => $user
                ];

                return response()->json($response, 201);
            }
        }
        catch (\Exception $e)
        {
            //log error
            Log::error("Error occurred while User Creatation - " . $e->getMessage());
        }

        $response = [
            "msg" => "Error occurred while User Creatation."
        ];        

        return response()->json($response, 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = null;

        try
        {
            $user_data = User::findOrFail($id);
            
            //returning only reqired information about the user
            $user = new User();
            $user->name = $user_data->name;
            $user->role = $user_data->role;

            $response = [
                "msg" => "User Informaion.",
                'user' => $user
            ];
    
            return response()->json($response, 200);
        }
        catch (\Exception $e)
        {
            //log error
            Log::error("Error occurred while getting user - " . $e->getMessage());
        }

        $response = [
            "msg" => "Error occurred while getting user"
        ];

        return response()->json($response, 404);
    }

    /**
     * Search the specified resource.
     *
     * @param  string  $q
     * @return \Illuminate\Http\Response
     */
    public function search($q)
    {
        try
        {
            $users = User::where('name','LIKE', '%' . $q . '%')->get();  
            
            if (count($users) == 0)
            {
                $users = 'no data found';
            }

            $response = [
                "msg" => "Searh Results",
                'users' => $users
            ];
    
            return response()->json($response, 200);
        }
        catch (\Exception $e)
        {
            //log error
            Log::error("Error occurred while search - " . $e->getMessage());
        }

        $response = [
            "msg" => "Error occurred while search"
        ];

        return response()->json($response, 404);
    }


}
