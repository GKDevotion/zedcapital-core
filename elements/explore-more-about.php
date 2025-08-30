<style>
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }

    .card-title {
        font-weight: bold;
        font-size: 1.15rem;
        min-height: 55px;
    }

    .card-text {
        color: #6c757d;
        font-size: 1rem;
        min-height: 100px;
    }

    .card {
        border: 0;
        background-color: var(--zed-backgound-color);
    }

    .explore-divider {
        height: 1px;
        width: 100%;
        background-color: var(--zed-border-color);
        margin: 15px auto;
    }

    .continue-reading-arraw:hover i{
        transition: transform 0.2s ease;
        transform: translateX(10px);
    }

    .text-timer{
        font-size: 0.9rem;
        color: #6c757d;
    }

    .video-thumbnail {
        position: relative;
        cursor: pointer;
    }
    .video-thumbnail img {
        width: 100%;
        border-radius: 12px;
    }
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        color: white;
        opacity: 0.8;
    }
</style>

<section class="bg-white">
    <div class="container py-5">
        <!-- Section header -->
        <div class="row align-items-center mb-4">
            <div class="col-10" data-aos="fade-up" data-aos-duration="850">
                <h2 class="h2 mb-2">Explore more <?php echo $paramArr['name'];?> with Zed Capital</h2>
            </div>
            <div class="col-2 text-end" data-aos="fade-up" data-aos-duration="850">
                <a href="#" class="show-all-btn">
                    Show All
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!-- Card grid -->
        <div class="row">
            <!-- Cards -->
            <?php
            for( $i=0;$i<COUNT($videoArr);$i++ ){
            ?>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850">
                    <div class="card">
                        <div class="video-thumbnail" data-video="https://www.youtube.com/embed/<?php echo $videoArr[$i]['id'];?>?autoplay=1" data-title="<?php echo $videoArr[$i]['title'];?>">
                            <img src="https://img.youtube.com/vi/<?php echo $videoArr[$i]['id'];?>/hqdefault.jpg" alt="<?php echo $videoArr[$i]['id'];?>" class="card-img-top">
                            <span class="play-btn">▶</span>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <?php echo $videoArr[$i]['title'];?>
                            </div>

                            <div class="explore-divider"></div>

                            <div class="card-text mt-2 mb-3">
                                <?php echo $videoArr[$i]['description'];?>
                            </div>

                            <div class="row">
                                <div class="col-7">
                                    <div class="text-start">
                                        <a href="#" class="text-danger continue-reading-arraw fw-semibold text-decoration-none">
                                            Continue reading 
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-timer text-end">
                                        2025-03-28 17:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<script>
  document.querySelectorAll('.video-thumbnail').forEach(el => {
    el.addEventListener('click', function () {
      const videoUrl = this.getAttribute('data-video');
      const videoTitle = this.getAttribute('data-title');
      this.innerHTML = `<iframe width="100%" height="250" src="${videoUrl}" 
        title="${videoTitle}" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>`;
    });
  });
</script>