<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chatbot</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <style>
        html{
                background-image: url("chatbot.jpg")!important;
                background-size: 100vw 100vh; /* Width first, then height */
                background-repeat: no-repeat; /* Ensures the image doesn't repeat */


            }
            </style>
    <body>
    </body>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bot.css')}}">
    <script>
        var botmanWidget = {
            aboutText: 'Start the conversation with Hi',
            introMessage: "Welcome to our World"
        };
    </script>

    <script src="{{asset('assets/js/bot.js')}}"></script>

</html>
