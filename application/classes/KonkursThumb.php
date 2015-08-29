<?php

defined('SYSPATH') or die('No direct script access.');

class KonkursThumb {

    public static function get($file, $parentDir, $width, $height, $mode) {
        $image = Image::factory('assets/default/photos/' . $parentDir.'/'.$file);

if($mode==1){

        $dirMiddleThumb = 'assets/default/photos/' . $parentDir . '/middle';

        if (!is_dir($dirMiddleThumb))
            mkdir($dirMiddleThumb);


        if (@fopen($dirMiddleThumb . '/' . $file, "r")) {
            return true;
        } else {
           $image->resize($width+100, $height+100, Image::INVERSE)
                   ->crop($width, $height)
                ->save($dirMiddleThumb . '/' . $file);
        }
    }
    else if($mode==2){
  $dirTinyThumb = 'assets/default/photos/' . $parentDir . '/tiny';

        if (!is_dir($dirTinyThumb))
            mkdir($dirTinyThumb);


        if (@fopen($dirTinyThumb . '/' . $file, "r")) {
            return true;
        } else {
            $image->resize($width+100, $height+100, Image::INVERSE)
                   ->crop($width, $height)
                    ->save($dirTinyThumb . '/' . $file);
        }
    }
    
    if($mode==3){
        
        
        $dirCabinetThumb = 'assets/default/photos/' . $parentDir . '/cabinet';

        if (!is_dir($dirCabinetThumb))
            mkdir($dirCabinetThumb);


        if (@fopen($dirCabinetThumb . '/' . $file, "r")) {
            return true;
        } else {
            $image->resize($width+100, $height+100, Image::INVERSE)
                   ->crop($width, $height)
                    ->save($dirCabinetThumb . '/' . $file);
        }
    }
    
    }
    
    public static function parse_youtube_url($url,$return='embed',$width='',$height='',$rel=0){
    $urls = parse_url($url);
 
    //url is http://youtu.be/xxxx
    if($urls['host'] == 'youtu.be'){ 
        $id = ltrim($urls['path'],'/');
    }
    //url is http://www.youtube.com/embed/xxxx
    else if(strpos($urls['path'],'embed') == 1){ 
        $id = end(explode('/',$urls['path']));
    }
     //url is xxxx only
    else if(strpos($url,'/')===false){
        $id = $url;
    }
    //http://www.youtube.com/watch?feature=player_embedded&v=m-t4pcO99gI
    //url is http://www.youtube.com/watch?v=xxxx
    else{
        parse_str($urls['query']);
        $id = $v;
        if(!empty($feature)){
            $id = end(explode('v=',$urls['query']));
        }
    }
    //return embed iframe
    if($return == 'embed'){
        return '</pre>
<iframe src="http://www.youtube.com/embed/'.$id.'?rel='.$rel.'" frameborder="0" width="'.($width?$width:560).'" height="'.($height?$height:349).'"></iframe>
<pre>';
    }
    //return normal thumb
    else if($return == 'thumb'){
        return 'http://i1.ytimg.com/vi/'.$id.'/default.jpg';
    }
    //return hqthumb
    else if($return == 'hqthumb'){
        return 'http://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
    }
    // else return id
    else{
        return $id;
    }
}

    
    
    

}