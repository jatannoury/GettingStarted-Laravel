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
        $all_students=["toni","joseph","aya","hamza","batoul","hoda"];
        $groups=[];
        while ($all_students){
            if (count($all_students)==1){
                array_push($groups,[$all_students[0]]);
                break;
            }
            print(count($all_students));
            $rand_int1=rand(0,count($all_students)-2);
            $rand_int2=rand(0,count($all_students)-2);
            $group=[$all_students[$rand_int1],$all_students[$rand_int2]];
            array_push($groups,$group);
            unset($all_students[$rand_int1]);
            unset($all_students[$rand_int2-1]);
        }
        return $groups;
    }



}