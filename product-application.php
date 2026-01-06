<?php include 'header.php'; ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3><?= $lang['product-application']; ?></h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index"><?= $lang['home']; ?></a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li><?= $lang['product-application']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->






<!-- <section class="about-two">
    <div class="about-two__shape-3 float-bob-x">
        <img src="assets/images/shapes/about-two-shape-3.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="assets/images/resources/mission-4.svg" alt="">
                        </div>
                        <div class="new_product about-two__img-2">
                            <img src="assets/images/resources/mission-4.png" alt="">
                        </div>
                        <div class="about-two__shape-1">
                           
                        </div>
                        <div class="about-two__shape-2 float-bob-y">
                            
                        </div>
                        <div class="about-two__experience">
                            <div class="about-two__experience-count-box count-box">
                                <h3 class="count-text" data-stop="25" data-speed="1500"></h3>
                                <span>+</span>
                            </div>
                            <p class="about-two__experience-count-text">Years of<br> Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-two__right">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__shape-1">
                                <img src="assets/images/resources/section-title-shape-1.png" alt="">
                            </div>
                            <h6 class="section-title__tagline"> Food Irradiation</h6>
                            <div class="section-title__shape-1">
                                <img src="assets/images/resources/section-title-shape-2.png" alt="">
                            </div>
                        </div>
                        <h3 class="section-title__title title-animation">
                            Food Irradiation for Safer, Longer-Lasting Foods

                        </h3>
                       
                    </div>

                    <p class="about-two__text">
                        A scientifically validated process using controlled gamma radiation to improve food safety.
                    </p>

                    <p class="about-two__text-2">
                        Food irradiation extends shelf life, reduces food losses, and eliminates harmful microorganisms
                        such as bacteria, parasites, and insects without compromising food quality.
                    </p>

                    <div class="about-two__tab tab-box tab-box-one">
                        <ul class="tabs-button-box list-unstyled clearfix">
                            <h3>How Food Irradiation Helps</h3>
                        </ul>
                        <div class="tabs-content tabs-content-box">
                            <div class="tab tab-active" id="mission">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">
                                        <div class="about-two__single-tab-text">
                                        </div>
                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Controls foodborne pathogens like Salmonella and E. coli.
                                                </p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Delays ripening and senescence in fruits and vegetables.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Prevents sprouting in potatoes, onions, and garlic.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Disinfests grains and pulses from insects.
                                                </p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Reduces dependence on chemical fumigants.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-two__tab tab-box">
                        <ul class="tabs-button-box list-unstyled clearfix">
                            <h3>Food Categories Treated</h3>
                        </ul>
                        <div class="tabs-content tabs-content-box">
                            <div class="tab tab-active" id="mission">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">
                                        <div class="about-two__single-tab-text">
                                        </div>
                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Fruits and vegetables.
                                                </p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Spices and condiments.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Cereals, pulses, and grains.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Meat, poultry, and seafood.
                                                </p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Dry and packaged food products.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="about-two__text-2">
                        Food irradiation is approved by WHO, FAO, IAEA, FSSAI, and AERB, and is widely used to meet domestic and export food safety standards.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section> -->



<section class="about-two">
    <div class="about-two__shape-3 float-bob-x">
        <img src="assets/images/shapes/about-two-shape-3.png" alt="">
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="assets/images/product-application/food-irradiation.png" alt="">
                        </div>
                        <div class="about-two__img-2">

                            <img src="assets/images/product-application/industrial.png" alt="">
                        </div>
                        <div class="about-two__experience">
                            <p class="about-two__experience-count-text">Food Irradiation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-two__right">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__shape-1">
                                <img src="assets/images/resources/section-title-shape-1.png" alt="">
                            </div>
                            <h6 class="section-title__tagline"><?= $lang['FoodIrradiation-title']; ?></h6>
                            <div class="section-title__shape-1">
                                <img src="assets/images/resources/section-title-shape-2.png" alt="">
                            </div>
                        </div>
                        <h3 class="section-title__title title-animation">Food Irradiation for Safer,
                            Longer-Lasting Foods
                        </h3>
                        <!-- <h3 class="section-title__title1 title-animation"><?= $lang['FoodIrradiation-maintitle']; ?>
                        </h3> -->
                    </div>
                    <p class="quote-text about-two__text"><?= $lang['FoodIrradiation-subtitle']; ?>
                    </p>
                    <p class="about-two__text-2"><?= $lang['FoodIrradiation-desc']; ?>
                    </p>
                    <div class="about-two__tab tab-box">
                        <ul class="tabs-button-box list-unstyled clearfix">
                            <li data-tab="#food" class="tab-btn-item active-btn">
                                <h3>How Food Irradiation Helps</h3>
                            </li>
                            <li data-tab="#Categories" class="tab-btn-item">
                                <h3> Food Categories Treated</h3>
                            </li>
                        </ul>
                        <div class="tabs-content tabs-content-box">

                            <div class="tab tab-active" id="food">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">

                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Controls foodborne pathogens like Salmonella and E. coli.</p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Delays ripening and senescence in fruits and vegetables.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Prevents sprouting in potatoes, onions, and garlic.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Disinfests grains and pulses from insects.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Reduces dependence on chemical fumigants.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab " id="Categories">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">

                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Fruits and vegetables.</p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Spices and condiments.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Cereals, pulses, and grains.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Meat, poultry, and seafood.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Dry and packaged food products.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <p class="about-two__text-2">
                        Food irradiation is approved by WHO, FAO, IAEA, FSSAI, and AERB, and is widely used to meet domestic and export food safety standards.
                    </p>

                </div>
            </div>


        </div>
    </div>
</section>

<section class="about-two">
    <div class="about-two__shape-3 float-bob-x">
        <img src="assets/images/shapes/about-two-shape-3.png" alt="">
    </div>
    <div class="container mb-5">
        <div class="row">

            <div class="col-xl-6">
                <div class="about-two__right">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__shape-1">
                                <img src="assets/images/resources/section-title-shape-1.png" alt="">
                            </div>
                            <h6 class="section-title__tagline">Individually Quick Frozen (IQF) Technology</h6>
                            <div class="section-title__shape-1">
                                <img src="assets/images/resources/section-title-shape-2.png" alt="">
                            </div>
                        </div>
                        <h3 class="section-title__title title-animation">Individually Quick Frozen (IQF) Technology
                        </h3>
                    </div>
                    <p class="quote-text about-two__text">"An advanced freezing process designed to preserve the natural quality of food products".
                    </p>
                    <p class="about-two__text-2">IQF rapidly freezes individual food items to maintain freshness, texture, nutrition, and appearance,
                        while preventing clumping and ensuring products remain free-flowing and easy to handle.
                    </p>
                    <div class="about-two__tab tab-box">
                        <ul class="tabs-button-box list-unstyled clearfix">
                            <li data-tab="#process" class="tab-btn-item active-btn">
                                <h3> IQF Process Overview</h3>
                            </li>
                            <li data-tab="#product" class="tab-btn-item">
                                <h3> IQF Product Portfolio</h3>
                            </li>
                            <li data-tab="#farm" class="tab-btn-item">
                                <h3> IQF Farm-to-Freezer</h3>
                            </li>
                        </ul>
                        <div class="tabs-content tabs-content-box">

                            <div class="tab tab-active" id="process">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">

                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Sorting and grading of raw produce.</p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Washing and blanching (if required).</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Rapid freezing at ultra-low temperatures.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Individual piece separation.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Hygienic packaging and cold storage.</p>
                                            </li>
                                        </ul>
                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>High penetration power
                                                </p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Stable and reliable radiation output</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Long half-life (~5.27 years)</p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab " id="product">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">

                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Fruits (mango, berries, pineapple).</p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Vegetables (peas, corn, beans).</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Ready-to-cook and ready-to-eat food items.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab " id="farm">
                                <div class="about-two__single-tab">
                                    <div class="about-two__single-tab-inner">
                                        <ul class="about-two__single-tab-bottom-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Bubble Wash: Gentle dirt removal.</p>
                                            </li>

                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Ozone Wash: Chemical-free sterilization.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Brush Polishing: For root vegetables.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Prep: Peeling, De-Sapping, and Precision Dicing.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Blanching: Enzyme inactivation for color retention.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Freezing: 2T/Hr JBT IQF Tunnel.</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="fas fa-check"></span>
                                                </div>
                                                <p>Packing: Metal detection and bulk/retail packaging.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-two__left wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img src="assets/images/product-application/iqf.png" alt="">
                        </div>
                        <div class="about-two__img-2">

                            <img src="assets/images/product-application/iqf-CAD.png" alt="">
                        </div>
                        <div class="about-two__experience">
                            <p class="about-two__experience-count-text">Individually Quick Frozen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ================= TAB FIX SCRIPT ================= -->
<script>
    document.querySelectorAll('.tab-box').forEach(tabBox => {
        const buttons = tabBox.querySelectorAll('.tab-btn-item');
        const tabs = tabBox.querySelectorAll('.tab');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.getAttribute('data-tab');

                buttons.forEach(b => b.classList.remove('active-btn'));
                tabs.forEach(t => t.classList.remove('tab-active'));

                btn.classList.add('active-btn');
                tabBox.querySelector(target).classList.add('tab-active');
            });
        });
    });
</script>




<?php include 'footer.php'; ?>