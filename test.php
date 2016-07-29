<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            margin: 0;
            padding: 0px;
        }

        .wrap {
            padding-left: 100px;
            text-align: center;
        }

        .wrap ul {
            position: relative;
            padding: 0;
            margin: 0;
            /*border: 1px dotted #777;*/
        }

        li {

            position: relative;


            margin: 0;
            padding: 0;
        }
        li a {
            /*display: inline-block;*/
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            left: 0px;
            top: 0px;
            color: #fff;
            text-decoration: none;
            transition: all .5s ease;
            letter-spacing: 1px;
        }
        li a:hover {
            letter-spacing: 3px;
        }
        a:after {
            /*display: inline-block;*/
            position: absolute;
            top: 60%;
            bottom: 0;
            left: -10%;
            height: 1px;
            content: " ";
            text-shadow: none;
            background-color: #fff;
            width: 0px;
            transition: all .5s ease;
        }

        li:hover a:after {
            width: 120%;
        }


    </style>

</head>
<body>
<div class="wrap">
    <ul>
        <li><a href="#one" id="test">Concept</a></li>
    </ul>
</div>


<script>
    //    var test = document.getElementById('test');
    //    test.addEventListener("mouseover", hendler1, false);
    //    test.addEventListener("mouseout", hendler2, false);
    //
    //    function hendler1() {
    //        test.style.color = 'red';
    //    }
    //    function hendler2() {
    //        test.style.color = 'white';
    //    }
</script>
</body>
</html>