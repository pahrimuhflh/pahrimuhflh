<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'product' => Product::latest()->get()
        ]);
    }
    public function add()
    {
        return view('product.insert');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'tilte'=>'required',
            'price'=>'required',
            'size'=>'required',
            'description'=>'required',
        ]);

        Product::create([
            'tilte' =>$request->tilte,
            'price' =>$request->price,
            'size' =>$request->size,
            'description' =>$request->description,
        ]);
        return redirect()->route('product')->with('message', 'Data Berhasil di tambah');
    }
    // In your Controller (e.g. UserController.php)
    public function viewedit(Request $request){
        $data['product'] = Product::where('id',$request->id)->first();
        $data['user'] = User::all();
        return view('product.update',$data);
    }

    public function edit(Request $request){
        Product::where('id',$request->id)->update([
            'tilte' => $request['tilte'],
            'price' => $request['price'],
            'size' => $request['size'],
            'description' => $request['description']
            
            
        ]);
    return redirect()->route('product')->with('message', 'Data Berhasil Di Ubah');
}
       
    public function delete(Request $request){
        Product::where('id',$request->id)->delete();
        return redirect()->route('product')->with('message', 'Data Berhasil di Hapus');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
