<?php
include 'config/db.php';
include 'includes/header.php';
include 'includes/navbar.php';

$query = "SELECT * FROM slides";
$result = mysqli_query($conn, $query);
?>

<section class="hero">

    <div class="container">

        <h1 data-aos="fade-up">
            Modern WPoets Assignment
        </h1>

        <p data-aos="fade-up" data-aos-delay="200">
            Premium CRUD + Synced Slider UI
        </p>



    </div>

</section>

<section class="main-section">

    <div class="container">

        <div class="row">

            <!-- Tabs -->

            <div class="col-lg-3">

                <div class="tabs-column">

                    <?php
                    $count = 0;

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                        <div class="custom-tab <?php if ($count == 0) {
                                                    echo 'active';
                                                } ?>">

                            <?php echo $row['category']; ?>

                        </div>

                    <?php
                        $count++;
                    }
                    ?>

                </div>

            </div>

            <?php
            mysqli_data_seek($result, 0);
            ?>

            <!-- Content Slider -->

            <div class="col-lg-5">

                <div class="swiper contentSlider">

                    <div class="swiper-wrapper">

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                            <div class="swiper-slide">

                                <div class="slider-card">

                                    <h2>
                                        <?php echo $row['title']; ?>
                                    </h2>

                                    <p>
                                        <?php echo $row['description']; ?>
                                    </p>

                                    <a href="admin/dashboard.php" class="read-btn d-inline-block text-decoration-none">
                                        Read More
                                    </a>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>


            </div>

            <?php
            mysqli_data_seek($result, 0);
            ?>

            <!-- Image Slider -->

            <div class="col-lg-4">

                <div class="swiper imageSlider">

                    <div class="swiper-wrapper">

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                            <div class="swiper-slide">

                                <div class="image-box">

                                    <img src="uploads/<?php echo $row['image']; ?>">

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>

        <?php
mysqli_data_seek($result,0);
?>

        <!-- MOBILE ACCORDION -->

        <div class="mobile-accordion d-lg-none">

            <div class="accordion" id="mobileAccordion">

                <?php
                mysqli_data_seek($result, 0);

                $count = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden">

                        <h2 class="accordion-header">

                            <button
                                class="accordion-button <?php if ($count != 0) {
                                                            echo 'collapsed';
                                                        } ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo $row['id']; ?>">

                                <?php echo $row['category']; ?>

                            </button>

                        </h2>

                        <div
                            id="collapse<?php echo $row['id']; ?>"
                            class="accordion-collapse collapse <?php if ($count == 0) {
                                                                    echo 'show';
                                                                } ?>"
                            data-bs-parent="#mobileAccordion">

                            <div class="accordion-body p-0">

     <div class="mobile-slide">

    <img 
    src="uploads/<?php echo $row['image']; ?>" 
    class="mobile-bg-image"
    >

                                    <div class="mobile-overlay">

                                        <h2>
                                            <?php echo $row['title']; ?>
                                        </h2>

                                        <p>
                                            <?php echo $row['description']; ?>
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                <?php
                    $count++;
                }
                ?>

            </div>

        </div>

    </div>

</section>

<footer>
    Built for WPoets Assignment | Created by Gaurav Shinde
</footer>

<?php include 'includes/footer.php'; ?>