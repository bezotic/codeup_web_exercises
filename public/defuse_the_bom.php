<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>
        var detonationTimer = 5;
        var interval = 1000

        // TODO: This function needs to be called once every second
        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
                clearInterval(intervalId);

            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }
        var intervalId = setInterval(updateTimer,interval);
        
      
        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {


        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
    </script>
</body>
</html>





<html>
<head>
    <title></title>
</head>
<body>
    <button> id = 'button1' data-btn='1'>Click Me!</button>
    <button>id = 'button2' data-btn='2'</button>
     <button>id = 'button3' data-btn='3'</button>

    <script>
    var buttons = document.getElementsByTagName('button');

        // create a handler function
        var listener = function (event) {
            var html = event.target.innerHTML;
            html = html.toUpperCase();
            console.log(event.target);
        }

        // register the listener to handle clicks on btn1
       for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', listener);
       }

    </script>
</body>
</html>



document.getElementsByTagName('button')[0].addEventListener



















