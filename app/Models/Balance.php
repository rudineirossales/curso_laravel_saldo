<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Balance extends Model
{
    public $timestamps = false;



 public function deposit($value)  {

    DB::beginTransaction();
   $totalBefore = $this->amount ? $this->amount : 0 ;
   $this->amount += number_format($value, 2, '.', '');
   $deposit = $this->save();

   $historic = auth()->user()->historics()->create([

    'type'         => 'I',
    'amount'       => $value,
    'total_before' => $totalBefore,
    
    'date'         => date('Ymd'),



   ]);


   if ($deposit && $historic) {

             DB::commit();
           

        return [
               'success' => true, 
               'message' => 'Sucesso ao carregar'

     
        ];

        

    }

    else{


        DB::rollback();

        
        return [
            'success' => false, 
            'message' => 'Falha ao carregar'      
     
        ];


    }

}


public function withdrawn(float $value) 
{
    if($this->amount < $value)
       return [
          'success' => false,
          'message' => 'Saldo insuficiente', 


       ];

    DB::beginTransaction();
    $totalBefore = $this->amount ? $this->amount : 0 ;
    $this->amount -= number_format($value, 2, '.', '');
    $deposit = $this->save();
 
    $historic = auth()->user()->historics()->create([
 
     'type'         => 'I',
     'amount'       => $value,
     'total_before' => $totalBefore,
     
     'date'         => date('Ymd'),
 
 
 
    ]);
 
 
    if ($deposit && $historic) {
 
              DB::commit();
            
 
         return [
                'success' => true, 
                'message' => 'Sucesso ao carregar'
 
      
         ];
 
         
 
     }
 
     else{
 
 
         DB::rollback();
 
         
         return [
             'success' => false, 
             'message' => 'Falha ao carregar'      
      
         ];
 
 
     }










}

}