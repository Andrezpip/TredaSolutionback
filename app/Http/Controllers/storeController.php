<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\storeModel;
use Exception;

class storeController extends Controller
{
    public function getStores()
    {
        try {
            return StoreModel::all();

        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function saveStore(Request $request)
    {
        try {
            $store = new storeModel();
            $store->name = $request->name;
            $store->openingDate = $request->openingDate;

            $store->save();

            return response()->json([
                'message'=>"Guardado Correctamente",
                'status'=>true
            ]);
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function showStore($id)
    {
        try {
            $store =storeModel::find($id);
            if (!$store) {
                return response()->json([
                    'message'=>"tienda no encontrada",
                    'status'=>true], 400);
            }
            return $store;
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function updateStore(Request $request, $id)
    {

        try {
            $store = storeModel::find($id);
            if (!$store) {
                return response()->json([
                    'message'=>"tienda no encontrada",
                    'status'=>true], 400);
            }
            $store->name = $request->name;
            $store->openingDate = $request->openingDate;

            $store->save();
            return response()->json([
                'message'=>"Actualizado Correctamente",
                'status'=>true
            ]);
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function deleteStore($id)
    {
        try {
            $store = storeModel::findOrFail($id);
            if (!empty($store)){
                $store = storeModel::destroy($id);
                return ["message: La tienda fue borrada exitosamente"];
            }
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }
}
