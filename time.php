<html>
    <head>
        <title>SET YOUR ALARM CLOCK TO AWAKEN</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
        <style type="text/css">
            *, *:after, *:before { box-sizing: border-box; -moz-box-sizing: border-box; }
            body {
                width: 30em;
                margin: 0 auto;
            }
            h1 {text-align: center; font-family: 'Open Sans Condensed', sans-serif;}
            p.alarmset {color: #999 ; font-family: 'Open Sans', sans-serif; font-size: 3em; line-height: 0.25em;}
            p.meh {color: #797 ;}
            p.good {color: #595 ;}
            p.better {color: #393 ;}
            p.best {color: #090 ;}
            p.oversleep {color: #990 ;}
            p.whoa {color: #920;}
            p.tzdata {margin-top:2em; color: #000; text-align: center; font-family: 'Open Sans Condensed', sans-serif;}
            p.footer {color: #111; text-align: center; font-family: 'Open Sans Condensed', sans-serif;}
            span.note {font-family: 'Open Sans Condensed', sans-serif;}
        </style>
        <?php date_default_timezone_set('America/New_York'); ?>
    </head>
    <body>
        <h1>Set your alarm to:</h1>
        <p class="alarmset "><?php echo date('h:i a', time()); ?> <span class="note">&larr; now</span></p>
        <p class="alarmset "><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 0)); ?> <span class="note">&larr; nap</span></p>
        <p class="alarmset "><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 1)); ?></p>
        <p class="alarmset "><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 2)); ?></p>
        <p class="alarmset meh"><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 3)); ?></p>
        <p class="alarmset good"><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 4)); ?> </p>
        <p class="alarmset better"><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 5)); ?> <span class="note">&larr; 7.5 hours</span></p>
        <p class="alarmset best"><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 6)); ?> <span class="note">&larr; 9 hours</span></p>
        <p class="alarmset oversleep"><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 7)); ?></p>
        <p class="alarmset whoa"><?php echo date('h:i a', time() + (20 * 60) + (90 * 60 * 8)); ?> <span class="note">&larr; 12 hours</span></p>
        <p class="tzdata"><?php echo "Generated at " . date('h:i a, e') . ", UTC" . date('O'); ?></p>
        <p class="footer">Comments or requests? 
        
        <a href="https://github.com/benlk/time"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
    </body>
</html>
