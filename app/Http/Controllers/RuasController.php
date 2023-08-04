<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Ruas;
use App\Models\RuasCoordinates;

class RuasController extends Controller
{
    /**
     * success respond
     * @return json
     */
    private function success($data, $message = null){
        return response()
            ->json([
                'code'      => 200,
                'message'   => $message,
                'data'      => $data
            ], 200);
    }

    /**
     * not found respond
     * @return json
    */
    private function notFound($data = null, $message = null){
        return response()
            ->json([
                'code'      => 404,
                'message'   => $message ? $message : 'data not found',
                'data'      => $data
            ], 404);
    }


    /**
     * Read all Ruas
     * @return json
    */
    public function index(Request $request){
        $data = Ruas::with('ruasCoordinates')->paginate(10);
        return $this->success($data);
    }


    /**
     * Read one Ruas by iD
     * @return json
    */
    public function show(Request $request, $id){
        $data = Ruas::with('ruasCoordinates')->where('id', $id)->first();
        if($data){
            return $this->success($data);
        }else{
            return $this->notFound($data);
        }
    }


    /**
     *  Create ruas and ruas coordinates
     * @return json
    */
    public function store(Request $request){
        $validator = Validator::make(request()->all(), [
            'ruas'          => 'required',
            'km_awal'       => 'required|integer',
            'km_akhir'      => 'required|integer',
            'status'        => 'required|boolean',
            'coordinates'   => 'array'
        ]);

        if($validator->fails()){
            return response()->json(['message' => $validator->messages()]);
        }

        $ruas = Ruas::create([
            'ruas'          => $request->ruas,
            'km_awal'       => $request->km_awal,
            'km_akhir'      => $request->km_akhir,
            'status'        => $request->status,
            'created_by'    => auth()->user()->id,
            'updated_by'    => auth()->user()->id
        ]);

        if($request->coordinates){
            foreach($request->coordinates as $cor){
                $ruasCoordinates = RuasCoordinates::create([
                    'ruas_id'       => $ruas->id,
                    'coordinates'   => json_encode($cor),
                    'created_by'    => auth()->user()->id,
                    'updated_by'    => auth()->user()->id
                ]);
            }
            $ruas->coordinates = $ruasCoordinates;
        }
        return $this->success($ruas, 'Create success');
    }

    /**
     *  Update ruas
     * @return json
    */
    public function update(Request $request, $id){
        $ruas =  Ruas::where('id', $id)->first();
        if($ruas){
            Ruas::where('id', $id)
                ->update([
                    'ruas'          => $request->ruas,
                    'km_awal'       => $request->km_awal,
                    'km_akhir'      => $request->km_akhir,
                    'status'        => $request->status,
                    'updated_by'    => auth()->user()->id
                ]);
            return $this->success($ruas, 'Update success');
        }else{
            return $this->notFound();
        }
    }


    /**
     *  Delete ruas
     * @return json
    */
    public function destroy(Request $request, $id){
        $ruas =  Ruas::where('id', $id)->first();
        if($ruas){
            $ruas->forceDelete();
            return $this->success($ruas, 'Delete success');
        }else{
            return $this->notFound();
        }
    }
}
