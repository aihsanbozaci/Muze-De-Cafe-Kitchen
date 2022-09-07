<?php
//Upload dizini
$upload_dir = array(
    'img'=> '../../assets/images',
);

//Kabul edilen resim özellikleri
$imgset = array(
    'maxsize' => 2000,
    'maxwidth' => 1024,
    'maxheight' => 800,
    'minwidth' => 10,
    'minheight' => 10,
    'type' => array('bmp', 'gif', 'jpg', 'jpeg', 'png'),
);

//0 = Üzerine yaz, 1 = Yeniden adlandır
define('RENAME_F', 1);
function setFName($p, $fn, $ex, $i){
    if(RENAME_F ==1 && file_exists($p .$fn .$ex)){
        return setFName($p, F_NAME .'_'. ($i +1), $ex, ($i +1));
    }else{
        return $fn .$ex;
    }
}

$re = '';
if(isset($_FILES['upload']) && strlen($_FILES['upload']['name']) > 1) {

    define('F_NAME', preg_replace('/\.(.+?)$/i', '', basename($_FILES['upload']['name'])));  

    //Uzantıyı sil ve dosya adını al
    $sepext = explode('.', strtolower($_FILES['upload']['name']));
    $type = end($sepext);    /** Uzantı alındı **/
   
    //Yükleme dizini
    $upload_dir = in_array($type, $imgset['type']) ? $upload_dir['img'] : $upload_dir['audio'];
    $upload_dir = trim($upload_dir, '/') .'/';

    //Dosya türünü doğrula
    if(in_array($type, $imgset['type'])){
        //Genişlik ve uzunluğu al
        list($width, $height) = getimagesize($_FILES['upload']['tmp_name']);

        if(isset($width) && isset($height)) {
            if($width > $imgset['maxwidth'] || $height > $imgset['maxheight']){
                $re .= '\\n Width x Height = '. $width .' x '. $height .' \\n Maksimum çözünürlük: '. $imgset['maxwidth']. ' x '. $imgset['maxheight'];
            }

            if($width < $imgset['minwidth'] || $height < $imgset['minheight']){
                $re .= '\\n Width x Height = '. $width .' x '. $height .'\\n Minimum çözünürlük: '. $imgset['minwidth']. ' x '. $imgset['minheight'];
            }

            if($_FILES['upload']['size'] > $imgset['maxsize']*1000){
                $re .= '\\n Kabul edilen maksimum dosya boyutu: '. $imgset['maxsize']. ' KB.';
            }
        }
    }else{
        $re .= $_FILES['upload']['name']. ' geçersiz uzantıya sahip!';
    }
   
    //Upload dizinini al
    $f_name = setFName($_SERVER['DOCUMENT_ROOT'] .'/'. $upload_dir, F_NAME, ".$type", 0);
    $uploadpath = $upload_dir . $f_name;

    //Hata yoksa upload et, varsa bildir.
    if($re == ''){
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) {
            $CKEditorFuncNum = $_GET['CKEditorFuncNum'];
            $url = 'ckeditor/'. $upload_dir . $f_name;
            $msg = F_NAME .'.'. $type .' Başarıyla yüklendi: \\n- Boyut: '. number_format($_FILES['upload']['size']/1024, 2, '.', '') .' KB';
            $re = in_array($type, $imgset['type']) ? "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>":'<script>var cke_ob = window.parent.CKEDITOR; for(var ckid in cke_ob.instances) { if(cke_ob.instances[ckid].focusManager.hasFocus) break;} cke_ob.instances[ckid].insertHtml(\' \', \'unfiltered_html\'); alert("'. $msg .'"); var dialog = cke_ob.dialog.getCurrent();dialog.hide();</script>';
        }else{
            $re = '<script>alert("Dosya yüklenemiyor!")</script>';
        }
    }else{
        $re = '<script>alert("'. $re .'")</script>';
    }
}

//HTML Çıktı
@header('Content-type: text/html; charset=utf-8');
echo $re;
?>