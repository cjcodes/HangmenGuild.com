<!doctype html>
<html>
<head>
    <title>Ye Ole Hangmen</title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/hangmen.css" />
    <link rel="icon" type="image/png" href="/favicon.png" />
</head>
<body>

<header class="navbar navbar-static-top navbar-inverse" id="top" role="banner">
    <div class="container">
      <div class="navbar-header">
      <a href="/" class="navbar-brand">Ye Ole Hangmen</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#progress">Progression</a>
        </li>
        <li>
          <a href="#leadership">Leadership</a>
        </li>
        <li>
          <a href="http://forums.hangmenguild.com">Forums</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-form">
        <li><button class="btn btn-primary apply-now">Apply Now (Recruiting all roles for 25 mans)</button></li>
      </ul>
    </nav>
  </div>
</header>

<?php if (isset($_GET['success'])) :?>
<div class="alert alert-success">Thanks! We've received your application and will be in touch in-game.</div>
<?php endif; ?>

<div class="jumbotron">
    <div class="container">
        <img src="/images/hangmen.png" />
        <p class="lead">
            Formerly the oldest raiding guild on Shattered Hand.<br>Now calling Arthas home.
        </p>
    </div>
</div>

<div class="featurette"><div class="container" id="progress">
    <h2>Progression</h2>
    <p class="lead">
        <span class="glyphicon glyphicon-check normal-progress"></span> Normal
        &nbsp;
        <span class="glyphicon glyphicon-check heroic-progress"></span> Heroic
    </p>

    <div class="row guild-progress">
        <div class="col-md-3 col-md-offset-2">
            <ul>
                <li class="">Hellfire Assult</li>
                <li class="">Iron Reaver</li>
                <li class="">Kormrok</li>
            </ul>
        </div>
        <div class = "col-md-3 col-md-offset-2">
            <ul>
                <li class="">Hellfire High Council</li>
                <li class="">Kilrogg Deadeye</li>
                <li class="">Gorefiend</li>
            </ul>
        </div>
        <div class ="col-md-3 col-md-offset-2">
            <ul>
                <li class="">Shadow-Lord Iskar</li>
                <li class="">Socrethar the Eternal</li>
                <li class="">Tyrant Velhari</li>
            </ul>
        </div>
        
        <div class="col-md-3 col-md-offset-2">
            <ul>
                <li class="">Fel Lord Zakuun</li>
                <li class="">Xhul'horac</li>
                <li class="">Mannoroth</li>
                <li class="">Archimonde</li>
            </ul>
        </div>
    </div>
</div></div>

<div class="featurette"><div class="container" id="leadership">
    <h2>Leadership</h2>
    <div class="row">
        <div class="col-md-4">
            <h2>Havok</h2>
            <p>Tank lead</p>
            <p>Lags in real life.</p>
            
        </div>
        <div class="col-md-4">
            <h2>Rizx</h2>
            <p>Fearless Figure Head</p>
            <p>0/10 would never say again.</p>
        </div>
        <div class="col-md-4">
            <h2>Blutmark</h2>
            <p>Paladin and good guy lead</p>
            <p>Sorry guys. wearing the wrong gear</p>
        </div>    
        <div class="col-md-4">
            <h2>Pyraev</h2>
            <p></p>Dropping hawt spotify playlist></p>
            <p>Mom</p>
        </div>
        <div class="col-md-4">
            <h2>Roychi</h2>
            <p> Watchs the sharararara chronicles</p>
        </div>
    </div>
</div></div>

<div class="container" id="apply">
    <h2>Apply Now</h2>
    <div class="row">
        <div class="col-md-6">
            <h3>We look for...</h3>
            <ul>
                <li>Situational awareness</li>
                <li>Maturity</li>
                <li>Self-reflection and ability to self-correct mistakes</li>
                <li>DBM</li>
                <li>Know how to have fun</li>
            </ul>

            <h3>We don't care about...</h3>
            <ul>
                <li>Item level. Gear can be improved. Your level of derp cannot.</li>
                <li>What your "main" did or does. Good for you. How does that help us?</li>
                <li>Your age. Our raiders cover the whole spectrum. Age is just a number.</li>
                <li>Your epeen. Mine's bigger anyway.</li>
            </ul>

            <h3>Raid Days (7:30-11pm EST)</h3>
            <ul>
                <li>Tuesday</li>
                <li>Wednesday</li>
            </ul>
        </div>
        <form action="mail.php" method="post" role="form">
        <div class="col-md-5 col-md-offset-1">
            <div class="form-group">
                <label for="character">Character Name (include special characters)</label>
                <input type="text" name="character" id="character" class="form-control" required="required" />
            </div>
            <div class="form-group">
                <label for="realm">Realm (US)</label>
                <input type="text" name="realm" id="realm" class="form-control" value="Arthas" required="required" />
            </div>
            <div class="form-group">
                <label for="armory">Armory</label>
                <input type="text" name="armory" id="armory" class="form-control" value="us.battle.net/wow/en/character/" disabled="disabled" />
            </div>
            <div class="form-group">
                <textarea placeholder="What are you looking for in a guild?" name="statement" class="form-control" rows="5" required="required"></textarea>
            </div>
            <?php
                require_once('recaptchalib.php');
                $publickey = '6Len1e4SAAAAADc0F4DB_yE7UbiI7kaydBABEHfO';
                echo recaptcha_get_html($publickey);
            ?>
            <input type="submit" value="Apply" class="btn btn-lg btn-primary btn-block" />
        </div>
        </form>
    </div>
</div>

<hr>
<div class="footer container">
    <p>
        Copyright 2014 Ye Ole Hangmen of Arthas
    </p>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="/hangmen.js"></script>
</body>
</html>
