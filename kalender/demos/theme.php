<!DOCTYPE html>
<html ng-app>
    <head>
        <title>LernTreff Kalender</title>
        <meta charset='utf-8' lang="DE">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Style -->
        <!-- Bootstrap -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <!-- Navbar -->
        <link href="../../css/navbar.css" rel="stylesheet">

        <link href="../../css/indexmenu.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js"></script>


        <link rel='stylesheet' href='../lib/cupertino/jquery-ui.min.css' />
        <link href='../fullcalendar.min.css' rel='stylesheet' />
        <link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='../lib/moment.min.js'></script>
        <script src='../lib/jquery.min.js'></script>
        <script src='../fullcalendar.min.js'></script>
        <script type='text/javascript' src='../gcal.js'></script>
        <script>

            $(document).ready(function() {
                $('#calendar').fullCalendar({
                    googleCalendarApiKey: 'AIzaSyAUhuQyrM4p5T-OZp1k8iLcE9lilXy98QI',
                    theme: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listMonth'
                    },
                    defaultDate: '2017-03-18',
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: {
                        googleCalendarId: '5quu0pm34r9f00tgkpmj6drmuo@group.calendar.google.com'
                    }
                });

            });

        </script>
        <style>

            body {
                margin: 80px 10px;
                padding: 0;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 900px;
                margin: 0 auto;
            }

        </style>
    </head>
    <body>
        <ng-include src="'../../templates/calHeader.php'"></ng-include>
        <div id='calendar'></div>
        <ng-include src="'../../templates/calFooter.php'"></ng-include>
    </body>
</html>
