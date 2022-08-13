<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Cut</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Form Validation Plugin-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css" integrity="sha512-E4kKreeYBpruCG4YNe4A/jIj3ZoPdpWhWgj9qwrr19ui84pU5gvNafQZKyghqpFIHHE4ELK7L9bqAv7wfIXULQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" integrity="sha512-/Ae8qSd9X8ajHk6Zty0m8yfnKJPlelk42HTJjOHDWs1Tjr41RfsSkceZ/8yyJGLkxALGMIYd5L2oGemy/x1PLg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- Styles
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> -->

        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
            margin-bottom: 0;
            border-radius: 0;
            }
            
            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}
            
            /* Set gray background color and 100% height */
            .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
            }
            
            /* Set black background color, white text and some padding */
            footer {
            background-color: #555;
            color: white;
            padding: 15px;
            }
            
            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;} 
            }

        </style>
    </head>


    <body>

        <!--<Header Page-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">Logo</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Projects</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid">    
            <div class="d-flex align-items-center p-3 my-3 bg-purple rounded box-shadow text-center">                    
                <h4 class="text-black">CREACION DE PARTES DE VIDEO</h4>
          </div>
            <div class="row content">
              <div class="col-sm-2 sidenav">
                <br>
                <br>
                    <button id="btn_add_parts"> Agregar Parte </button>
                    <button id="btn_remove_parts"> Quitar Parte </button>

                <br>
                <br>
                <!--<p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>-->
              </div>
              <div class="col-sm-8"> 
                
                <!--<form class="row g-3">-->
                <form id="form_parts"  name="form_parts" method="POST" role="form" action="{{ url('/parts') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf 
                    <label for="tvshows_in" class="form-label"> Programa de TV:</label>  
                    <select name="tvshows_in" class="form-select" id="tvshows_in">
                        <option value="">Seleccionar Programa de TV.</option>            
                    @foreach ($tvshows as $tvshow)
                        <option value="{{$tvshow->id}}">{{$tvshow->name}}</option>        
                    @endforeach
                    </select>
                    <label for="seasons_in" class="form-label"> Temporadas: </label>  
                    <select name="seasons_in" class="form-select" id="seasons_in">
                        <option value="">Seleccionar Temporada</option>       
                    </select>     

                    <label for="episodes_in" class="form-label"> Episodios: </label>  
                    <select name="episodes_in" class="form-control" id="episodes_in">
                        <option value="">Seleccionar Episodio</option>       
                    </select>   
                    <br>
                    <br>
                    <button id="btn_store_parts" type="submit"> Guardar </button>
                    <!--<div class="col-12" id="parts_container"></div>-->
                    </form>
                <!--</form>-->

            </div>
            <div class="col-sm-2 sidenav">
              <div class="well">
                <!--<p>ADS</p>-->
              </div>
              <div class="well">
                <!--<p>ADS</p>-->
              </div>
            </div>
          </div>
        </div>

        
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js" integrity="sha512-2xXe2z/uA+2SyT/sTSt9Uq4jDKsT0lV4evd3eoE/oxKih8DSAsOF6LUb+ncafMJPAimWAXdu9W+yMXGrCVOzQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js" integrity="sha512-tlmsbYa/wD9/w++n4nY5im2NEhotYXO3k7WP9/ds91gJk3IqkIXy9S0rdMTsU4n7BvxCR3G4LW2fQYdZedudmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
        <script type="text/javascript">
        

        $(document).ready(function(){    
            var nparts=0;
            var lastpart=0;
            //Buttons Disabled
            $("#btn_add_parts").prop('disabled', true);
            $("#btn_remove_parts").prop('disabled', true);
            $("btn_store_parts").prop('disabled', true);
            
            $("#tvshows_in").change(function(){                
                var tvshow =$(this).val();
                //alert('tvshow change');
                console.log(tvshow);
                //Buttons Disabled
                $("#btn_add_parts").prop('disabled', true);
                $("#btn_remove_parts").prop('disabled', true);
                $("btn_store_parts").prop('disabled', true);
                
                $("#seasons_in").html('Seleccionar Temporada');
                $("#episodes_in").html('Seleccinar Episodio');
                $.get('SeasonsByTvshow/'+tvshow, function(data){
                    console.log(data);
                for (var i=0; i<data.length;i++){
                    console.log(data[i].name);
                    $("#seasons_in").append($('<option>', { 
                        value: data[i].id,
                        text : data[i].name 
                    }));                    
                               
                }
                
                });
            });

            $("#tvshows_in").focus(function(){                
                var tvshow =$(this).val();
                //alert('tvshow focus');
                console.log(tvshow);

                //Buttons Disabled
                $("#btn_add_parts").prop('disabled', true);
                $("#btn_remove_parts").prop('disabled', true);
                $("btn_store_parts").prop('disabled', true);

                $("#seasons_in").html('Seleccionar Temporada');
                $("#episodes_in").html('Seleccionar Episodio');
                $.get('SeasonsByTvshow/'+tvshow, function(data){
                    console.log(data);
                for (var i=0; i<data.length;i++){
                    console.log(data[i].name);
                    $("#seasons_in").append($('<option>', { 
                        value: data[i].id,
                        text : data[i].name 
                    }));                    
                               
                }
                
                });
            });


            $("#seasons_in").change(function(){                
                var season =$(this).val();
                //alert('season change');
                console.log(season);

                //Buttons Disabled
                $("#btn_add_parts").prop('disabled', true);
                $("#btn_remove_parts").prop('disabled', true);
                $("btn_store_parts").prop('disabled', true);

                $("#episodes_in").html('Seleccionar Episodio');
                $.get('EpisodesBySeason/'+season, function(data){
                    console.log(data);
                for (var i=0; i<data.length;i++){
                    console.log(data[i].title);
                    $("#episodes_in").append($('<option>', { 
                        value: data[i].id,
                        text : data[i].number+'-'+data[i].title 

                    }));                    
                               
                }

                });
            });


            $("#episodes_in").change(function(){   
                var episode =$(this).val();
                console.log('event change' + episode);
                //Buttons Disabled                
                $("#btn_add_parts").prop('disabled', false);
                $("#btn_remove_parts").prop('disabled', false);
                $("btn_store_parts").prop('disabled', false);  
            });

            $("#episodes_in").focus(function(){   
                var episode =$(this).val();
                console.log('event focus' + episode);
                //Buttons Disabled            
                if(episode>0)   
                {
                    $("#btn_add_parts").prop('disabled', false);
                    $("#btn_remove_parts").prop('disabled', false);
                    $("btn_store_parts").prop('disabled', false);
                }  
            });
            
            


            $("#seasons_in").focus(function(){                
                var season =$(this).val();
                //alert('season focus');
                console.log(season);
                
                //Buttons Disabled
                $("#btn_add_parts").prop('disabled', true);
                $("#btn_remove_parts").prop('disabled', true);
                $("btn_store_parts").prop('disabled', true);

                $("#episodes_in").html('Seleccionar Episodio');
                $.get('EpisodesBySeason/'+season, function(data){
                    console.log(data);
                for (var i=0; i<data.length;i++){
                    console.log(data[i].title);
                    $("#episodes_in").append($('<option>', { 
                        value: data[i].id,
                        text : data[i].number+'-'+data[i].title 

                    }));                    
                               
                }

                });
            });



            $("#btn_add_parts").click(function(){
                var startime,endtime,diftime;
                console.log(nparts);
                //alert('btn add parts');
                //$('#panel-group-part'+lastpart).hide();

                nparts++;     
                lastpart=nparts;
                

                //Container of Part
                //$("#parts_container").append('<div class="panel-group" id="panel-group-part'+nparts+'">');

                    $("#form_parts").append('<div class="panel-heading" id="panel-group-part'+nparts+'">');
                    //Include Number Part to form
                        $('#panel-group-part'+nparts).append('<input type="hidden" name="input_part_number_'+nparts+'" id="input_part_number_'+nparts+ '"');

                    $('#panel-group-part'+nparts).append('<div class="panel-default my-3 p-3 bg-white rounded box-shadow border border-primary" id="panel-default'+nparts+'">');
                        //Header of Part
                        $('#panel-default'+nparts).append('<div class="panel-heading"> '+'Parte '+nparts+'</div>');
                        //Content of Part
                        $('#panel-default'+nparts).append('<div class="row panel-body " id="panel-body'+nparts +'">');
                            //Input StartTime
                            $('#panel-body'+nparts).append('<div class="col input-group bootstrap-timepicker timepicker" id="col_starttime_part'+nparts+'">');                         
                            $('#col_starttime_part'+nparts).append('<label class="form-label" for=input_starttime_part'+nparts+'> Inicio:  </label>');
                            $('#col_starttime_part'+nparts).append('<input style="width: 100%;"  class="form-control input-small" placeholder="0:00:00" type="text" name="input_starttime_part'+nparts+'" '+'id="input_starttime_part'+nparts+'">');
                            $('#col_starttime_part'+nparts).append('<span class="input-group-addon" id="span_starttime'+nparts+'">  </span>');
                            //$('#span_starttime'+nparts).append('<i class="glyphicon glyphicon-time"></i>');
                            $("input[name*='input_starttime']").timepicker({
                                minuteStep: 1,
                                template: 'modal',
                                appendWidgetTo: 'body',
                                showSeconds: true,
                                showMeridian: false,
                                defaultTime: false
                            });

                            //Input Endtime
                            $('#panel-body'+nparts).append('<div class="col input-group bootstrap-timepicker timepicker" id="col_endtime_part'+nparts+'">');
                            $('#col_endtime_part'+nparts).append('<label class="form-label" for=input_endtime_part'+nparts+'> Fin:  </label>');
                            $('#col_endtime_part'+nparts).append('<input style="width: 100%;" class="form-control input-small" placeholder="0:00:00" type="text" name="input_endtime_part'+nparts+'" '+' id="input_endtime_part'+nparts+'" >');
                            $('#col_endtime_part'+nparts).append('<span style="color:red"; class="input-group-addon" id="span_endtime'+nparts+'">  </span>');
                            //$('#span_endtime'+nparts).append('<i class="glyphicon glyphicon-time id="image'+nparts+'"></i>');
                            $("input[name*='input_endtime']").timepicker({
                                minuteStep: 1,
                                template: 'modal',
                                appendWidgetTo: 'body',
                                showSeconds: true,
                                showMeridian: false,
                                defaultTime: false
                            });
                            
                            $("input[name*='input_endtime']").change(function(){ 

                                let regExTime = /([0-9]?[0-9]):([0-9][0-9]):([0-9][0-9])/;
                                let starttime = regExTime.exec($("input[name*='input_starttime']").val());
                                let endtime = regExTime.exec(this.value);

                              

                                let starttime_sec=parseInt(starttime[1]*3600)+ parseInt(starttime[2]*60)+parseInt(starttime[3]);

                                let endtime_sec=  parseInt(endtime[1]*3600)+parseInt(endtime[2]*60)+parseInt(endtime[3]);

                                let dif_time=endtime_sec-starttime_sec;

                                console.log('starttime: '+ starttime[0]);
                                console.log('endtime: '+ endtime[0]);
                                console.log('dif_time: '+ dif_time);
                                
                                if((dif_time<40) || (dif_time>120)){   
                                    $('#span_starttime'+nparts).html(' ');    
                                    $('#span_endtime'+nparts).html(' ');          
                                    $('#span_starttime'+nparts).html(' .');                            
                                    $('#span_endtime'+nparts).html('Duración debe ser mayor 40 seg y menor a 2 min');  
                                    console.log('IF');    
                                }    
                                else 
                                {
                                    console.log('ELSE');    
                                    $('#span_starttime'+nparts).html(' ');    
                                    $('#span_endtime'+nparts).html(' ');      
                                }   


                            })

                            $('#panel-default'+nparts).append('<div class="row panel-body " id="panel-body-2'+nparts +'">');
                                //Input Title 1
                                $('#panel-body-2'+nparts).append('<div class="col" id="col_title1_part'+nparts+'">'); 
                                $('#col_title1_part'+nparts).append('<label class="form-label" for=input_title1_part'+nparts+'> Titulo 1  </label>');
                                $('#col_title1_part'+nparts).append('<input class="form-control" type="text" minlength="5" maxlength="25" name="input_title1_part'+nparts+'">'); 

                                //Input Title 2
                                $('#panel-body-2'+nparts).append('<div class="col" id="col_title2_part'+nparts+'">'); 
                                $('#col_title2_part'+nparts).append('<label class="form-label" for=input_title2_part'+nparts+'> Titulo 2  </label>');
                                $('#col_title2_part'+nparts).append('<input class="form-control" type="text"  maxlength="25"3 name="input_title2_part'+nparts+'">'); 

            

            });

            



            $("#btn_remove_parts").click(function(){
                //alert('btn remove parts');
                console.log(lastpart);
                if(lastpart>0){
                    $('#panel-group-part'+lastpart).remove();
                    nparts--;
                    lastpart=nparts;
                }
            });



        });
        </script>
        </body>
</html>
