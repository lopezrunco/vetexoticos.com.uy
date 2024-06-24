<section class="slider-content">
    <div class="slider">
        <div class="slide active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-slider/slide-2.jpg');">
            <div class="slider-caption">
                <div class="caption">
                    <h1 class="title">¡Todo en un mismo lugar!</h1>
                    <h6 class="subtitle">Primera tienda online para animales no tradicionales con productos recomendados por médicos veterinarios.</h6>
                    <?php
                    $shop_page_url = get_permalink(wc_get_page_id('shop'));
                    echo '<a class="btn btn-secondary" href="' . esc_url($shop_page_url) . '">Ir a la tienda <i class="fa-solid fa-paw"></i></a>'
                    ?>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-slider/slide-1.jpg');">
            <div class="slider-caption">
                <div class="caption">
                    <h1 class="title">¿Te vas de vacaciones? ¡Cuidamos de tu mejor amigo!</h1>
                    <h6 class="subtitle">Contamos con guardería para tu animal de compañía no tradicional, cumpliendo las necesidades de cada especie.</h6>
                    <?php
                    $hotel_page_url = get_permalink(wc_get_page_id('guarderia'));
                    echo '<a class="btn btn-secondary" href="' . esc_url($hotel_page_url) . '">Más información <i class="fa-regular fa-comment-dots"></i></a>'
                    ?>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-slider/slide-3.jpg');">
            <div class="slider-caption">
                <div class="caption">
                    <h1 class="title">¡Incorporamos servicio de ecografía! </h1>
                    <h6 class="subtitle">Conocé más</h6>
                    <?php
                    $services_page_url = get_permalink(wc_get_page_id('servicios'));
                    echo '<a class="btn btn-secondary" href="' . esc_url($services_page_url) . '">Ecografías <i class="fa-solid fa-magnifying-glass"></i></a>'
                    ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Slider arrow controls -->
    <div class="arrow-controls">
        <div class="prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="next"><i class="fa-solid fa-chevron-right"></i></div>
    </div>

    <!-- Slider position -->
    <div class="position"></div>

</section>

<script>
    const slides = document.querySelector(".slider").children;
    const prev = document.querySelector(".prev");
    const next = document.querySelector(".next");
    const position = document.querySelector(".position");
    let index = 0;

    prev.addEventListener("click", function() {
        prevSlide();
        updateCirclePosition();
        resetTimer();
    })
    next.addEventListener("click", function() {
        nextSlide();
        updateCirclePosition();
        resetTimer();
    })

    // Create slider position indicators.
    function circlePosition() {
        for (let i = 0; i < slides.length; i++) {
            const div = document.createElement("div");
            div.innerHTML = i + 1;
            div.setAttribute("onclick", "slideIndicator(this)")
            div.id = i;
            if (i == 0) {
                div.className = "active";
            }
            position.appendChild(div);
        }
    }
    circlePosition();

    // On click in slide indicator, go to slider.
    function slideIndicator(element) {
        index = element.id;
        changeSlide();
        updateCirclePosition();
        resetTimer();
    }

    // Update slider position indicator on slidee change.
    function updateCirclePosition() {
        for (let i = 0; i < position.children.length; i++) {
            position.children[i].classList.remove("active"); // Remove .active class from all the slide indicators.
        }
        position.children[index].classList.add("active");
    }

    // Prev and Next buttons
    function prevSlide() {
        if (index == 0) {
            index = slides.length - 1;
        } else {
            index--;
        }
        changeSlide();
    }

    function nextSlide() {
        if (index == slides.length - 1) {
            index = 0;
        } else {
            index++;
        }

        changeSlide();
    }

    function changeSlide() {
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");
        }

        slides[index].classList.add("active");
    }

    // Stop autoplay when clicmk on indicators or arrows.
    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(autoPlay, 9000); // Autoplay starts again.
    }

    // Autoplay slider
    function autoPlay() {
        nextSlide();
        updateCirclePosition();
    }

    let timer = setInterval(autoPlay, 9000);
</script>