<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session_id=Session::get('session_id');
        $cart_datas=Cart::where('session_id',$session_id)->get();
        $total_price=0;
        foreach ($cart_datas as $cart_data){
            $total_price+=$cart_data->c_produit_price*$cart_data->c_produit_quantite;
        }
        return view('cart',compact('cart_datas','total_price'));
    }

    public function lenombrearticlepanier()
    {
        $session_id=Session::get('session_id');
        $cart_datas=Cart::where('session_id',$session_id)->get();
        $total_price=0;
        foreach ($cart_datas as $cart_data){
            $total_price=total_price +1;
        }
        return $total_price;
    }
    

/** */
public function addToCart(Request $request){
    $inputToCart=$request->all();
   /* Session::forget('discount_amount_price');
    Session::forget('coupon_code'); */
   /* session( ['user_session_id' => 'slipencuir'] ); */
   
        $stockAvailable=DB::table('produits')->select('stock')->where(['id'=>$inputToCart['c_produit_id'],
            ])->first();
        if($stockAvailable->stock>=$inputToCart['c_produit_quantite']){
            $inputToCart['user_email']='weshare@gmail.com';

           $session_id=Session::get('session_id'); 
            if(empty($session_id)){
                $session_id=str_random(40);
                Session::put('session_id',$session_id);
            }
           /* $session_id="porthdhjsgghggt";*/
            $inputToCart['session_id']=$session_id;  



/*$sizeAtrr=explode("-",$inputToCart['size']);
            $inputToCart['size']=$sizeAtrr[1];
            $inputToCart['product_code']=$stockAvailable->sku;*/
            $count_duplicateItems=Cart::where(['c_produit_id'=>$inputToCart['c_produit_id'], 'session_id'=>$session_id])->count();
            if($count_duplicateItems>0){
                return back()->with('message','Ce produit est déjà ajouté au panier.');
            }else{
                Cart::create($inputToCart);
                return back()->with('message','Produit ajouté au panier');
            }
        }else{
            return back()->with('message','Stock insuffisant!');
        }
   
}


public function updateQuantityReq(Request $request){
    $inputToCart=$request->all();
    
    
  
  
    $sku_size=DB::table('carts')->select('c_produit_quantite','c_produit_id')->where('id',$inputToCart['idcart'])->first();
    $stockAvailable=DB::table('produits')->select('stock')->where(['id'=>$sku_size->c_produit_id,
        ])->first(); 
        $quantity =$inputToCart['quantity'];
        $id= $inputToCart['idcart'];
    $updated_quantity=$quantity;
    if($stockAvailable->stock>=$updated_quantity){
        
        DB::table('carts')
            ->where('id', $id)
            ->update(array('c_produit_quantite' => $quantity));
        
        
        return back()->with('message','Quantité Modifiée!!');
    }else{
        return back()->with('message','Stock insuffisant pour satisfaire cette quantité!');
    }
   

}
public function updateQuantity(Request $request){
    
    $sku_size=DB::table('carts')->select('c_produit_quantite','c_produit_id')->where('id',$id)->first();
    $stockAvailable=DB::table('produits')->select('stock')->where(['id'=>$sku_size->c_produit_id,
        ])->first(); 
        
    $updated_quantity=$sku_size->c_produit_quantite+$quantity;
    if($stockAvailable->stock>=$updated_quantity){
        DB::table('carts')->where('id',$id)->increment('c_produit_quantite',$quantity);
        return back()->with('message','Quantité Modifiée!!');
    }else{
        return back()->with('message','Stock insuffisant pour satisfaire cette quantité!');
    }


}




public function deleteItem($id=null){
    $delete_item=Cart::findOrFail($id);
 
    $delete_item->delete();
    return back()->with('message','Produit supprimé!');
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
