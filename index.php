<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <title>Fred's Homepage</title>
    </head>

    <body>

        <div class="list-group">
            <ul>
                <li class="list-group-item"><a href="">All Posts</a></li>
                <li class="list-group-item"><a href="">My Posts</a></li>
                <li class="list-group-item"><a href="">Search</a></li>
            </ul>

            <form action="" class="log-in" role="form">
                Email: <input type="email" name="useremail">
                Password: <input type="password" name="password">
                <input type="submit" value="Log In">
            </form>

            <h1>Fred the Frog</h1>
            <h2>BBS</h2>

        </div>

        <div id="php">
            <?php

            class Shape {
                
                protected $name;

                function setName(){
                    $this->name = 'John';
                }
            }

            class Rectangular extends Shape {
                function setName(){
                    $this->name = 'ajiofdj';
                }

                function printName(){
                    print $this->name;
                }
            }

            $i = new Rectangular();
            $i->setName();
            $i->printName();

            ?>
        </div>

        
      </body>

</html>
