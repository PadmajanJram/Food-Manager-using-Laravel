<?php

namespace App\Http\Controllers;
use App\Models\foods;
use App\Models\User;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function createProduct(Request $request){
        $userId = auth()->user()->user_id;
        $user = User::find($userId);
        $request->validate([
            'name' => 'required|max:255|string',
            'cuisine'=>'required|max:255|string',
            'price' => 'required|numeric',
        ]);
        foods::create([
            'name'=>$request->name,
            'cuisine' => $request->cuisine,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'food details saved',
            
        ]);
    }

    public function getProducts(){
        $userId = auth()->user()->user_id;
        $user = User::find($userId);
        $products = foods::get();
        return response()->json([
                'message' => 'All product details',
                'data' => $products,
                
            ]);
    }

    
public function getProductDetails($id){
    $userId = auth()->user()->user_id;
        $user = User::find($userId);
    $product = foods::findOrFail($id);
    return response()->json([
        'message' => 'Food details',
        'data' => $product,
        
    ]);
}
public function updateProductDetails(Request $request,$id){
    $userId = auth()->user()->user_id;
        $user = User::find($userId);
    foods::findOrFail($id)->update([
        'name'=>$request->name,
        'cuisine' => $request->cuisine,
        'price' => $request->price,
    ]);

    return response()->json([
        'message' => 'Food details updated',
        
    ]);
}

public function deleteProductDetails($id){
    $userId = auth()->user()->user_id;
        $user = User::find($userId);
    $product = foods::find($id);
    $product->delete();
    return response()->json([
        'message' => 'Food details deleted',
        
    ]);
}
}
