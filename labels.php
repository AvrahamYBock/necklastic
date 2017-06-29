<?php
    $line1 = $_POST['line1'];
    $line2 = $_POST['line2'];
    
    // echo $line1, $line2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    <style>
        *{
            box-sizing: border-box;
        }
        body{
                margin: .38in .41in;
        }
        @media screen{
            body{
                margin-top: 80px;
            }
            td{
                border: 1px solid black;
            }           
        }
        table{
            border-collapse: collapse;
            table-layout: fixed;
            width: 7.68in;
            height: 10.2in;
        }
        td{
            width: 1.18in;
            height: .51in;
            text-align: center;
            font-size: 12px;
        }
        td div{
            width: 1.18in;
            height: .51in;
            overflow: hidden;
            padding: 10px 0;
        }
        .gutter{
            width: .12in;
        }
        @page{
            margin: 0;
        }
        #buttonDiv{
             margin: 0 0 30px 30px;
        }
        #buttonDiv button{
            margin-right: 30px;
        }
        @media print{
            #buttonDiv{
                display: none;
            }
        }
    </style>
    <title>Preview</title>
</head>
<!--<body class="container">-->
<body>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navv" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">EZnecklastic</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navv">
                <ul class="nav navbar-nav">
                    <li><a href="products.html">Products</a></li>
                    <li><a href="labels.html">EZlabels</a></li>
                    <li><a href="retailers.html">Retailers</a></li>
                    <li><a href="wholesale.html">Wholesale</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div id="buttonDiv">
        <button><a href="labels.html">Reset</a></button>
        <button onclick="window.print()">Print</button>
    </div>
    <table>
        <tbody>
            <?php
                for($i=0; $i<20; $i++){
                    echo "<tr>";
                    for($j=0; $j<5; $j++){
                        echo "<td><div>$line1<br>$line2</div></td><td class=gutter></td>";
                    }
                    echo "<td><div>$line1<br>$line2</div></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
 
    <script src="/jquery-1.12.4.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>  
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</body>
</html>