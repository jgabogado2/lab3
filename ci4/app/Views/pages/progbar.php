    <style>
    .body{
        background: url(images/backrooms.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: blue;
    }
    .container{
        height: 800px;
        position: relative;
        background: url(images/backrooms.png)no-repeat center center fixed;
    }
    
    .center{
        
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .progbar{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    </style>
</head>

<body>
    <div class = "container">
        <div class = "center">
            <div class = "progbar">
                <progress id = "bar" max ="100" value ="80"></progress>
            </div>
            <br>
            <br>
            <br>
            <div class = "button">
                <button id="btn">Click me to progress</button>    
            </div>
            
        </div>
    </div>


    <p id ="demo"></p>
</body>

<script> 

    document.getElementById('btn').addEventListener('click', function() {document.getElementById('bar').value+=1;});

    var AAA = document.getElementById('bar').value;
  
    if (AAA === 100){
        document.getElementById("demo").innerHTML = "Good day!";
    }
</script>

</html>
