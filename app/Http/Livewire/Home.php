<?php

namespace App\Http\Livewire;
use App\Models\Produk;
use App\Models\ Belanja;
use Livewire\Component;

//untuk authentikasi
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public $products =[];

    //attribut filtering
    public $search,$min,$max;

    //attribute filtering

    public function beli($id){
        if(!Auth::user())
        {
            return Redirect()->route('login');
        }
        //mencari produk
        $produk = Produk::find($id);

        Belanja::create(
           [
            'user_id'=>Auth::user()->id,
            'total_harga'=>$produk->harga,
            'produk_id'=>$produk->id,
            'status'=>0,
           ]
        );
        return Redirect()->route('belanja_user');
    }


    public function render()
    {

        //filtering min and max
        if($this->max){
            $harga_max = $this->max;

        }else{
            $harga_max =500000000;
        }

   
         if($this->min){
            $harga_min = $this->min;

        }else{
            $harga_min =0;
        }

        if($this->search){
            $this->products = Produk::where('nama','%'.$this->search.'%')
                               ->where('harga','>=',$harga_min)
                               ->where('harga','<=',$harga_max)
                               ->get();
        }else{
            $this->products = Produk::where('harga','>=',$harga_min)
                                      ->where('harga','<=',$harga_max)
                                      ->get();
        }

        return view('livewire.home')
                ->extends('layouts.app')
                ->section('content');
    }
}
