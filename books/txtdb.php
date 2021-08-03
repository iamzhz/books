<?php
    function getGb($isbn, $a=0){
        if($a==1) $b=$isbn;
        else $b="txt\\".$isbn.".txt";
        
        @$nr = file($b);
        if($nr == false)
            return 0;
        return $nr;
         // 0 名称 1 是否借出
    }
    function putGb($isbn, $nr, $a = 0){
        $fp = fopen("txt\\".$isbn.".txt", 'w');
        if($a == 1){
            fwrite($fp, $nr[0].$nr[1]."\n".$nr[2]);
        }else{
            fwrite($fp, $nr[0]."\n".$nr[1]."\n".$nr[2]);
            fclose($fp);
        }
    } // 调用此函数的看有没有nr[2] （默认为"0"）
// function

function read_all ($dir){
         $a = array();
         $i = 0;
         if(!is_dir($dir)) return false;
         
         $handle = opendir($dir);
     
         if($handle){
             while(($fl = readdir($handle)) !== false){

                 $temp = $dir.DIRECTORY_SEPARATOR.$fl;
                 //如果不加  $fl!='.' && $fl != '..'  则会造成把$dir的父级目录也读取出来
                 if(is_dir($temp) && $fl!='.' && $fl != '..'){
                    
                 }else{
                     if($fl!='.' && $fl != '..'){
     
                        $a[$i] = $temp;
                        $i = $i + 1;
                     }
                 }
             }
         }
         return array($i,$a);
     }
?>

