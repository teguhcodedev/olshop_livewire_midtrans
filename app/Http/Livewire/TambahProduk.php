<?php

namespace App\Http\Livewire;

//untuk authentikasi
use Illuminate\Support\Facades\Auth;

//untuk memanggil
use App\Models\Produk;

//penyimpanan
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use Livewire\Component;

class TambahProduk extends Component
{

    //bikin variabel yang meerepresentasikan form
    public $nama,$harga,$berat,$gambar;
    use WithFileUploads;

    //method bawaan livewire yang diakses pertamakali ketika halaman di load
    public function mount(){
        if(Auth::user()){
            if(Auth::user()->level !==1){
                return redirect()->to('');
            }
        }
    }

    //method ini yang akan di akses ketika submit ditekan
    public function store(){
        //validasi
        $this->validate([
            'nama'=>'required',
            'harga'=>'required',
            'berat'=>'required',
             'gambar'=>'required|image|mimes:jpeg,png,gif|max:2048',
        ]);

       // pemrosesan file gambar
        $nama_gambar = md5($this->gambar.microtime()).'.'.$this->gambar->extension();
        Storage::disk('public')->putFileAs('photos',$this->gambar,$nama_gambar);
    
    //memasukan data ke dalam database
    Produk::create(
        [
            'nama'=>$this->nama,
            'harga'=>$this->harga,
            'berat'=>$this->berat,
             'gambar'=>$nama_gambar
        ]
        );

        //redirect ke home
        return redirect()->to('');
    }




    //fungsi untuk menampilka layout
    public function render()
    {
        return view('livewire.tambah-produk')->extends('layouts.app')->section('content');;
    }
}
