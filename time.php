<html>
    <head>
        <title>SET YOUR ALARM CLOCK TO AWAKEN</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width">
        <style type="text/css">
            *, *:after, *:before { box-sizing: border-box; -moz-box-sizing: border-box; margin: 0;}
            body {
            	width: 100%;
            }
            #container {
                width: 23em;
                margin: 0 auto;
            }
            h1 {text-align: center; font-family: 'Open Sans Condensed', sans-serif;}
            p.alarmset {color: #999 ; font-family: 'Open Sans', sans-serif; font-size: 2.5em; line-height: 1.25em;}
            p.meh {color: #797 ;}
            p.good {color: #595 ;}
            p.better {color: #393 ;}
            p.best {color: #090 ;}
            p.oversleep {color: #990 ;}
            p.whoa {color: #920;}
            p.tzdata {margin-top:2em; color: #000; text-align: center; font-family: 'Open Sans Condensed', sans-serif;}
            p.footer {color: #111; text-align: center; font-family: 'Open Sans Condensed', sans-serif;}
            span.note {font-family: 'Open Sans Condensed', sans-serif;}
	    .github {position: absolute; top: 0; right: 0; border: 0;}
	    
	    @media (max-width: 500px) {
		#container {
		    width: 100%;
		    padding: 0 5px 5px;
		}
		p.alarmset {
		    font-size: 2em;
		    line-height: 1em;
		}
		.github {
		    width: 75px;
		}
	    }
	    @media (max-width: 300px) {
		#container {
		    width: 100%;
		    padding: 0 5px 5px;
		}
		p.alarmset {
		    font-size: 1.5em;
		    line-height: 1em;
		}
		p.tzdata, p.footer {
		    font-size: 0.8em;
		}
		.github {
		    width: 75px;
		}
	    }
        </style>
        <?php date_default_timezone_set('America/New_York'); ?>
    </head>
    <body>
        <a href="https://github.com/benlk/time"><img class="github" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
    	<div id="container">
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
		    <p class="footer">Comments or requests? <a href="https://github.com/benlk/time/issues">File an issue on GitHub</a>.</p>
	    </div>
    </body>
</html>
