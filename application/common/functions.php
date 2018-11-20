<?php
 function getImageInfo(){
    return 334;
}

function getPageOrSize($page,$page_size){
    $page_size = $page_size?intval($page_size):20;
    $page = intval($page)<1?1:intval($page);
    return array($page,$page_size);
}

function ForcDownload($file_path,$file_name){
    if($file_path==""||$file_name=="")return false;
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$file_name);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));

    ob_clean();
    flush();
    readfile($file_path);
    exit;
}


/*
 *@note 数据转换
 * @param $data arr 转换的数据
 * @param $fiel_array 指定的类型
 * @return array
 * */
function Array_transfrom($data,$field_array=array()){
    $rules=array('1'=>'trim','2'=>'intval','3'=>'doubleval',/*'4'=>'Y-m-d','5'=>'Y-m-d H:i:s'*/);

    if(!is_array($data)||!is_array($field_array))return false;
    $new=array();
    if(count($field_array)){
        foreach($data as $key=>$val){
            foreach($field_array as$k=>$va){
                if(isset($val[$k])){
                    $new[$key][]=$rules[$va]($val[$k]);
                }
            }
        }
    }else{
        foreach($data as $key=>$val){
            $new[]=array_values($val);
        }
    }

    return $new;
}
?>
