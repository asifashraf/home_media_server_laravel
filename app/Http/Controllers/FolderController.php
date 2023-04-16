<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFolderRequest;
use App\Http\Requests\UpdateFolderRequest;
use App\Models\Folder;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all foldes 
        $folders = Folder::all();
        $type_data = self::$type_data; 
        return response()->json([
            'type' => self::$type_data,
            'data' => $folders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFolderRequest $request)
    {
        //Create a new folder from the request by using new Folder instanse and then -> save() function
        $folder = new Folder();
        $folder->folder_title = $request->folder_title;
        $folder->folder_path = $request->folder_path;
        // Read MACHINE_ID from environment variables in laravel 
        // and then pass it to the machine_id field in the database
        $folder->machine_id = env('MACHINE_ID');
        $folder->save();
        // return json response with type data
        return response()->json([
            'type' => self::$type_data,
            'data' => $folder
        ]);


        # OR this approach can be used to create a new folder from the request by using create() function
        // and passing in an array of the request data to be stored in the database 
        /*
        $folder = Folder::create([
            'folder_title' => $request->folder_title,
            'folder_path' => $request->folder_path,
            'machine_id' => $request->machine_id
        ]);
        // return json response with type data
        return response()->json([
            'type' => self::$type_data,
            'data' => $folder
        ]);
        */

    }

    /**
     * Display the specified resource.
     */
    public function show(Folder $folder)
    {
        // Find folder by id
        $folder = Folder::find($folder->id);
        // return json response with tpye data
        return response()->json([
            'type' => self::$type_data,
            'data' => $folder
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFolderRequest $request, Folder $folder)
    {
        // Find folder by id
        $folder = Folder::find($folder->id);
        // Update folder with request data if folder_title field exists in the request
        if($request->folder_title){
            $folder->folder_title = $request->folder_title;
        }
        // Update folder with request data if folder_path field exists in the request
        if($request->folder_path){
            $folder->folder_path = $request->folder_path;
        }
        // save folder
        $folder->save();
        // return json response with type data
        return response()->json([
            'type' => self::$type_data,
            'data' => $folder
        ]);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Folder $folder)
    {
        //delete folder by given folder in http request
        /*
        Note: In this example, the $folder parameter is type-hinted as Folder, which means Laravel 
        will automatically resolve the Folder instance based on the ID passed in the route. 
        The delete() method is then called on the $folder instance to delete it from the database.*/
        $folder->delete();
        // return json response with type data
        return response()->json([
            'type' => self::$type_data,
            'data' => $folder
        ]);
    }
}
