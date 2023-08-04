<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller 
{
    public function import(Request $request) 
    {
        $uuid       = new Uuid();
        $filename   = 'user-import-'.$uuid->uuid3();
        $fileext    = $request->file->getClientOriginalExtension();
        $file       = $request->file->storeAs('/', $filename.'.'.$fileext);
        Excel::import(new UsersImport, $file);
        
        return response()
                ->json([
                    'message' => 'Import Success',
                    'code' => 200
                ], 200);
    }
}