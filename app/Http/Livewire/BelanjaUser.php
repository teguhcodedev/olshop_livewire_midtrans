<?php

namespace App\Http\Livewire;

//untuk authentikasi
use Illuminate\Support\Facades\Auth;

//untuk memanggil
use App\Models\Belanja;

use Livewire\Component;

class BelanjaUser extends Component
{

    public $belanja =[];
    public function mount(){
        //authentikasi
        if(!Auth::user())
        {
            return redirect()->route('login');
        }
    }

    public function destroy($pesanan_id){
        $pesanan = Belanja::find($pesanan_id);
        $pesanan->delete();
    }

    public function render()
    {
        if(Auth::user())
        {
            $this->belanja= Belanja::where('user_id',Auth::user()->id)->get();
        }
        return view('livewire.belanja-user')
            ->extends('layouts.app')->section('content');
    }
}
