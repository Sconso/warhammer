<?php include_once('header.php'); ?>

<section id="section">
    <div id="play">
        PLAY
        <div id="game">
            <?php include('game.php'); ?>
        </div>
    </div>
    <div id="options">
        <input type='button' id='zoomin' value='Zoom In'/>
        <input type='button' id='zoomout' value='Zoom Out'/>
    </div>                
</section>

<?php include_once('footer.php'); ?>