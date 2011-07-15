<!doctype html>
<html lang="en">
  <head>
    <title>Carly's Muselist</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="header">
      <h1>Carly's Muselist</h1>
    </div>
    <div id="muses">
      <?
      include('spyc.php');
      $muselist = Spyc::YAMLLoad('data.yaml');
      foreach ($muselist as $muse) {
          ?>
      <div class="muse">
        <img src="muse_images/<? echo $muse['image']; ?>" class="pic" />
        <ul class="muse_info">
          <li class="name"><? echo $muse['name']; ?></li>
          <? if ($muse['status'] == "active" && $muse['game']) : ?>
          <li class="game">
            <? if ($muse['site'] == "LJ") : ?>
            <a href="http://<? echo $muse['game']; ?>.livejournal.com/profile"><img src="http://l-stat.livejournal.com/img/community.gif" border="0" style="vertical-align: bottom;"></a><a href="http://<? echo $muse['game']; ?>.livejournal.com/"><span style="font-weight: bold;"><? echo $muse['game']; ?></span></a>
            <? elseif ($muse['site'] == "IJ") : ?>
            <a href="http://asylums.insanejournal.com/<? echo $muse['game']; ?>/profile"><img src="http://www.insanejournal.com/img/community.gif" border="0" style="vertical-align: bottom;"></a><a href="http://asylums.insanejournal.com/<? echo $muse['game']; ?>"><span style="font-weight: bold;"><? echo $muse['game']; ?></span></a>
            <? elseif ($muse['site'] == "DW") : ?>
            <a href="http://<? echo $muse['game']; ?>.dreamwidth/profile"><img src="http://s.dreamwidth.org/img/silk/identity/community.png" border="0" style="vertical-align: bottom;"></a><a href="http://<? echo $muse['game']; ?>.dreamwidth.org/"><span style="font-weight: bold;"><? echo $muse['game']; ?></span></a>
            <? endif; ?>
          </li>
          <? endif; ?>
          <li class="canon">From <? echo $muse['canon']; ?></li>
          <li class="journal">
            <?
            if ($muse['site'] == "LJ") {
            ?>
            <a href="http://<? echo $muse['username']; ?>.livejournal.com/profile"><img src="http://stat.livejournal.com/img/userinfo.gif" border="0" style="vertical-align: bottom;"></a><a href="http://<? echo $muse['username']; ?>.livejournal.com/"><span style="font-weight: bold;"><? echo $muse['username']; ?></span></a>
            <?
            } else if ($muse['site'] == "IJ") {
            ?>
            <a href="http://<? echo $muse['username']; ?>.insanejournal.com/profile"><img src="http://www.insanejournal.com/img/userinfo.gif" border="0" style="vertical-align: bottom;"></a><a href="http://<? echo $muse['username']; ?>.insanejournal.com/"><span style="font-weight: bold;"><? echo $muse['username']; ?></span></a>
            <?
            } else if ($muse['site'] == "DW") {
            ?>
            <a href="http://<? echo $muse['username']; ?>.dreamwidth.org/profile"><img src="http://s.dreamwidth.org/img/silk/identity/user.png" border="0" style="vertical-align: bottom;"></a><a href="http://<? echo $muse['username']; ?>.dreamwidth.org/"><span style="font-weight: bold;"><? echo $muse['username']; ?></span></a>
            <?
            }
            ?>
          </li>
          <li class="pb">PB: <? echo $muse['pb']; ?></li>
        </ul>
      </div>
          <?
      }
      ?>
    </div>
  </body>
</html>