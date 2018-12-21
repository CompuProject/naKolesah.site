<div class="review">
	<div class="container text-center">
		<h2 id="reviews">Отзывы наших клиентов</h2>
		<div id="reviews_carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php
                for ($i=1; $i<=6; $i++) {?>
                <div class="item <?php if ($i == 1) {
                    echo 'active';
                } ?>">
                    <a href="javascript:void(0)" data-featherlight="#lightbox-<?=$i?>" data-toggle="lightbox">
                    <img class="d-block w-100" id="lightbox-<?=$i?>" src="assets/img/reviews/review-<?=$i?>.jpg" alt="slide">
                    </a>
                </div>
                <?php
                }?>
			</div>
			<!-- Controls -->
			<a class="carousel-control-prev" href="#reviews_carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#reviews_carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
        <a href="javascript:void(0)" class="review__send btn_modal" id="modal-reviews">
            Оставить отзыв
        </a>
	</div>
</div>