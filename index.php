<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		body{
			background-color: skyblue;
		}
		input{
			width: 80%;
		}
        table{
			padding: 10px;
			margin: 10px;
            border: 1px solid black;
            width: 800px;
        }
        td{
            padding: 10px;
            border: 1px solid black;
        }
        .myimage{
            height: 200px;
            width: 200px;

        }
    </style>
</head>
<body>
    <center>
    
    <div class="">
        
        <?php
       
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
        ?>
 
        <div id="message"></div>
        <div id="form"></div>
        <div id="show_record"></div>
   
       
    </div>
    

     <script>
         show_form();
         function register(){
         show_form();

         }
 ////////////////   Show Form ////////////////

        function show_form(){
				var ajax_request = null;
				if(window.XMLHttpRequest){
					ajax_request = new XMLHttpRequest();
				}
				else{
					ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax_request.onload = function(){
					if(ajax_request.readyState == 4 && ajax_request.status == 200){
						document.getElementById("form").innerHTML = ajax_request.responseText;
                        show_record();
					}
				}

				ajax_request.open("GET","process.php?action=show_form",true);;
               
				ajax_request.send();
                
			}

        ////////////////   insert record ////////////////

        function insert_record(){
				var ajax_request = null;
				if(window.XMLHttpRequest){
					ajax_request = new XMLHttpRequest();
				}
				else{
					ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax_request.onload = function(){
					if(ajax_request.readyState == 4 && ajax_request.status == 200){
						document.getElementById("message").innerHTML = ajax_request.responseText;
                        show_record();
					}
				}

				ajax_request.open("POST","process.php?",true);
				ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
				// ajax_request.send();
                name = document.getElementById('name').value;
                email = document.getElementById('email').value;
                password = document.getElementById('password').value;
				ajax_request.send("action=insert_record&name="+name+"&email="+email+"&password="+password);
                
			}


              ////////////////   Show record ////////////////

        function show_record(){
				var ajax_request = null;
				if(window.XMLHttpRequest){
					ajax_request = new XMLHttpRequest();
				}
				else{
					ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax_request.onreadystatechange = function(){
					if(ajax_request.readyState == 4 && ajax_request.status == 200){
						document.getElementById(
							"show_record").innerHTML = ajax_request.responseText;
					}
				}

				ajax_request.open("POST","process.php?action=show_record",true);
				ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
				ajax_request.send();
			}
            // show_record();
            


                     ////////////////   Select record for Updating ////////////////

        function edit_record(clicked_id){
            // alert(clicked_id);
                id = clicked_id;
				var ajax_request = null;
				if(window.XMLHttpRequest){
					ajax_request = new XMLHttpRequest();
				}
				else{
					ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax_request.onreadystatechange = function(){
					if(ajax_request.readyState == 4 && ajax_request.status == 200){
						document.getElementById(
							"form").innerHTML = ajax_request.responseText;
					}
				}

				ajax_request.open("POST","process.php?action=select_record&id="+id,true);
				ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
				ajax_request.send();
			}


            
                     ////////////////   Update record ////////////////

        function update_record(){
            // alert(clicked_id);
            // id = clicked_id;
				var ajax_request = null;
				if(window.XMLHttpRequest){
					ajax_request = new XMLHttpRequest();
				}
				else{
					ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax_request.onreadystatechange = function(){
					if(ajax_request.readyState == 4 && ajax_request.status == 200){
						document.getElementById(
							"message").innerHTML = ajax_request.responseText;
                            show_record();
					}
				}
                name = document.getElementById('myname').value;
                email = document.getElementById('myemail').value;
                password = document.getElementById('mypassword').value;
				ajax_request.open("POST","process.php?action=update_record&id="+id,true);
                ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
				ajax_request.send("name="+name+"&email="+email+"&password="+password);
				// ajax_request.send();
			}


            
                     ////////////////   Delete record ////////////////

        function delete_record(clicked_id){
            // alert(clicked_id);
            id = clicked_id;
            console.log();
				var ajax_request = null;
				if(window.XMLHttpRequest){
					ajax_request = new XMLHttpRequest();
				}
				else{
					ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax_request.onreadystatechange = function(){
					if(ajax_request.readyState == 4 && ajax_request.status == 200){
						document.getElementById(
							"message").innerHTML = ajax_request.responseText;
                            show_record();
					}
				}
           
				ajax_request.open("POST","process.php?action=delete_record&id="+id,true);
				ajax_request.setRequestHeader("content-type","application/x-www-form-urlencoded");
				ajax_request.send();
			}


            </script>
            

</body>
</html>

