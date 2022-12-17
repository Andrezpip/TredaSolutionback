<?php

namespace App\Http\Controllers;
use App\models\productModel;
use App\models\storeModel;
use Exception;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function getProducts()
    {
        try {
            return ProductModel::all();

        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function saveProduct(Request $request)
    {
        try {
            $product = new ProductModel();
            $product->sku = $request->sku;
            $product->description = $request->description;
            $product->valor = $request->valor;
            $product->tienda = $request->tienda;
            $product->imagen = $request->imagen;

            $product->save();

            return response()->json([
                'message'=>"Guardado Correctamente",
                'status'=>true
            ]);
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function showProduct($id)
    {
        try {
            $product = productModel::find($id);
            if (!$product) {
                return response()->json([
                    'message'=>"producto no encontrado",
                    'status'=>true], 400);
            }
            return $product;
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function updateProduct(Request $request, $id)
    {

        try {
            $product = productModel::find($id);
            if (!$product) {
                return response()->json([
                    'message'=>"producto no encontrado",
                    'status'=>true], 400);
            }
            $product->sku = $request->sku;
            $product->description = $request->description;
            $product->valor = $request->valor;
            $product->tienda = $request->tienda;
            $product->imagen = $request->imagen;

            $product->save();
            return response()->json([
                'message'=>"Actualizado Correctamente",
                'status'=>true
            ]);
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function deleteProduct($id)
    {
        try {
            $product = productModel::findOrFail($id);
            if (!empty($product)){
                $product = productModel::destroy($id);
                return ["message: Este producto fue borrado exitosamente"];
            }
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }

    public function getProductsWithStores()
    {
        try {
            $products =  ProductModel::all();
            $productStore = [];
            foreach ($products as $product) {
                $store = storeModel::find($product->tienda);
                $product->tienda = $store->name;
                $productStore[] = $product;
            }
            return $productStore;
        }catch (Exception $e) {
            return ["error:",$e->getMessage()];
        }
    }
}
