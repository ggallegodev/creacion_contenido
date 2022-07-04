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
           "P1"	=>	array(	"start_time"	=>	211	,	"end_time"	=>	253	,	"name"	=>	'El Padre de Rebeca se suicida'	,),
            /*"P2"	=>	array(	"start_time"	=>	255	,	"end_time"	=>	312	,	"name"	=>	'Rebeca aparenta con su amiga'	,),
            "P3"	=>	array(	"start_time"	=>	448	,	"end_time"	=>	489	,	"name"	=>	'Se sintio  abandonada por sus Padres'	,),
            "P4"	=>	array(	"start_time"	=>	570	,	"end_time"	=>	633	,	"name"	=>	'Rebeca se inventa novios e historias'	,),
            "P5"	=>	array(	"start_time"	=>	660	,	"end_time"	=>	701	,	"name"	=>	'Rebeca se hace la victima para todo'	,),
            "P6"	=>	array(	"start_time"	=>	703	,	"end_time"	=>	768	,	"name"	=>	'Su madre empieza a darse cuenta que su hija es Mentirosa'	,),
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
            "P20"	=>	array(	"start_time"	=>	2481	,	"end_time"	=>	2539	,	"name"	=>	'Carolina y Fran terminan enamorados'	,),*/
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
            "P15"	=>	array(	"start_time"	=>	'00:23:24'	,	"end_time"	=>	'00:24:49'	,"title1"	=>	'Periodista soborna'	,"title2"	=>	'a enfermera por'	,"title3"	=>	'nombre de donante'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P16"	=>	array(	"start_time"	=>	'00:24:53'	,	"end_time"	=>	'00:26:10'	,"title1"	=>	'Simon en peligro'	,"title2"	=>	'buscando los'	,"title3"	=>	'traficantes'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P17"	=>	array(	"start_time"	=>	'00:26:48'	,	"end_time"	=>	'00:28:02'	,"title1"	=>	'Zacarias amenaza'	,"title2"	=>	'al amigo de Camila'	,"title3"	=>	'para callarlo'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P18"	=>	array(	"start_time"	=>	'00:31:52'	,	"end_time"	=>	'00:33:19'	,"title1"	=>	'Simon ve'	,"title2"	=>	'en Camila'	,"title3"	=>	'a su esposa'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P19"	=>	array(	"start_time"	=>	'00:35:20'	,	"end_time"	=>	'00:36:02'	,"title1"	=>	'Golpean '	,"title2"	=>	'y secuestran'	,"title3"	=>	'a Simon'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P20"	=>	array(	"start_time"	=>	'00:36:41'	,	"end_time"	=>	'00:37:36'	,"title1"	=>	'Los traficantes'	,"title2"	=>	'le dan una golpiza'	,"title3"	=>	'a Simon'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P21"	=>	array(	"start_time"	=>	'00:39:31'	,	"end_time"	=>	'00:40:28'	,"title1"	=>	'Simon acepta '	,"title2"	=>	'la invitacion de '	,"title3"	=>	'Camila'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P22"	=>	array(	"start_time"	=>	'00:40:29'	,	"end_time"	=>	'00:41:02'	,"title1"	=>	'Zacarias'	,"title2"	=>	'ridiculiza'	,"title3"	=>	'a Simon'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P23"	=>	array(	"start_time"	=>	'00:41:03'	,	"end_time"	=>	'00:41:49'	,"title1"	=>	'Simon encuentra'	,"title2"	=>	'algo inseperado'	,"title3"	=>	'en la exposicion'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        );
         foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].' -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time -crf 9 (0-51) Calidad
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -crf 9 -preset veryfast -filter_complex ';
            //Pad video
            //$command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            //$command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            $command5=$command5.'"[0:v]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';     
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:900 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.$data['episode'].$split.': x=(w-text_w)/2:y=1060 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=35 [title], ';
            //Scale the video
            $command5=$command5.'[title] scale=352:640 [out]" ';
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4';

            //dd($command5);
            system($command5);

        }     


        return view('welcome');
    }

    public function cded2(){
        
        $video_splits=array
        (           
            /*"P1"	=>	array(	"start_time"	=>	'00:00:44'	,	"end_time"	=>	'00:01:26'	,"title1"	=>	'SANTIAGO TIENE UN'	,"title2"	=>	'LLAMADO DE ATENCION'	,"title3"	=>	'DE SU ENTRENADOR'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P2"	=>	array(	"start_time"	=>	'00:01:41'	,	"end_time"	=>	'00:02:30'	,"title1"	=>	'SANTIAGO  '	,"title2"	=>	'TOMA PASTILLAS'	,"title3"	=>	'PARA ENTRENAR'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P3"	=>	array(	"start_time"	=>	'00:03:47'	,	"end_time"	=>	'00:04:40'	,"title1"	=>	'MADRE DE SANTIAGO'	,"title2"	=>	'ES UNA DEPORTISTA'	,"title3"	=>	'FRUSTRADA'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P4"	=>	array(	"start_time"	=>	'00:07:32'	,	"end_time"	=>	'00:08:37'	,"title1"	=>	'LEANDRO TIENE'	,"title2"	=>	'UNA ACTITUD RARA'	,"title3"	=>	'CON ROSA'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P5"	=>	array(	"start_time"	=>	'00:08:39'	,	"end_time"	=>	'00:09:20'	,"title1"	=>	'LEANDRO AMENAZA'	,"title2"	=>	'A ROSA CON '	,"title3"	=>	'SACARLA DEL EQUIPO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P6"	=>	array(	"start_time"	=>	'00:11:00'	,	"end_time"	=>	'00:12:11'	,"title1"	=>	'ROSA QUIERE DECIR'	,"title2"	=>	'ALGO PERO NO'	,"title3"	=>	'SE ATREVE'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P7"	=>	array(	"start_time"	=>	'00:14:02'	,	"end_time"	=>	'00:15:11'	,"title1"	=>	'ROSA ES AMENAZADA'	,"title2"	=>	'POR SU ENTRENADOR'	,"title3"	=>	'DE HACERLE DAÑO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            */"P8"	=>	array(	"start_time"	=>	'00:15:16'	,	"end_time"	=>	'00:16:25'	,"title1"	=>	'LEANDRO LE PIDE'	,"title2"	=>	'A SANTIAGO SUBIR '	,"title3"	=>	'MASA CON PASTILLAS'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P9"	=>	array(	"start_time"	=>	'00:16:21'	,	"end_time"	=>	'00:17:07'	,"title1"	=>	'SANTIAFO HABLA'	,"title2"	=>	'QUE LEANDRO TRATA'	,"title3"	=>	'MAL A LAS CHICAS'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P10"	=>	array(	"start_time"	=>	'00:17:13'	,	"end_time"	=>	'00:18:11'	,"title1"	=>	'LA MADRE DE SANTI'	,"title2"	=>	'RECUERDA COMO FUE'	,"title3"	=>	'ABUSADA'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P11"	=>	array(	"start_time"	=>	'00:18:40'	,	"end_time"	=>	'00:19:22'	,"title1"	=>	'ROSA LE RECLAMA'	,"title2"	=>	'A SANTIAGO  '	,"title3"	=>	'POR CALLAR'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P12"	=>	array(	"start_time"	=>	'00:22:00'	,	"end_time"	=>	'00:23:07'	,"title1"	=>	'LEANDRO ALTERA'	,"title2"	=>	'LOS EXAMENES'	,"title3"	=>	'DE SANTIAGO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P13"	=>	array(	"start_time"	=>	'00:23:14'	,	"end_time"	=>	'00:23:55'	,"title1"	=>	'SANTIAGO SABE QUE'	,"title2"	=>	'ROSA SE ACUESTA'	,"title3"	=>	'CON LEANDRO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P14"	=>	array(	"start_time"	=>	'00:26:59'	,	"end_time"	=>	'00:27:39'	,"title1"	=>	'LEANDRO '	,"title2"	=>	'SOLO MERECE'	,"title3"	=>	'LA CARCEL'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P15"	=>	array(	"start_time"	=>	'00:29:00'	,	"end_time"	=>	'00:30:47'	,"title1"	=>	'ROSA EXPLOTA'	,"title2"	=>	'CON TANTO DOLOR'	,"title3"	=>	'QUE LLEVA'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P16"	=>	array(	"start_time"	=>	'00:31:07'	,	"end_time"	=>	'00:31:52'	,"title1"	=>	'SANTIAGO QUIERE'	,"title2"	=>	'DENUNCIAR A'	,"title3"	=>	'LEANDRO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P17"	=>	array(	"start_time"	=>	'00:32:15'	,	"end_time"	=>	'00:33:15'	,"title1"	=>	'SU MAESTRA SABIA'	,"title2"	=>	'QUE TOMABA'	,"title3"	=>	'ANABOLICOS'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P18"	=>	array(	"start_time"	=>	'00:35:11'	,	"end_time"	=>	'00:36:31'	,"title1"	=>	'LEANDRO DICE'	,"title2"	=>	'QUE LAS NIÑAS  '	,"title3"	=>	'SE LE OFRECIAN'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P19"	=>	array(	"start_time"	=>	'00:38:23'	,	"end_time"	=>	'00:39:06'	,"title1"	=>	'SANTIAGO GRABO'	,"title2"	=>	'A LEANDRO COMO'	,"title3"	=>	'CEPTO EL ACOSO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P20"	=>	array(	"start_time"	=>	'00:39:08'	,	"end_time"	=>	'00:40:26'	,"title1"	=>	'ENCUENTRAN A ROSA'	,"title2"	=>	'TIRADA EN EL '	,"title3"	=>	'BAÑO'	,"file"	=>	'COMO_DICE_EL_DICHO_T_10_EP_109_QUIEN_OYE_ADULADOR_NO_ESPERE_OTRO.mp4'	,"episode"	=>	'T4CA109'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        );
        foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'CDED-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].'  -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time  -crf 9 (0-51) Calidad
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -crf 9 -preset veryfast -filter_complex ';
            //Pad video
            //$command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            //$command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            $command5=$command5.'"[0:v]pad=1280:2275:(ow-iw)/2:(oh-ih)/2:black[padded]; ';            
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:1600 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=90 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=90 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=90 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.$data['episode'].$split.': x=(w-text_w)/2:y=1550 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=40 [title], ';
            //Scale the video
            $command5=$command5.'[title] scale=352:640 [out]" ';
            //Add subtitles
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'CDED-'.$split.'-'.$data['episode'].'.mp4';

            //dd($command5);
            system($command5);


        }     
        
        return view('welcome');
    }


    public function cded3(){
        
        $video_splits=array
        (           
            "P1"	=>	array(	"start_time"	=>	'00:01:30'	,	"end_time"	=>	'00:02:25'	,"title1"	=>	'LE HACE TRAGAR LA '	,"title2"	=>	'COMIDA A SU ESPOSA'	,"title3"	=>	'PORQUE ESTA MALUCA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P2"	=>	array(	"start_time"	=>	'00:02:44'	,	"end_time"	=>	'00:03:29'	,"title1"	=>	'MAURICIO LLORA EN'	,"title2"	=>	'LA CASA Y HACE'	,"title3"	=>	'BULLYNG EN ESCUELA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P3"	=>	array(	"start_time"	=>	'00:04:00'	,	"end_time"	=>	'00:05:46'	,"title1"	=>	'SE HACE EL '	,"title2"	=>	'ANGEL PERO ES'	,"title3"	=>	'UN DEMONIO'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P4"	=>	array(	"start_time"	=>	'00:08:10'	,	"end_time"	=>	'00:09:29'	,"title1"	=>	'JORGE ES MUY'	,"title2"	=>	'PELIGROSO CON SU '	,"title3"	=>	'ESPOSA E HIJO'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P5"	=>	array(	"start_time"	=>	'00:10:07'	,	"end_time"	=>	'00:11:16'	,"title1"	=>	'PATO LE TIRA LA'	,"title2"	=>	'COMIDA A PONCHO'	,"title3"	=>	'EL MESERO'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P6"	=>	array(	"start_time"	=>	'00:11:20'	,	"end_time"	=>	'00:12:04'	,"title1"	=>	'JUAN ES TRATADO '	,"title2"	=>	'COMO INDIO COCHINO'	,"title3"	=>	'Y LA PROGE LO IGNORA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P7"	=>	array(	"start_time"	=>	'00:12:10'	,	"end_time"	=>	'00:13:00'	,"title1"	=>	'JUAN VA A LA '	,"title2"	=>	'CLINICA DEL '	,"title3"	=>	'BULLYNG'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P8"	=>	array(	"start_time"	=>	'00:13:16'	,	"end_time"	=>	'00:14:26'	,"title1"	=>	'LA MAESTRA ES'	,"title2"	=>	'NEGLIGENTE Y'	,"title3"	=>	'NO DICE NADA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P9"	=>	array(	"start_time"	=>	'00:14:45'	,	"end_time"	=>	'00:15:57'	,"title1"	=>	'MARINA ACUSA'	,"title2"	=>	'A LOS RESPONSABLES'	,"title3"	=>	'DEL BULLYNG'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P10"	=>	array(	"start_time"	=>	'00:15:59'	,	"end_time"	=>	'00:16:42'	,"title1"	=>	'NO SABE EL '	,"title2"	=>	'HIJO DEMONIO'	,"title3"	=>	'QUE TIENE'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P11"	=>	array(	"start_time"	=>	'00:16:53'	,	"end_time"	=>	'00:18:08'	,"title1"	=>	'SE VAN HACER LOS'	,"title2"	=>	'BUENOS MIENTRAS'	,"title3"	=>	'TODO PASA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P12"	=>	array(	"start_time"	=>	'00:18:35'	,	"end_time"	=>	'00:19:15'	,"title1"	=>	'MARIA ECCHA '	,"title2"	=>	'A PATO '	,"title3"	=>	'DE LA CLINICA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P13"	=>	array(	"start_time"	=>	'00:19:46'	,	"end_time"	=>	'00:20:38'	,"title1"	=>	'PATO SE ENOJA'	,"title2"	=>	'PORQUE SU MADRE '	,"title3"	=>	'VA A SER SU MADRE'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P14"	=>	array(	"start_time"	=>	'00:22:08'	,	"end_time"	=>	'00:22:48'	,"title1"	=>	'MARINA LE SUPLICA'	,"title2"	=>	'A JUAN QUE SALGA'	,"title3"	=>	'DE ESE ESTADO'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P15"	=>	array(	"start_time"	=>	'00:22:50'	,	"end_time"	=>	'00:23:31'	,"title1"	=>	'EL GRUPO'	,"title2"	=>	'VUELVE A '	,"title3"	=>	'HACER BULLYNG'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P16"	=>	array(	"start_time"	=>	'00:23:38'	,	"end_time"	=>	'00:24:30'	,"title1"	=>	'MARINA SE '	,"title2"	=>	'ENFRENTA Y RESULTA'	,"title3"	=>	'GOLPEADA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P17"	=>	array(	"start_time"	=>	'00:24:42'	,	"end_time"	=>	'00:25:30'	,"title1"	=>	'HELENA DEFIENDE'	,"title2"	=>	'A SU HIJO'	,"title3"	=>	'LA JOYITA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P18"	=>	array(	"start_time"	=>	'00:33:36'	,	"end_time"	=>	'00:34:23'	,"title1"	=>	'VUELVE '	,"title2"	=>	'SU PADRE'	,"title3"	=>	'A MALTRATARLOS'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P19"	=>	array(	"start_time"	=>	'00:36:32'	,	"end_time"	=>	'00:38:00'	,"title1"	=>	'MARINA DEJA'	,"title2"	=>	'AL DESCUBIERTO'	,"title3"	=>	'A PATO'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P20"	=>	array(	"start_time"	=>	'00:38:42'	,	"end_time"	=>	'00:39:29'	,"title1"	=>	'PATO QUIERE'	,"title2"	=>	'VENGARSE DE '	,"title3"	=>	'MARINA'	,"file"	=>	'COMO_DICE_EL_DICHO_T4_E48_EL_BUEN_JUEZ_POR_SU_CASA_EMPIEZA.mp4'	,"episode"	=>	'T4CA48'	,"banner"	=>	'comodiceeldicho320.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        );    
        foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'CDED-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].'  -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time  -crf 9 (0-51) Calidad
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -crf 9 -preset veryfast -filter_complex ';
            //Pad video
            //$command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            //$command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            $command5=$command5.'"[0:v]pad=1280:2275:(ow-iw)/2:(oh-ih)/2:black[padded]; ';            
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:1600 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=90 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=90 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=90 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.$data['episode'].$split.': x=(w-text_w)/2:y=1550 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=40 [title], ';
            //Scale the video
            $command5=$command5.'[title] scale=352:640 [out]" ';
            //Add subtitles
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'CDED-'.$split.'-'.$data['episode'].'.mp4';

            //dd($command5);
            system($command5);


        }     
        
        return view('welcome');
    }


    public function test(){
        //El titilo no puede llevar tildes y debe ser cada parte menor a 18 letras incluidos los espacios
        $video_splits=array
        (           
            /*"P12"	=>	array(	"start_time"	=>	'00:23:16'	,	"end_time"	=>	'00:24:42'    ,	"title1"	=>	'Encuentran algo'	,"title2"	=>	'horrible debajo'	,"title3"	=>	'del rio'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),*/
            /*"P13"	=>	array(	"start_time"	=>	'00:26:46'	,	"end_time"	=>	'00:27:39'	,	"title1"	=>	'La secuestraron'	,"title2"	=>	'por trafico'	,"title3"	=>	'de organos'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P14"	=>	array(	"start_time"	=>	'00:27:50'	,	"end_time"	=>	'00:28:57'	,	"title1"	=>	'Buscara a los'	,"title2"	=>	'asesinos de '	,"title3"	=>	'Valeria'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P16"	=>	array(	"start_time"	=>	'00:32:00'	,	"end_time"	=>	'00:33:24'	,	"title1"	=>	'Historias de amor'	,"title2"	=>	'que te arrancan'	,"title3"	=>	'el corazon'	,"file"	=>	'Palpito.S01E02.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA2'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),*/
            /*"P1"	=>	array(	"start_time"	=>	'00:00:47'	,	"end_time"	=>	'00:01:51'	,"title1"	=>	'Amor a '	,"title2"	=>	'primera'	,"title3"	=>	'vista'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	' '	,),
            "P2"	=>	array(	"start_time"	=>	'00:02:18'	,	"end_time"	=>	'00:03:25'	,"title1"	=>	'Explosion en'	,"title2"	=>	'concierto'	,"title3"	=>	'genera caos'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	' '	,),
            "P3"	=>	array(	"start_time"	=>	'00:03:26'	,	"end_time"	=>	'00:05:00'	,"title1"	=>	'Camila le '	,"title2"	=>	'coquetea delante'	,"title3"	=>	'de su novio'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	' '	,),*/
            /*"P4"	=>	array(	"start_time"	=>	'00:09:13'	,	"end_time"	=>	'00:10:21'	,"title1"	=>	'Samantha ya '	,"title2"	=>	'no quiere'	,"title3"	=>	'estar viva'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            
            "P5"	=>	array(	"start_time"	=>	'00:10:23'	,	"end_time"	=>	'00:12:06'	,"title1"	=>	'Camila va a '	,"title2"	=>	'averiguar quien'	,"title3"	=>	'dono su corazon'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P6"	=>	array(	"start_time"	=>	'00:12:07'	,	"end_time"	=>	'00:12:49'	,"title1"	=>	'Zacarias manda'	,"title2"	=>	'al carajo'	,"title3"	=>	'al medico'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P7"	=>	array(	"start_time"	=>	'00:12:55'	,	"end_time"	=>	'00:13:40'	,"title1"	=>	'A Valeria no'	,"title2"	=>	'la secuestraron'	,"title3"	=>	'la mataron'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P8"	=>	array(	"start_time"	=>	'00:14:21'	,	"end_time"	=>	'00:15:09'	,"title1"	=>	'Lucas le '	,"title2"	=>	'dispara a la'	,"title3"	=>	'hermana'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P9"	=>	array(	"start_time"	=>	'00:15:12'	,	"end_time"	=>	'00:16:14'	,"title1"	=>	'El niño'	,"title2"	=>	'dispara el arma'	,"title3"	=>	'del papa'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
           "P10"	=>	array(	"start_time"	=>	'00:16:54'	,	"end_time"	=>	'00:18:27'	,"title1"	=>	'El candidato '	,"title2"	=>	'es desagradable'	,"title3"	=>	'y morboso'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P11"	=>	array(	"start_time"	=>	'00:18:27'	,	"end_time"	=>	'00:19:35'	,"title1"	=>	'Camilo encuentra'	,"title2"	=>	'resultados de '	,"title3"	=>	'examenes medicos'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P12"	=>	array(	"start_time"	=>	'00:19:36'	,	"end_time"	=>	'00:20:48'	,"title1"	=>	'Camilo recibe'	,"title2"	=>	'unos resultados '	,"title3"	=>	'inesperados'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P13"	=>	array(	"start_time"	=>	'00:20:49'	,	"end_time"	=>	'00:22:05'	,"title1"	=>	'Valeria estaba'	,"title2"	=>	'embarazada y la'	,"title3"	=>	'mataron'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
             */"P14"	=>	array(	"start_time"	=>	'00:22:06'	,	"end_time"	=>	'00:23:24'	,"title1"	=>	'Transplantes '	,"title2"	=>	'de organos'	,"title3"	=>	'ilegales'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        );
         foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].' -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time -crf 9 (0-51) Calidad
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -crf 9 -preset veryfast -filter_complex ';
            //Pad video
            //$command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            //$command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            $command5=$command5.'"[0:v]pad=720:1280:(ow-iw)/2:(oh-ih)/2:violet[padded]; ';     
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:900 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Regular.ttf: fontcolor=white: fontsize=60 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.$data['episode'].$split.': x=(w-text_w)/2:y=1060 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=35 [title], ';
            //Scale the video
            $command5=$command5.'[title] scale=352:640 [out]" ';
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'test.mp4';

            dd($command5);
            system($command5);

        }     


        return view('welcome');
    }


    
    public function palpito2(){
        //El titilo no puede llevar tildes y debe ser cada parte menor a 18 letras incluidos los espacios
        $video_splits=array
        (           
            /*"P15"	=>	array(	"start_time"	=>	'00:23:24'	,	"end_time"	=>	'00:24:49'	,"title1"	=>	'Periodista soborna'	,"title2"	=>	'a enfermera por'	,"title3"	=>	'nombre de donante'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P16"	=>	array(	"start_time"	=>	'00:24:53'	,	"end_time"	=>	'00:26:10'	,"title1"	=>	'Simon en peligro'	,"title2"	=>	'buscando los'	,"title3"	=>	'traficantes'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P17"	=>	array(	"start_time"	=>	'00:26:48'	,	"end_time"	=>	'00:28:02'	,"title1"	=>	'Zacarias amenaza'	,"title2"	=>	'al amigo de Camila'	,"title3"	=>	'para callarlo'	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P18"	=>	array(	"start_time"	=>	'00:31:52'	,	"end_time"	=>	'00:33:19'	,"title1"	=>	'Simon ve en Camila'	,"title2"	=>	'a su esposa'	,"title3"	=>	''	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P19"	=>	array(	"start_time"	=>	'00:35:20'	,	"end_time"	=>	'00:36:02'	,"title1"	=>	'Golpean y secuestran'	,"title2"	=>	'a Simon'	,"title3"	=>	''	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P20"	=>	array(	"start_time"	=>	'00:36:41'	,	"end_time"	=>	'00:37:36'	,"title1"	=>	'Los traficantes le dan'	,"title2"	=>	'una golpiza a Simon'	,"title3"	=>	''	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P21"	=>	array(	"start_time"	=>	'00:39:31'	,	"end_time"	=>	'00:40:28'	,"title1"	=>	'Simon acepta '	,"title2"	=>	'la invitacion de Camila'	,"title3"	=>	''	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P22"	=>	array(	"start_time"	=>	'00:40:29'	,	"end_time"	=>	'00:41:02'	,"title1"	=>	'Zacarias ridiculiza'	,"title2"	=>	'a Simon'	,"title3"	=>	''	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            */"P23"	=>	array(	"start_time"	=>	'00:41:03'	,	"end_time"	=>	'00:41:49'	,"title1"	=>	'Simon encuentra'	,"title2"	=>	'algo inesperado'	,"title3"	=>	''	,"file"	=>	'Palpito.S01E03.SPANISH.WEBRip.x264-ION10[eztv.re].mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'palpito2.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        );
         foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].' -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time -crf 9 (0-51) Calidad
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -crf 9 -preset veryfast -filter_complex ';
            //Pad video
            //$command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            //$command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            $command5=$command5.'"[0:v]scale=1440:720,crop=720:720,pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';     
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:1010 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=(h-text_h)/10 :  fontfile=OpenSans-Bold.ttf: fontcolor=white: fontsize=50 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=(((h-text_h)/10)+80) :  fontfile=OpenSans-Bold.ttf: fontcolor=white: fontsize=50 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).': x=(w-text_w)/2:y=(((h-text_h)/10)+160) :  fontfile=OpenSans-Bold.ttf: fontcolor=white: fontsize=60 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.$data['episode'].$split.': x=(w-text_w)/2:y=1170 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=35 [title], ';
            //Scale the video
            $command5=$command5.'[title] scale=352:640 [out]" ';
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4';

            //dd($command5);
            system($command5);

        }     


        return view('welcome');
    }
    

    
    public function lqclm(){
        //El titilo no puede llevar tildes y debe ser cada parte menor a 18 letras incluidos los espacios
        $video_splits=array
        (           
            /*"P1"	=>	array(	"start_time"	=>	'00:00:00'	,	"end_time"	=>	'00:00:55'	,"title1"	=>	'Emma trabaja de'	,"title2"	=>	'dama de compañía'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P2"	=>	array(	"start_time"	=>	'00:02:00'	,	"end_time"	=>	'00:02:42'	,"title1"	=>	'Sergio esta a punto'	,"title2"	=>	'de quedar en la quiebra'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P3"	=>	array(	"start_time"	=>	'00:03:08'	,	"end_time"	=>	'00:04:02'	,"title1"	=>	'Tony le propone'	,"title2"	=>	'matrimonio a Emma'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            */"P4"	=>	array(	"start_time"	=>	'00:04:41'	,	"end_time"	=>	'00:05:48'	,"title1"	=>	'Vicente llega a'	,"title2"	=>	'la cena de navidad'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            /*"P5"	=>	array(	"start_time"	=>	'00:06:44'	,	"end_time"	=>	'00:07:59'	,"title1"	=>	'Sergio presiona a Vicente'	,"title2"	=>	'para firmar la sociedad'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P6"	=>	array(	"start_time"	=>	'00:08:00'	,	"end_time"	=>	'00:09:00'	,"title1"	=>	'Emma y Vicente tienen'	,"title2"	=>	'un sorpresivo encuentro'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P7"	=>	array(	"start_time"	=>	'00:09:05'	,	"end_time"	=>	'00:09:56'	,"title1"	=>	'Sergio le confiesa a Emma'	,"title2"	=>	'que esta en problemas'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P8"	=>	array(	"start_time"	=>	'00:09:58'	,	"end_time"	=>	'00:11:00'	,"title1"	=>	'A vicente le hacen pasar'	,"title2"	=>	'un mal rato en la cena'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P9"	=>	array(	"start_time"	=>	'00:13:19'	,	"end_time"	=>	'00:14:32'	,"title1"	=>	'Vicente se coloca '	,"title2"	=>	'imprudente con Emma'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P10"	=>	array(	"start_time"	=>	'00:15:08'	,	"end_time"	=>	'00:16:32'	,"title1"	=>	'Emma y su hermana'	,"title2"	=>	'Nora son rivales'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P11"	=>	array(	"start_time"	=>	'00:17:10'	,	"end_time"	=>	'00:17:59'	,"title1"	=>	'Javier se mete en'	,"title2"	=>	'la vida de Emma'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P12"	=>	array(	"start_time"	=>	'00:18:00'	,	"end_time"	=>	'00:19:16'	,"title1"	=>	'Javier chantajea a'	,"title2"	=>	'a Emma y la agrede'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P13"	=>	array(	"start_time"	=>	'00:19:17'	,	"end_time"	=>	'00:20:21'	,"title1"	=>	'Nora descubre la'	,"title2"	=>	'doble vida de Emma'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P14"	=>	array(	"start_time"	=>	'00:20:22'	,	"end_time"	=>	'00:21:27'	,"title1"	=>	'Emma le dice a Nora'	,"title2"	=>	'que David la intento violar'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P15"	=>	array(	"start_time"	=>	'00:21:28'	,	"end_time"	=>	'00:22:22'	,"title1"	=>	'Nora le quiere contar toda'	,"title2"	=>	'la verdad de Emma a su mama'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
            "P16"	=>	array(	"start_time"	=>	'00:22:26'	,	"end_time"	=>	'00:23:48'	,"title1"	=>	'Tony esta demasiado borracho'	,"title2"	=>	'y hace el ridiculo'	,"title3"	=>	'Doble Vida'	,"file"	=>	'180-Doble_Vida_Lo_Que_Callamos_Las_Mujeres.mp4'	,"episode"	=>	'T1CA3'	,"banner"	=>	'lqclmlogo.jpg'	,"subtitles"	=>	'4_Spanish.srt'	,),
        */);
         foreach($video_splits as $split=>$data)
        {   
            //remove preview video
            system('rm  /usr/share/laravel-apps/cut-images2/storage/app/'.'Palpito-'.$split.'-'.$data['episode'].'.mp4');
            
            //Include video and image 
            $command5='ffmpeg   -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['file'].' -i /usr/share/laravel-apps/cut-images2/storage/app/'.$data['banner'];
            //cut the video between start_time and end_time -crf 9 (0-51) Calidad
            $command5=$command5.' -ss '.$data['start_time'].' -to '.$data['end_time'].' -crf 9  -filter_complex ';
            //Pad video
            //$command5=$command5.'" [0:v]subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitles]';
            //$command5=$command5.'; [subtitles]pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';
            $command5=$command5.'"[0:v]crop=720:720,pad=720:1280:(ow-iw)/2:(oh-ih)/2:black[padded]; ';     
            //Overlay the image 
            $command5=$command5.'[padded][1:v] overlay=(W-w)/2:1000 [image],';
            //add title part1 (Max the letters are 18)
            $command5=$command5.'[image]drawtext=text='.strtoupper($data['title1']).': x=(w-text_w)/2:y=70 :  fontfile=OpenSans-Bold.ttf: fontcolor=white: fontsize=50 [title1], ';
            //Add title Part 2 (Max the letters are 18)
            $command5=$command5.'[title1] drawtext=text='.strtoupper($data['title2']).': x=(w-text_w)/2:y=120 :  fontfile=OpenSans-Bold.ttf: fontcolor=white: fontsize=50 [title2], ';
            //Add Title Part 3 (Max the letters are 18)
            $command5=$command5.'[title2] drawtext=text='.strtoupper($data['title3']).' - '.$split.': x=(w-text_w)/2:y=200 :  fontfile=OpenSans-Bold.ttf: fontcolor=white: fontsize=35 [title3], '; 
            //Add sesson and episode number
            $command5=$command5.'[title3] drawtext=text='.' '.': x=(w-text_w)/2:y=1170 :  fontfile=OpenSans-Regular.ttf: fontcolor=violet: fontsize=35 [out]", ';
            //Scale the video
            //$command5=$command5.'[title] scale=352:640 [out]" ';
            //$command5=$command5.'subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].':force_style='."'Alignment=10,,MarginL=5,MarginV=50,Fontsize=4'".' [out]" ';
            //$command5=$command5.'[episode] subtitles=/usr/share/laravel-apps/cut-images2/storage/app/'.$data['subtitles'].' [subtitle] ,[subtitle][1:v] overlay=x=20:y=200 [out]" ';
            //Save the new video on out file
            $command5=$command5.'-map "[out]" -map 0:a  /usr/share/laravel-apps/cut-images2/storage/app/'.'lqclm-'.$split.'-'.$data['episode'].'.mp4';

            dd($command5);
            system($command5);

        }     


        return view('welcome');
    }

    
}
