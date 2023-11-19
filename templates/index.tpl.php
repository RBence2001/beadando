<header>
    <div id="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav">
            <?php foreach ($oldalak as $url => $oldal) { ?>
                <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                    <li<?= (($oldal == $keres) ? ' class="active" ' : '' ) ?>>
                    <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                    <?= $oldal['szoveg'] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
            <div> 
        
        </ul>
    </nav>
                </div>
                <div id="be"><?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?></div>
    </header>
    

    <div id="content">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>
    <footer>
    <div> 
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
        <a href="http://www.zookecskemet.hu">link</a></p>
    </footer>
</body>
</html>