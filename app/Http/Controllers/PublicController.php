<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    Public function PorschePage(){
        $Porsches =[
            [
                'tipes'=> '714 gt4 rs',
                'specifiche'=>'motore 4,0 l 6 cylindres 500 CV',
                'img'=>'/img/GT4rs.jpg'
            ],
            [
                'tipes'=>'911 gt3 rs',
                'specifiche'=>'motore 4.0 Dct 525 Cv',
                'img'=>'/img/911-GT3R.jpg'
            ],
        ];
        return view('Porsche', ['Porsches'=>$Porsches]);
    }
    
    public function FerrariPage(){
        $Ferraris =[
            [
                'tipes'=> 'F458 speciale',
                'specifiche'=>'motore F136FB da 570 CV',
                'img'=>'/img/F458speciale.jpeg'
            ],
            [
                'tipes'=>'Enzo',
                'specifiche'=>'motore  6.0 litri di tipi F140B da 651 CV',
                'img'=>'/img/Enzo.jpg'
            ],
        ];
        return view('Ferrari' , ['Ferraris'=>$Ferraris]);
    }

    public function DettaglioPorsche($tipes){
        //dd{$tipes};
        $Porsches =[
            [
                'tipes'=> '714 gt4 rs',
                'specifiche'=>'motore 4,0 l 6 cylindres 500 CV',
                'img'=>'/img/GT4rs.jpg'
            ],
            [
                'tipes'=>'911 gt3 rs',
                'specifiche'=>'motore 4.0 Dct 525 Cv',
                'img'=>'/img/911-GT3R.jpg'
            ],
        ];
        foreach($Porsches as $Porsche){
            if ($Porsche['tipes']==$tipes) {
                return view('DettaglioPorsche', ['Porsche'=>$Porsche]);
            }
        }
        
    }


    public function DettaglioFerrari($tipes){
        //dd{$tipes};
        $Ferraris =[
            [
                'tipes'=> 'F458 speciale',
                'specifiche'=>'motore F136FB da 570 CV',
                'img'=>'/img/F458speciale.jpeg'
            ],
            [
                'tipes'=>'Enzo',
                'specifiche'=>'motore  6.0 litri di tipi F140B da 651 CV',
                'img'=>'/img/Enzo.jpg'
            ],
        ];
        foreach($Ferraris as $Ferrari){
            if ($Ferrari['tipes']==$tipes) {
                return view('DettaglioFerrari' , ['Ferrari'=>$Ferrari]);
    
            }
        }
        
    }
}

