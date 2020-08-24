








// -----------------------------------------------------------
<?php
    class Card {

        var $image;
        var $title;

        public function create_card($image, $title){
?>
            <div class="card text-center" style="width: 70rem;">
                <img src="<?php echo $this->image = $image; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $this->title = $title; ?></h5>
                <p class="card-text">Fashionwave versace exclusive collab clothes.</p>
                <a href="./images2/burberry-1.jpg" class="btn btn-primary">See Image</a>
                </div>
            </div>
<?php
        }
    }
?>


