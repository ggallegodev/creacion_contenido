<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FFMpeg;
use DateTime;
use SplTempFileObject;
use Image;
use Symfony\Component\Process\Process;

class VideoController extends Controller
{
    public function view(){
        //$path_file=base_path().'/storage/videos/Guadalupe.mp4';
        $video_splits=array
        (           
            /*"P1"	=>	array(	"start_time"	=>	5	,	"end_time"	=>	80	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P2"	=>	array(	"start_time"	=>	313	,	"end_time"	=>	363	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P3"	=>	array(	"start_time"	=>	449	,	"end_time"	=>	533	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P4"	=>	array(	"start_time"	=>	534	,	"end_time"	=>	568	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P5"	=>	array(	"start_time"	=>	577	,	"end_time"	=>	655	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P6"	=>	array(	"start_time"	=>	691	,	"end_time"	=>	746	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P7"	=>	array(	"start_time"	=>	749	,	"end_time"	=>	795	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P8"	=>	array(	"start_time"	=>	847	,	"end_time"	=>	926	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P9"	=>	array(	"start_time"	=>	935	,	"end_time"	=>	985	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),*/
            "P10"	=>	array(	"start_time"	=>	987	,	"end_time"	=>	1029	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),
            "P11"	=>	array(	"start_time"	=>	1049	,	"end_time"	=>	1089	,	"name"	=>	"Un huésped dentro de mi cuerpo"	,),/*
            "P12"	=>	array(	"start_time"	=>	2050	,	"end_time"	=>	2134	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P13"	=>	array(	"start_time"	=>	2155	,	"end_time"	=>	2208	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P14"	=>	array(	"start_time"	=>	2286	,	"end_time"	=>	2330	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P15"	=>	array(	"start_time"	=>	1909	,	"end_time"	=>	1961	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P16"	=>	array(	"start_time"	=>	2011	,	"end_time"	=>	2074	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P17"	=>	array(	"start_time"	=>	2101	,	"end_time"	=>	2163	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P18"	=>	array(	"start_time"	=>	2164	,	"end_time"	=>	2264	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P19"	=>	array(	"start_time"	=>	2363	,	"end_time"	=>	2410	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),
            "P20"	=>	array(	"start_time"	=>	2481	,	"end_time"	=>	2539	,	"name"	=>	"Un huésped dentro de mi cuerpo",	),*/
        
        
        );
            
       /* $video_splits=array
        (    
            
        "P1" => array
            (
            "start_time"=>0,
            "end_time"=>10,
            ),
        "P2" => array
            (
            "start_time"=>263,
            "end_time"=>312,
            ),
        "P3" => array
            (
            "start_time"=>344,
            "end_time"=>382,
            ),
        "P4" => array
            (
            "start_time"=>470,
            "end_time"=>483,
            ),
        "P5" => array
            (
            "start_time"=>659,
            "end_time"=>695,
            ),
        "P6" => array
            (
            "start_time"=>705,
            "end_time"=>764,
            ),
        "P7" => array
            (
            "start_time"=>825,
            "end_time"=>863,
            ),
        "P10" => array
            (
            "start_time"=>1167,
            "end_time"=>1246,
            ),
        "P11" => array
            (
            "start_time"=>1405,
            "end_time"=>1472,
            ),
        "PRUEBA" => array
            (
            "start_time"=>180,
            "end_time"=>200,
            ),
        );*/
        
        foreach($video_splits as $split=>$time)
        {
            //dd($split);
            //dd($time['start_time'],$time['end_time'],$time['name'],$split);
            FFMpeg::open('Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4')
            ->export()
            ->inFormat(new \FFMpeg\Format\Video\X264)
            ->addFilter('-ss', \FFMpeg\Coordinate\TimeCode::fromSeconds($time['start_time']))
            ->addFilter('-to', \FFMpeg\Coordinate\TimeCode::fromSeconds($time['end_time']))
            ->save('Palpito '.$split.'-'.$time['name'].'E2T1.mp4');  


    
            //dd($command5);
            system('rm /usr/share/laravel-apps/cut-images2/storage/app/pruebaImage.mp4');
            //dd($command1);
            system($command5);

        }     

/*
        foreach($video_splits as $split=>$time)
        {
            //dd($split);
            FFMpeg::open('COMO_DICE_EL_DICHO_T4_E61_EN_BOCA_DEL_MENTIROSO_HASTA_LO_CIERTO.mp4')
            ->export()
            ->inFormat(new \FFMpeg\Format\Video\X264)
            ->addFilter('-ss', \FFMpeg\Coordinate\TimeCode::fromSeconds($time['start_time']))
            ->addFilter('-to', \FFMpeg\Coordinate\TimeCode::fromSeconds($time['end_time']))
            ->save('COMO_DICE_EL_DICHO - '.$split.'E61T4.mp4'); 
            ->save('CDED '.$split.'E1' );            
            
        }*/
        return view('welcome');
    }

    public function overlay(){
        // create temp file
        //$temp = new SplTempFileObject();

        // get its file path
        //$tempPath = tempnam(sys_get_temp_dir(), $temp);

        // open the file
        //$file = fopen($tempPath, "w");

        //$image = new Imagick(base_path() . '/storage/app/Baner.png');
       
        //$image  =  Image::make(base_path() . '/storage/app/Baner.png');


        // write the image to the temp file
        //$image->setImageFormat('png');
        //$image->writeImageFile($file);

        // overlay the image using the temp file path
/*
        $video = FFMpeg::open('01 - Pálpito Tl.mp4');
        $video
        ->filters()
        ->watermark($tempPath, array(
        'position' => 'absolute',
            'x' => $xOffset,
            'y' => $yOffset,
        ));
        

        $video->save(new FFMpeg\Format\Video\X264(), 'output.mp4');*/
        //$text='Titulo del video para mirar si justifica';
        //$command = "text='$text': fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80: box=1: boxcolor=black: boxborderw=5: x=(w-text_w)/2: y=(h-text_h)/2:";
        //$format = new FFMpeg\Format\Video\X264();
        //$format->setAudioCodec("aac");
        $outputFile = 'pruebaPad.mp4';
        $videoFile = 'in.mp4';
        //dd($videoFile);
        /*FFMpeg::open('in.mp4')
        
        //->addFilter('-ss', \FFMpeg\Coordinate\Filters\Video\PadFilter::fromSeconds($time['start_time']))
        //->addCommand('-vf', 'crop=712:534')
        //->filters()->crop($this->point, $this->dimension)
        /*->export()
        ->inFormat(new \FFMpeg\Format\Video\X264)
        ->addFilter(function ($filters) {

            $text1='This is text line 1';
            $text2='This is text line 2';
            //$command1 = "drawtext=text='$text': x=(w-text_w)/2:y=(h-text_h)/2 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80: box=1: boxcolor=black@0.5: boxborderw=5: x=(w-text_w)/2: y=(h-text_h)/10:";
            $command1 = "drawtext=fontfile=OpenSans-Regular.ttf: text=$text1:x=(w-tw)/2:y=((h-text_h)/2)-(text_h-(th/4)): fontsize=55: fontcolor=red, drawtext=fontfile=OpenSans-Regular.ttf: text=$text2:x=(w-tw)/2:y=((h-text_h)/2)+(text_h-(th/4)): fontsize=55: fontcolor=green[out]";
            //$command = '"in_w:in_h-60:0:30",pad="in_w:in_h+60:0:-30"';
            //dd( $command);
            $command2 = "pad=720:1280:(ow-iw)/2:(oh-ih)/2:black";

            $filters->custom($command2.','.$command1);


        })
        ->save('/usr/share/laravel-apps/cut-images2/storage/app/pruebaPad.mp4');*/            
        $text='Titulo del video mas largo';
        $text1='Maria Corre y';
        $text2='no sabe lo ';
        $text3='que le espera';

        //Escale the video 9:16 format
        //$command2 ='ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/in.mp4 -vf "pad=720:1280:(ow-iw)/2:(oh-ih)/2:black"  -codec:a copy /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad.mp4';       
        //Add Title
        //$command1= 'ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad.mp4 -vf "drawtext=text='.$text.': x=(w-text_w)/2:y=(h-text_h)/2 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80: box=1: boxcolor=black@0.5: boxborderw=5: x=(w-text_w)/2: y=(h-text_h)/10:" -codec:a copy /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad2.mp4';
        //$command1= 'ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad.mp4 -vf "drawtext=text='.$text1.': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80 , drawtext=text='.$text2.': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80 , drawtext=text='.$text3.': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80" -codec:a copy /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad2.mp4';
        //$command4= 'ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad.mp4 -vf "drawtext=fontfile=OpenSans-Regular.ttf: text='.$text1.':x=(w-tw)/2:y=((h-text_h)/2)-(text_h-(th/4)): fontsize=55: fontcolor=white, drawtext=fontfile=OpenSans-Regular.ttf: text='.$text2.':x=(w-tw)/2:y=((h-text_h)/2)+(text_h-(th/4)): fontsize=55: fontcolor=white" -codec:a copy /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad2.mp4';       
        //$command4= 'ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad.mp4 -vf "drawtext=fontfile=OpenSans-Regular.ttf: text='.$text1.':x=(w-text_w)/2:y=(h-text_h)/2: fontsize=55: fontcolor=white, drawtext=fontfile=OpenSans-Regular.ttf: text='.$text2.':x=(w-text_w)/2:y=(h-text_h)/2+(text_h-(th/4)): fontsize=55: fontcolor=white" -codec:a copy /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad2.mp4';
        //Add banner
        //$command3= 'ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/pruebaPad2.mp4 -i /usr/share/laravel-apps/cut-images2/storage/app/Baner.jpg -vf "[0:v][1:v] overlay=(W-w)/2:900" -c:a copy /usr/share/laravel-apps/cut-images2/storage/app/pruebaImage.mp4';
        
        $command5='ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/in.mp4 -i /usr/share/laravel-apps/cut-images2/storage/app/palpito2.jpg -filter_complex ';
        $command5=$command5.'"[0:v]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
        $command5=$command5.'[padded][1:v] overlay=(W-w)/2:900 ,drawtext=text='.$text1.': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80, ';
        $command5=$command5.'drawtext=text='.$text2.': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80, ';
        $command5=$command5.'drawtext=text='.$text3.': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80  [out]" ';
        $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/pruebaImage.mp4';

        //dd($command5);
        system('rm /usr/share/laravel-apps/cut-images2/storage/app/pruebaImage.mp4');
        //dd($command1);
        system($command5);



       // $process = new Process([$command3]);

        //$process->run();

        return view('welcome');

    }


    public function cded(){
        
        $video_splits=array
        (           
           /* "P1"	=>	array(	"start_time"	=>	211	,	"end_time"	=>	253	,	"name"	=>	'El Padre de Rebeca se suicida'	,),
            "P2"	=>	array(	"start_time"	=>	255	,	"end_time"	=>	312	,	"name"	=>	'Rebeca aparenta con su amiga'	,),
            "P3"	=>	array(	"start_time"	=>	448	,	"end_time"	=>	489	,	"name"	=>	'Se sintio  abandonada por sus Padres'	,),
            "P4"	=>	array(	"start_time"	=>	570	,	"end_time"	=>	633	,	"name"	=>	'Rebeca se inventa novios e historias'	,),
            "P5"	=>	array(	"start_time"	=>	660	,	"end_time"	=>	701	,	"name"	=>	'Rebeca se hace la victima para todo'	,),
            "P6"	=>	array(	"start_time"	=>	703	,	"end_time"	=>	768	,	"name"	=>	'Su madre empieza a darse cuenta que su hija es Mentirosa'	,),*/
            "P7"	=>	array(	"start_time"	=>	904	,	"end_time"	=>	959	,	"name"	=>	'Dice que  es adoptada, y que su madre la odia, Rebeca esta loca'	,),
            "P8"	=>	array(	"start_time"	=>	1025	,	"end_time"	=>	1111	,	"name"	=>	'Se manda mensajes de amor ella misma y su mama cree que  le gustan las mujeres'	,),
            "P9"	=>	array(	"start_time"	=>	1276	,	"end_time"	=>	1343	,	"name"	=>	'Ahora dice que  Fran la acosabaa, rebeca no para de mentir'	,),
            "P10"	=>	array(	"start_time"	=>	1343	,	"end_time"	=>	1400	,	"name"	=>	'Rebeca consigue con mentiras,  toda la atencion de Fran'	,),
            "P11"	=>	array(	"start_time"	=>	1404	,	"end_time"	=>	1470	,	"name"	=>	'Rebeca esta en apuros con todas sus mentiras'	,),
            "P12"	=>	array(	"start_time"	=>	1502	,	"end_time"	=>	1544	,	"name"	=>	'Rebeca dice que su amiga le hace bullyng'	,),
            "P13"	=>	array(	"start_time"	=>	1740	,	"end_time"	=>	1780	,	"name"	=>	'Carolina es golpeada en la escuela, por culpa de Rebeca'	,),
            "P14"	=>	array(	"start_time"	=>	1830	,	"end_time"	=>	1880	,	"name"	=>	'La madre de rebeca la defiende del supuesto acosador'	,),
            "P15"	=>	array(	"start_time"	=>	1909	,	"end_time"	=>	1961	,	"name"	=>	'Carolina le reclama a Rebeca por sus mentiras'	,),
            "P16"	=>	array(	"start_time"	=>	2011	,	"end_time"	=>	2074	,	"name"	=>	'Fran se da cuenta de tiodas las mentiras de Rebeca'	,),
            "P17"	=>	array(	"start_time"	=>	2101	,	"end_time"	=>	2163	,	"name"	=>	'La madre de rebeca llora con las mentiras de su hija'	,),
            "P18"	=>	array(	"start_time"	=>	2164	,	"end_time"	=>	2264	,	"name"	=>	'El Padre de Rebeca se suicido por una mentira de su hija'	,),
            "P19"	=>	array(	"start_time"	=>	2363	,	"end_time"	=>	2410	,	"name"	=>	'Rebeca  tiene ayuda profesional por su mitomania'	,),
            "P20"	=>	array(	"start_time"	=>	2481	,	"end_time"	=>	2539	,	"name"	=>	'Carolina y Fran terminan enamorados'	,),
        );
         foreach($video_splits as $split=>$time)
        {
            FFMpeg::open('COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4')
            ->export()
            ->inFormat(new \FFMpeg\Format\Video\X264)
            ->addFilter('-ss', \FFMpeg\Coordinate\TimeCode::fromSeconds($time['start_time']))
            ->addFilter('-to', \FFMpeg\Coordinate\TimeCode::fromSeconds($time['end_time']))
            ->save('CDED '.$split.'-'.$time['name'].'E109T4.mp4');  

        }     


        $command5='ffmpeg -i /usr/share/laravel-apps/cut-images2/storage/app/in.mp4 -i /usr/share/laravel-apps/cut-images2/storage/app/Palpito2.png -filter_complex ';
        $command5=$command5.'"[0:v]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
        $command5=$command5.'[padded][1:v] overlay=(W-w)/2:900 ,drawtext=text='.$text1.': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80, ';
        $command5=$command5.'drawtext=text='.$text2.': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80, ';
        $command5=$command5.'drawtext=text='.$text3.': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=80  [out]" ';
        $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/pruebaImage.mp4';

        dd($command5);
        system('rm /usr/share/laravel-apps/cut-images2/storage/app/pruebaImage.mp4');
        //dd($command1);
        system($command5);
        return view('welcome');
    }

    public function palpito(){
        //El titilo no puede llevar tildes y debe ser cada parte menor a 18 letras incluidos los espacios
        $video_splits=array
        (           
            /*"P12"	=>	array(	"start_time"	=>	'00:23:16'	,	"end_time"	=>	'00:24:42'    ,	"title1"	=>	'Encuentran algo'	,"title2"	=>	'horrible debajo'	,"title3"	=>	'del rio'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),*/
            /*"P13"	=>	array(	"start_time"	=>	'00:26:46'	,	"end_time"	=>	'00:27:39'	,	"title1"	=>	'La secuestraron'	,"title2"	=>	'por trafico'	,"title3"	=>	'de organos'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P14"	=>	array(	"start_time"	=>	'00:27:50'	,	"end_time"	=>	'00:28:57'	,	"title1"	=>	'Buscara a los'	,"title2"	=>	'asesinos de '	,"title3"	=>	'Valeria'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),*/
            "P16"	=>	array(	"start_time"	=>	'00:32:00'	,	"end_time"	=>	'00:33:24'	,	"title1"	=>	'Historias de amor'	,"title2"	=>	'que te arrancan'	,"title3"	=>	'el corazon'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        );
         foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].' -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -filter_complex ';
            //Pad video
            $command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            $command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:900 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.$data['episode'].$split.': x=(w-text_w)/2:y=1060 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=35 [out]" ';
            //Add subtitles
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4';

            //dd($command5);
            system($command5);

        }     


        return view('welcome');
    }
    
    
}
