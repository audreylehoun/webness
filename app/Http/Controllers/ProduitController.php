<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Cathegorie;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_active=3;
        $i=0;
        $products=Produit::orderBy('created_at','desc')->get();
        return view('backEnd.products.index',compact('menu_active','products','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active=3;
        $categories=Cathegorie::where('c_parent_id','>=', '0')->pluck('c_libelle','id')->all();
        return view('backEnd.products.create',compact('menu_active','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'p_libelle'=>'required|min:5',
           
            'p_description'=>'required',
            'p_prixancien'=>'required|numeric',
            'stock'=>'required|numeric',
            'p_image1'=>'required|image|mimes:png,jpg,jpeg|max:60000',
        ]);
        $formInput=$request->all();
        if($request->file('p_image1')){
            $image=$request->file('p_image1');
            if($image->isValid()){
                $fileName=time().'-'.str_slug($formInput['p_libelle'],"-").'.'.$image->getClientOriginalExtension();
                $large_image_path=public_path('images/product/Images1/large/'.$fileName);
                $medium_image_path=public_path('images/product/Images1/medium/'.$fileName);
                $small_image_path=public_path('images/product/Images1/small/'.$fileName);
                //Resize Image
                Image::make($image)->save($large_image_path);
                Image::make($image)->resize(600,600)->save($medium_image_path);
                Image::make($image)->resize(300,300)->save($small_image_path);
                $formInput['p_image1']=$fileName;
            }
        }

        if($request->file('p_image2')){
            $image=$request->file('p_image2');
            if($image->isValid()){
                $fileName=time().'-'.str_slug($formInput['p_libelle'],"-").'.'.$image->getClientOriginalExtension();
                $large_image_path=public_path('images/product/Images2/large/'.$fileName);
                $medium_image_path=public_path('images/product/Images2/medium/'.$fileName);
                $small_image_path=public_path('images/product/Images2/small/'.$fileName);
                //Resize Image
                Image::make($image)->resize(450,565)->save($large_image_path);
                Image::make($image)->resize(270,340)->save($medium_image_path);
                Image::make($image)->resize(80,100)->save($small_image_path);
                $formInput['p_image2']=$fileName;
            }
        }


        Produit::create($formInput);
        return redirect()->route('product.create')->with('message','Produit ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    
    public function nouveauproduit()
    {
        $produits = Produit::orderBy('id', 'desc')->take(8)->get();
        $produitsvingtpremiers = Produit::orderBy('id', 'desc')->take(20)->get();
        $cathegories = Cathegorie::orderBy('id', 'desc')->take(4)->get();
        $list_product=Produit::orderBy('id', 'desc')->take(20)->get();
        $byCate=Cathegorie::select('c_libelle')->where('id',1)->first();
        $cathegoriespeu = Cathegorie::orderBy('id', 'desc')->take(4)->get();

        return view('acceuil', ['produits'=>$produits, 'cathegories'=>$cathegories, 'produitsvingtpremiers'=>$produitsvingtpremiers,'list_product'=>$list_product,'bycate'=>$byCate, 'cathegoriespeu'=>$cathegoriespeu]);
    }
    
    

    public function produit_detail($idproduit)
    {
        $leproduit = Produit::where('id', $idproduit)->get();
       
        $cathegories = Cathegorie::orderBy('id', 'desc')->get();
        $cathegorie_produit = Produit::select('p_cathegorie_id')->where('id', $idproduit)->get();
        foreach ($cathegorie_produit as $catheg_produit){
            $libcathegorie_produit = Cathegorie::where('id', $catheg_produit->p_cathegorie_id)->get();
        
        }
          
        return view('singleproduit', ['leproduit'=>$leproduit, 'cathegories'=>$cathegories, 'libcathegorie_produit'=>$libcathegorie_produit]);


    }

    public function listByCat2($id){
        $list_product=Produit::where('p_cathegorie_id',$id)->get();
        $byCate=Cathegorie::select('c_libelle')->where('id',$id)->first();
        return view('acceuil',compact('list_product','byCate'));
    }

    public function listByCat($id){
        $produits = Produit::orderBy('id', 'desc')->take(8)->get();
        $byCate=Cathegorie::orderBy('id', 'desc')->take(8)->get();
        $list_product=Produit::where('p_cathegorie_id',$id)->get();
        $cathegories = Cathegorie::orderBy('id', 'desc')->get();
        $cathegoriespeu = Cathegorie::orderBy('id', 'desc')->take(4)->get();
 /*view('acceuil',compact('list_product','byCate','produits','cathegories')); */

 return view('acceuil', ['produits'=>$produits, 'cathegories'=>$cathegories, 'cathegoriespeu'=>$cathegoriespeu, 'list_product'=>$list_product,'byCate'=>$byCate]);
 
    
      /*  return redirect()->route('catheg', compact('list_product','byCate','produits','cathegories')); */

    }

    public function listByCatproduit($id){
        /*$produit = Produit::orderBy('id', 'desc')->get();*/
        $produits=Produit::where('p_cathegorie_id',$id)->get();
        $cathegories = Cathegorie::orderBy('id', 'desc')->get();


        $byCate=Cathegorie::orderBy('id', 'desc')->get();
      
        $cathegories = Cathegorie::orderBy('id', 'desc')->get();
        $cathegoriespeu = Cathegorie::orderBy('id', 'desc')->take(4)->get();
 /*view('acceuil',compact('list_product','byCate','produits','cathegories')); */

 return view('produitpage', ['produits'=>$produits, 'cathegories'=>$cathegories, 'cathegoriespeu'=>$cathegoriespeu,'byCate'=>$byCate]);
 
    
      /*  return redirect()->route('catheg', compact('list_product','byCate','produits','cathegories')); */

    }

    
    public function lepanier(){
               return view('cart');
    }





    public function produitparcathegorie($id)
    {
        $produits = Produit::orderBy('id', 'desc')->take(8)->get();
       /*$produitparcathegorie = Produit::where('id', $id)->get();*/
          $produitsvingtpremiers = Produit::where('p_cathegorie_id', $id)->take(20)->get();
        /*$produitsvingtpremiers = Produit::orderBy('id', 'desc')->take(20)->get();*/
        $cathegories = Cathegorie::orderBy('id', 'desc')->take(4)->get();
    return view('acceuil', ['produits'=>$produits, 'cathegories'=>$cathegories, 'produitsvingtpremiers'=>$produitsvingtpremiers]);
    }


    
    public function listeproduit()
    {
        $produits = Produit::orderBy('id', 'desc')->get();
              
        $cathegories = Cathegorie::orderBy('id', 'desc')->get();
    return view('produitpage', ['produits'=>$produits, 'cathegories'=>$cathegories]);
    }

    public function nombre($id)
    {
       return '5';
    }

    public function lelibCategorie($id)
    {
        $libcat=Cathegorie::select('c_libelle')->where('id',$id)->first();
    return $libcat;
    }

     public function show(Produit $produit)
    {
        //
    }

   
    public function edit($id)
    {
        $menu_active=3;
        $categories=Cathegorie::where('c_parent_id','>=', '0')->pluck('c_libelle','id')->all();
        $edit_product=Produit::findOrFail($id);
        $edit_category=Cathegorie::findOrFail($edit_product->p_cathegorie_id);
        return view('backEnd.products.edit',compact('edit_product','menu_active','categories','edit_category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_product=Produit::findOrFail($id);
        $this->validate($request,[
            'p_libelle'=>'required|min:5',
            
            'p_description'=>'required',
            'p_prixancien'=>'required|numeric',
            'stock'=>'required|numeric',
            'p_image1'=>'image|mimes:png,jpg,jpeg|max:1000',
            'p_image2'=>'image|mimes:png,jpg,jpeg|max:1000',
            



        ]);
        $formInput=$request->all();

        $imagedefinie=1;
      
            if($request->file('p_image1')){ // Nouvelle image définie
                $image=$request->file('p_image1');
                if($image->isValid()){
                    $fileName=time().'-'.str_slug($formInput['p_libelle'],"-").'.'.$image->getClientOriginalExtension();
                    $large_image_path=public_path('images/product/Images1/large/'.$fileName);
                    $medium_image_path=public_path('images/product/Images1/medium/'.$fileName);
                    $small_image_path=public_path('images/product/Images1/small/'.$fileName);
                    //Resize Image
                    Image::make($image)->resize(450,565)->save($large_image_path);
                Image::make($image)->resize(270,340)->save($medium_image_path);
                Image::make($image)->resize(80,100)->save($small_image_path);
                    $formInput['p_image1']=$fileName;
               
                }
            }else{
                if($update_product['p_image1']==''){
                    $imagedefinie=0;
                  
                }else{
                    $formInput['p_image1']=$update_product['p_image1'];

                }

            }
       
               
            if($request->file('p_image2')){
                $image=$request->file('p_image2');
                if($image->isValid()){
                    $fileName=time().'-'.str_slug($formInput['p_libelle'],"-").'.'.$image->getClientOriginalExtension();
                    $large_image_path=public_path('images/product/Images2/large/'.$fileName);
                    $medium_image_path=public_path('images/product/Images2/medium/'.$fileName);
                    $small_image_path=public_path('images/product/Images2/small/'.$fileName);
                    //Resize Image
                    Image::make($image)->resize(450,565)->save($large_image_path);
                Image::make($image)->resize(270,340)->save($medium_image_path);
                Image::make($image)->resize(80,100)->save($small_image_path);
                    $formInput['p_image2']=$fileName;
                }
            }else{
                if($update_product['p_image1']==''){
                    $imagedefinie=0;
                   
                }else{
                    $formInput['p_image1']=$update_product['p_image1'];

                }

            }

     if( $imagedefinie==1){
        $update_product->update($formInput);
        return redirect()->route('product.index')->with('message','Produit modifié avec succès!');
    }else{
        return back()->with('message','Veuillez indiquer une image pour ce produit!');
     
    }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
