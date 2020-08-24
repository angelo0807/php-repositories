<?php
//properties//
    class Card2 {

        var $image;
        var $title;

        public function create_card2($image, $title){
?>
            <div class="card text-center" style="width: 30rem; float: left; margin: 50px">
                <img src="<?php echo $this->image = $image; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $this->title = $title; ?></h5>
                <p class="card-text">Fashionwave  exclusive collab clothes.</p>
                <a href="./images2/burberry-1.jpg" class="btn btn-primary">See Image</a>
                </div><!--content objects that conatoin card and text linked totemplate.php//
            </div>
<?php
        }
    }
?>
