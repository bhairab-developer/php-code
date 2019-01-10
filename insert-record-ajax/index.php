<html>
    <head>
    <title>Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #result{
            
         color: red;
            font-size: 20px;
        }
        </style>
    <script>
        $(document).ready(function(){
         
            $("#sub").click(function(){
                
                var user_name=$("#name").val();
                var user_email=$("#email").val();
                var user_phone=$("#phone").val();
                
                $.post("sumbit_form.php",{name:user_name,email:user_email,phone:user_phone},function(data){
                     $("#result").text(data);
                });
            });
            
            
            
        });
        
    </script>
    </head>
    <body>
        
        <div class="container">
        <h2>Glyphicon Examples</h2>
        
            <div id="box">
              
                    <input type="text" name="name" id="name" placeholder="Enter Name">
                    <input type="text" name="email" id="email" placeholder="Enter Name">
                    <input type="text" name="phone" id="phone" placeholder="Enter Name">
                    <input type="submit" id="sub">
                    <div id="result"></div>
                    
               
            </div>
            
        </div>
        
        
        
        
    </body>
    
</html>