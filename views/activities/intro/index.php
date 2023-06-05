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
            
        </div>
    </div>
    
    <?php
    include('loadbar.php');
    ?>
</div>