<div class="main-container container mt-4">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item <?= (!isset($part) || $part == '1')?  "active" : "" ?>">
                <?php
                include('part1.php');
                ?>
            </div>
            <div class="carousel-item <?= (isset($part) && $part == '2') ? "active": "" ?>">
                <?php
                include('part2.php');
                ?>
            </div>
            <div class="carousel-item <?= (isset($part) && $part == '3') ? "active": "" ?>">
                <?php
                include('part3.php');
                ?>
            </div>
            <div class="carousel-item  <?= (isset($part) && $part == '4')?  "active" : "" ?>">
                <?php
                include('part4.php');
                ?>
            </div>
            <div class="carousel-item <?= (isset($part) && $part == '5')?  "active" : "" ?>">
                <?php
                include('part5.php');
                ?>
            </div>
            <div class="carousel-item <?= (isset($part) && $part == '6') ? "active": "" ?>">
                <?php
                include('part6.php');
                ?>
            </div>
            <div class="carousel-item <?= (isset($part) && $part == '7') ? "active": "" ?>">
                <?php
                include('part7.php');
                ?>
            </div>
            <div class="carousel-item  <?= (isset($part) && $part == '8')?  "active" : "" ?>">
                <?php
                include('part8.php');
                ?>
            </div>
            <div class="carousel-item  <?= (isset($part) && $part == '9')?  "active" : "" ?>">
                <?php
                include('part9.php');
                ?>
            </div>
            <div class="carousel-item  <?= (isset($part) && $part == '10')?  "active" : "" ?>">
                <?php
                include('part10.php');
                ?>
            </div>
            
        </div>
    </div>
    
    <?php
    include('loadbar.php');
    ?>
</div>