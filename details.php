<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Meme Importer Webilation</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.drawer.css">
        <link href="css/style.css" rel="stylesheet">
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>

        .caja-simple
        {
            height:150px;
            margin-top:10px;
            padding-right: 10px;
            padding-left: 10px;
        }

        </style>
    </head>
    <body style="background-color: #d3d3d3;">
        
        <div class="container-fluid">
            
            
            <?php 
                require 'header.php';
            ?>


            <div class="row" style="padding-right: 20px;padding-left: 20px;background-color: #d3d3d3;" id="">
                

                
                <div class="col-md-9 fondo-left" style="border:0px solid black" id="prinarticle"> 
                <h1 class="color-white text-NL text-45 decora-title" id="titlearticle" style="padding:10px;"></h1>
               <div id="textdetail" style="padding:30px;">
               
               	
               </div>
               
                               
                <div class="separator" style="margin-bottom: 10px;">                    
                    </div>
                    
                    
                    

				</div>






                <div class="col-md-3">
                    <div class="fondo-left asedi text-center" style="height: 130px;margin-top: 10px;"> 
                        <h1 class="color-white text-NL text-45 decora-title">TITLE 1</h1>
                    </div>
                    <div class="fondo-left asedi text-center" style="height: 130px;margin-top: 10px;"> 
                        <h1 class="color-white text-NL text-45 decora-title">TITLE 2</h1>
                    </div>
                    <div class="fondo-left asedi text-center" style="height: 130px;margin-top: 10px;"> 
                        <h1 class="color-white text-NL text-45 decora-title">TITLE 3</h1>
                    </div>
                </div>
            </div>




             <div class="row" style="padding-right: 20px;padding-left: 20px;background-color: #d3d3d3;">

                <div class="col-md-5">
                 
                 </div>
            </div>

           
            <?php 
                require 'footer.php';
            ?>
            
            
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        
         <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
   		<script src="js/drawer.js"></script>
    </body>
</html>

<script>


$(document).ready(function(){
	
	var url_string = window.location;
	var url = new URL(url_string);
	var c = url.searchParams.get("id");
		
	//alert(c);
  var params={ 	
		 // 'id':c
  };
  var url="http://dev.webilation.com/memeimporter/api/ShowDetail/"+c;
 // var url="http://localhost/memeimporter/api/ShowDetail/"+c;
  $.getJSON(url,params,function(data){
	 // alert(data.content);
	 // alert(data.title);
	  $("#titlearticle").html(data.title);
	  $("#textdetail").html(data.content);
	  //tam = data.content;  
	/*  for(i=0;i<tam;i++)
	   {	  
			  article = "<div>"+    
		      "<h1 class='color-white text-RB text-41 titulo-1'>"+data[i].title+"</h1>"+
		      "<div class=\"form-group caja-simple\">"+
		          "<label for=\"exampleInputEmail1 color-3 text-RM text-13\" style=\"border: none;\">"+
		          data[i].description.substr(1,400)+
		          "</label>"+
		      "</div>";
		      $("#prinarticle").append(article);
		      
		      qtySon = data[i].sons.length;
		      if(qtySon>0)
		       {
		    	  for(j=0;j<qtySon;j++)
		    	   {
				      son = "<div class=\"caja-simple\" id=\"sonsarticles\">"+
				          "<div class=\"form-control box-complejo\" id=\"\"   placeholder=\"RELATED ARTICLE\">"+
				         	 data[i].sons[j].description.substr(1,400)+
				          "</div>"+
				      		"</div>";
				      $("#prinarticle").append(son);
		    	   }
		       }
		      sep = "</div><div class=\"separator\" style=\"margin-bottom: 10px;\">"+                    
	      		"</div>";
		      $("#prinarticle").append(sep);
		}*/
  });

  })
  
  
      

</script>