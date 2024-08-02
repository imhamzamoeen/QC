<?php

namespace App\Imports;

use App\Models\HeightWeightModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SeniorLifeHeightWeight implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $firstRow = [];
        $arr=[];
        foreach ($collection as $key => $value) {
            if ($key == 0)
                $firstRow = $value;
            else if(gettype($value[0])=="string" && gettype($value[1])=="integer") {   //yaani k eik heeight h jo string mai likhi hui and dosra woh h wight
              if(strpos($value[0], 'and')){
                  //it means k yeh 0 s start hoga

                  $what_value=$value[0];
                  $what_value=(preg_replace('/[\@\.\;\" "]+/', '', $what_value)); 
                  $what_value=str_replace("'",".",$what_value);       //convert ' to 
                  $what_value=str_replace("and","-",$what_value);       //convert ' to 
                  $what_value=str_replace("below","0.0",$what_value);       //convert below to 0 
            
                  $range=explode('-',$what_value);  
                //  dd( fmod(0.11,0.11));
                  $argument1=(float)$range[0];
                  $argument2=(float)$range[1];
                  $argument1=floor($argument1)+((fmod($argument1,floor($argument1)))/10);       // lets say argument 2 was 2.5 then it makes it 2.05 q k loop neechy is trh chal rha 
                    $counter = 0;       //because php does not get 0.11 
                  for($i=$argument2;$i<=$argument1;$i=$i+0.01){
                    array_push($arr,$i);
                    array_push($arr,$value[1]);
                    HeightWeightModel::updateOrCreate(
                        [
                            'height' => floor($i)+($counter/($counter>=10 ? 100 : 10)) ,          //yhan par policy_id b aaye ga ..yaani policy id and age same hn tu ..update else insert
                        ],
                        [
                            'height' => floor($i)+($counter/($counter>=10 ? 100 : 10)) ,
                            'min_weight' => 0,   //becuase senior life only has 
                            'max_weight' =>  $value[1],
                       
                        ]

                    );
                       if($counter==12){
                           $counter=0; 
                             //counter ko dobara zero s kro
                        $i=$i+0.88;
                     
                       }
                       $counter++;
                }
                    
              } else if(strpos($value[0], '-') ){
                  
                
                    //it means k is k andar range h and loop lgy ga
                    $what_value=$value[0];
                    $what_value=(preg_replace('/[\@\.\;\" "]+/', '', $what_value));   //removes some special character form string 
                    $what_value=str_replace("'",".",$what_value);       //convert ' to . 
                    $range=explode('-',$what_value);    
                         
                        // dd(fmod(0.5,0));
                        $argument1=(float)$range[0];
                        $argument2=(float)$range[1];

                        // $argument1>$argument2 ?  $argument1=floor($argument1)+((fmod($argument1,floor($argument1)))/10) :  $argument2=floor($argument2)+((fmod($argument2,floor($argument2)))/10);
                        $argument1=floor($argument1)+((fmod($argument1,floor($argument1)))/10);
                        $argument2=floor($argument2)+((fmod($argument2,floor($argument2)))/10);
                        if(is_nan($argument1)){
                            // dd("adar");
                                    $argument1=((float)$range[0]/10);

                        }
                       if(is_nan($argument2) ){
                        $argument2=((float)$range[1]/10);
                        }
                        
                         

                        // $argument1>=10 ? $argument1=floor($argument1)+((fmod($argument1,floor($argument1)))/100):  $argument1=floor($argument1)+((fmod($argument1,floor($argument1)))/10);
                        // $argument2>=10 ?  $argument2=floor($argument2)+((fmod($argument2,floor($argument2)))/100) :  $argument2=floor($argument2)+((fmod($argument2,floor($argument2)))/10); 
                        // $argument1>$argument2 ?  $counter=($argument1)  : ;
                        $counter=$argument1*10;     //lets say 2.06 to 20.6
                        $counter=(fmod($counter,(floor($counter))) * 10);  // it will give me 6 from 20.6
                        if(is_nan($counter)){
                            $counter=0;
                        }


                        $argument1>$argument2 ?  $old_argument1=$argument1 : $old_argument1=0;
                        $argument1>$argument2 ?  $argument1=floor($argument1)+((fmod($argument1,floor($argument1)))/10) : '';
                        // dd($argument1,$argument2,$counter,$old_argument1);
                   
                        for($i=$argument1;$i<=$argument2;){
                            
                            array_push($arr,$i);
                            array_push($arr,$value[1]);
                            array_push($arr,floor($i)+($counter/($counter>=10 ? 100 : 10)));

                    
                        HeightWeightModel::updateOrCreate(
                            [
                                'height' => floor($i)+($counter/($counter>=10 ? 100 : 10)),          //yhan par policy_id b aaye ga ..yaani policy id and age same hn tu ..update else insert
                            ],
                            [
                                'height' =>floor($i)+($counter/($counter>=10 ? 100 : 10)),
                                'min_weight' => 0,   //becuase senior life only has 
                                'max_weight' =>  $value[1],
                           
                            ]
                        );

                        

                        $counter++;
                        if($counter/(10)>1.2){
                            // dd($counter);
                            $counter=0;
                            $i=$i+0.87;
                        }
                       
                        // $argument1<$argument2  ? $i=$i+0.001 : $i=$i+0.01;
                        if($old_argument1<$argument2){
                            // dd('if',$old_argument1,$argument1,$argument2,$counter,$i); 
                            $i=$i+0.01;
                        }
                        else{
                            // dd('else',$argument1,$argument2,$counter,$i);
                            $i=$i+0.001;
                        }
                        // dd($i);
                    }
                  
                }
            
                else{
                    $what_value=$value[0];
                    $what_value=(preg_replace('/[\@\.\;\" "]+/', '', $what_value));   //removes some special character form string 
                    $what_value=str_replace("'",".",$what_value);       //convert ' to . 
                    array_push($arr,$what_value);
                    array_push($arr,$value[1]);

                    HeightWeightModel::updateOrCreate(
                        [
                            'height' => $what_value         //yhan par policy_id b aaye ga ..yaani policy id and age same hn tu ..update else insert
                        ],
                        [
                            'height' => $what_value,
                            'min_weight' => 0,   //becuase senior life only has 
                            'max_weight' =>  $value[1],
                       
                        ]
                    );
                }

            }
          
        }
        // dd($arr);
    }
}
