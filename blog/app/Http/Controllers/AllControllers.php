<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllControllers extends Controller
{
     
    public function countPalindromes(){
         $count=0;
         $array=["level","HannaH","HllH","hahau"];
        
        foreach($array as $x){
            $i=0;
            $j=strlen($x)-1;
            $state=TRUE;
            while ($i<$j){
                
                if ($x[$i]<>$x[$j]){
                    $state=FALSE;
                    break;
                }
                $i+=1;
                $j-=1;
            }
            if ($state){$count+=1;}
        }
        return $count;
    }
    public function getTime(){
        $date = date('d-m-y ');
        $days=date("d");
        $months=date("m");
        $year=date("y");
        return (17-$days)*24*3600+($months-4)*30*24*3600+((2000+$year)-1732)*12*30*24*3600;
    }

    public function printText(){
        $object= file_get_contents("https://icanhazdadjoke.com/slack");
        $object=json_decode($object, true);
        $object=reset($object["attachments"]);
         return $object["text"];
        return $object;
    }

    public function setGroups(){
        $all_students=["toni","joseph","aya","hamza","batoul","hoda","Tarek"];
        $groups=[];
        if (count($all_students)%2!=0){
            array_push($groups,[$all_students[count($all_students)-1]]);
            array_pop($all_students);
        }
        for ($i=0; $i<count($all_students);$i+=2){
            $curr_group=[$all_students[$i],$all_students[$i+1]];
            array_push($groups,$curr_group);
        }
            
        return $groups;
        
    }

    public function randomNominee(){
        $students=["toni","joseph","aya","hamza","batoul","hoda","Tarek"];
        $pick=rand(0,count($students)+5);
        if ($pick<count($students)){
            return $students[$pick];
        }
        return "Pablo";
    }

    public function randomRecipe(){
        $object= file_get_contents("https://api.punkapi.com/v2/beers");
        $object=json_decode($object, true);
        return $object[rand(0,count($object)-1)]["ingredients"];
    }



}