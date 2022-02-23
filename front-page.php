<?php
/**
 * The template for displaying home page/front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'medplus_container_type' );

?>



<!-- MedPlus Home page -->

        <main>

                <section class="hero" id="startchange" style="background-image: url(<?php echo get_theme_mod( 'medplus_hero_image_setting');?>)" 
                
                >
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="caption d-flex align-items-start flex-column justify-content-center">
                                <h1 class="text-white fw-bold fs-64 mb-4 text-center text-lg-start" style="z-index: 9;" data-aos="fade-right">
                                    <?php echo get_theme_mod( 'medplus_hero_headline_text_setting');?>
                                </h1>
                                    
                                <a class="fs-20 fw-semibold text-white text-decoration-underline pb-4 text-center d-lg-none d-block w-100"
                                    style="z-index: 9;" href="#" type="button">View All</a>
                                <div class="d-lg-flex d-none gap-5">
                                    <a  href="<?php echo home_url('/services') ?>" class="button button--state-active btn-lg fs-26 fw-medium shadow"  data-aos="fade-left">Our
                                        Services</a>
                                        <a  href="<?php echo home_url('/medical-specialities') ?>" class="button btn-lg fs-26 fw-medium shadow"  data-aos="fade-down">View Our Doctors</a>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- === **** Section (Button's For Destop View) *** ===  -->
                <section class="btn-category position-relative d-md-block d-none">
                    <div class="<?php echo esc_attr( $container ); ?>">
                        <div class="d-md-grid gap-4 d-md-flex justify-content-center">
                            <button class="clr-text fs-20 py-3 fw-semibold w-28 rounded-20 shadow border bg-white"
                                type="button"  data-aos="fade-up">
                                <img class="img-fluid me-1" src="<?php echo get_theme_mod( 'medplus_featured_icon_one_setting');?>" alt="Highly Trained Dentists">
                                <?php echo get_theme_mod( 'medplus_hero_freatue_one_text_setting');?>
                            </button>
                            <button class="clr-text fs-20 py-3 fw-semibold w-28 rounded-20 shadow border bg-white"
                                type="button"  data-aos="fade-up">
                                <img class="img-fluid me-1" src="<?php echo get_theme_mod( 'medplus_featured_icon_two_setting');?>" alt="">
                                <?php echo get_theme_mod( 'medplus_hero_freatue_two_text_setting');?>
                            </button>
                            <button class="clr-text fs-20 py-3 fw-semibold w-28 rounded-20 shadow border bg-white"
                                type="button"  data-aos="fade-up">
                                <img class="img-fluid me-1" src="<?php echo get_theme_mod( 'medplus_featured_icon_three_setting');?>" alt="Highly Trained Dentists">
                                <?php echo get_theme_mod( 'medplus_hero_freatue_three_text_setting');?>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- === **** Section (Button's For Mobile View) *** ===  -->
                <div class="btn-category carousel mobile_btn_slider d-md-none d-block" id="carouselExampleIndicators"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active rounded-2" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner overflow-visible">

                        <div class="carousel-item active">
                            <div class="container">
                                <span class="d-flex align-items-center justify-content-center">
                                    <button
                                        class="btn-slider clr-text fs-20 fw-semibold w-100 rounded-20 shadow border bg-white"
                                        type="button">
                                        <img class="img-fluid me-4" src="<?php echo get_template_directory_uri() ?>./assets/images/CapIcon.png"
                                            alt="Highly Trained Dentists">
                                        Highly Trained Dentists
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <span class="d-flex align-items-center justify-content-center">
                                    <button
                                        class="btn-slider clr-text fs-20 fw-semibold w-100 rounded-20 shadow border bg-white"
                                        type="button">
                                        <img class="img-fluid me-4" src="<?php echo get_template_directory_uri() ?>./assets/images/MedalIcon.png"
                                            alt="Experienced Doctors">
                                        Experienced Doctors
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <span class="d-flex align-items-center justify-content-center">
                                    <button
                                        class="btn-slider clr-text fs-20 fw-semibold w-100 rounded-20 shadow border bg-white"
                                        type="button">
                                        <img class="img-fluid me-4" src="<?php echo get_template_directory_uri() ?>./assets/images/CapIcon.png"
                                            alt="Highly Trained Dentists">
                                        Highly Trained Dentists
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- === **** Section Doctor(Slider) *** ===  -->

                <div class="carousel staff__slider slide my-5" id="carouselExampleCaptions" data-bs-ride="carousel">
                    <div class="container">
                        <div class="carousel-inner">

                         

                            <?php
                                  
                                     $doctorTerm = get_terms( array(
                                        'taxonomy' => 'area',
                                    ) );
        
        
                                       $typeTerm = array(); 
                                        foreach($doctorTerm as $term){
        
                                            array_push($typeTerm, $term->name);
                                           
                                        }


                                        $args = array(
                                            'post_type'      => 'doctor',
                                            'posts_per_page' => 10,
                                        );
                                        $doctorQuery= new WP_Query($args);
                                        $i=0;
                                        while($doctorQuery->have_posts()) {
                                       
                                            $doctorQuery->the_post();
                                                ?>

                                         <div class="carousel-item <?php if($i == 0): ?>active<?php endif; ?>">
                                            <div
                                                class="row gap-lg-0 gap-4 d-lg-flex flex-lg-row flex-column justify-content-center align-items-center">
                                                <div class="col-lg-6 d-flex justify-content-center" data-aos="zoom-in-up">
                                                    <span class="outer-circle rounded-circle">
                                                        <span class="inner-circle rounded-circle">
                                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="col-lg-6 text-center text-lg-start ms-n3" data-aos="zoom-in-up">
                                                    <h2 class="fs-24 fw-bold clr-text"><?php the_title(); ?></h2>
                                                    <h2 class="fs-24 fw-semibold fst-italic"><?php echo $typeTerm[$i]?></h2>
                                                    <p class="fs-18 fw-normal">
                                                        <?php the_content();  ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                           <?php 
                                           $i++;
                                        }
                            
                            ?>

                            <!-- <div class="carousel-item">
                                <div
                                    class="row gap-lg-0 gap-4 d-lg-flex flex-lg-row flex-column justify-content-center align-items-center">
                                    <div class="col-lg-6 d-flex justify-content-center">
                                        <span class="outer-circle rounded-circle">
                                            <span class="inner-circle rounded-circle">
                                                <img src="assets/images/Image-Mask.png">
                                            </span>
                                        </span>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-start ms-n3">
                                        <h2 class="fs-24 fw-bold clr-text">Dr. Hanaa Mohamad</h2>
                                        <h2 class="fs-24 fw-semibold fst-italic">Obstetrician - Gynecologists</h2>
                                        <p class="fs-18 fw-normal">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                            the
                                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div
                                    class="row gap-lg-0 gap-4 d-lg-flex flex-lg-row flex-column justify-content-center align-items-center">
                                    <div class="col-lg-6 d-flex justify-content-center">
                                        <span class="outer-circle rounded-circle">
                                            <span class="inner-circle rounded-circle">
                                                <img src="assets/images/Image-Mask.png">
                                            </span>
                                        </span>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-start ms-n3">
                                        <h2 class="fs-24 fw-bold clr-text">Dr. Hanaa Mohamad</h2>
                                        <h2 class="fs-24 fw-semibold fst-italic">Obstetrician - Gynecologists</h2>
                                        <p class="fs-18 fw-normal">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                            the
                                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

               
                <!-- === **** Section features *** ===  -->
                <section class="py-5 bg-clr-gray" id="featured">
                    <div class="container">
                        <div class="feature__caption text-center">
                            <h2 class="fs-24 fw-bold feature__caption--line" data-aos="fade-up">Before & After Gallery <?php echo get_theme_mod( 'medplus_gallary_section_title_setting');?></h2>
                            <p class="w-50 fs-18 fw-normal mx-auto" data-aos="fade-up">Lorem Ipsum is simply dummy text of the pritting industry.
                                Lorem
                                Ipsum has been the the 1500s,ining It was popularised in the 1960s w
                                <?php echo get_theme_mod( 'medplus_gallary_section_subtitle_setting');?>
                            </p>
                            <a class="fs-20 fw-semibold clr-text text-decoration-underline pb-4" data-aos="fade-up" href="#" type="button">View
                                All</a>
                            <img class="img-fluid" data-aos="fade-right" src=" <?php echo get_theme_mod( 'medplus_gallery_image_setting');?>" alt="Before & After Treatment">
                        </div>
                    </div>
                </section>

                <!-- === **** Section Appoitment *** ===  -->
                <section class="py-5 bg-white" id="appointment">
                    <div class="container">
                        <h3 class="fs-24 fw-bold clr-text pb-4" data-aos="fade-up">Make An Appoitment</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form data-aos="fade-left">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fs-18 fw-medium">Full Name*</label>
                                        <input type="Name" class="form-control shadow border-0" id="" name=""
                                            aria-describedby="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="PhoneNumber" class="form-label fs-18 fw-medium">Phone Number*</label>
                                        <input type="Phone" class="form-control shadow border-0" id="" name=""
                                            aria-describedby="Phone Number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Service" class="form-label fs-18 fw-medium">Choose Service*</label>
                                        <select class="form-select form-control shadow border-0" aria-label="select example">
                                            <option selected>Service</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Textarea" class="form-label fs-18 fw-medium">Notes</label>
                                        <textarea class="form-control shadow border-0" id="" name="" rows="5"
                                            placeholder="Write your notes here...." required></textarea>
                                    </div>
                                    <button data-aos="fade-down"
                                        class="button button--state-active fs-20 fw-bold shadow rounded-10 float-end mt-3 d-md-block d-none"
                                        style="width: 290px;">Confirm</button>
                                </form>
                            </div>
                            <!-- Calander Appoitment -->
                            <div class="col-md-6" data-aos="fade-right">
                                <table class="calander w-100 h-100 shadow border text-center">
                                    <thead>
                                        <tr>
                                            <th colspan="7">
                                                <span class="btn-group d-flex justify-content-between py-4">
                                                    <a class="btn"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/arrow-left.png"
                                                            alt="arrow calander left"></i></a>
                                                    <h4 class="fs-26 fw-semibold">December 2022</h4>
                                                    <a class="btn"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/arrow-right.png"
                                                            alt="arrow calander left"></i></a>
                                                </span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Su</th>
                                            <th>Mo</th>
                                            <th>Tu</th>
                                            <th>We</th>
                                            <th>Th</th>
                                            <th>Fr</th>
                                            <th>Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="muted">29</td>
                                            <td class="muted">30</td>
                                            <td class="muted">31</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td class="btn-primary"><strong>20</strong></td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td class="muted">1</td>
                                            <td class="muted">2</td>
                                            <td class="muted">3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button
                                class="button button--state-active fs-20 fw-bold shadow rounded-10 float-end mt-4 d-md-none d-block mx-auto"
                                style="width: 290px;">Confirm</button>
                        </div>
                    </div>
                </section>

                <!-- === **** Section About MediPlus *** ===  -->
                <section class="py-5 bg-clr-gray" id="about">
                    <div class="container overflow-hidden">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="fs-24 fw-bold" data-aos="flip-down"> <?php echo get_theme_mod( 'medplus_about_section_title_setting');?> </h2>
                                <p class="fs-18 fw-normal" data-aos="flip-right">
                                <?php echo get_theme_mod( 'medplus_about_section_title_setting');?>
                                </p>
                                <div class="row">
                                    <div class="col-6 d-md-block d-flex justify-content-between">
                                        <ul>
                                            <li class="fs-23 text-center text-md-start py-1 fw-bold clr-text" data-aos="fade-up">
                                                <strong><?php echo get_theme_mod( 'medplus_about_section_doctor_counter_setting');?>+</strong>
                                            </li>
                                            <li class="fs-23 text-center text-md-start py-1 fw-semibold" data-aos="fade-up">
                                                <strong>Doctors</strong>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="fs-23 text-center text-md-start py-1 fw-bold clr-text" data-aos="fade-up">
                                                <strong><?php echo get_theme_mod( 'medplus_about_section_patient_counter_setting');?>+</strong>
                                            </li>
                                            <li class="fs-23 text-center text-md-start py-1 fw-semibold" data-aos="fade-up">
                                                <strong>Patients</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-md-block d-flex justify-content-between">
                                        <ul>
                                            <li class="fs-23 text-center text-md-start py-1 fw-bold clr-text" data-aos="fade-left">
                                                <strong><?php echo get_theme_mod('medplus_about_section_nurse_counter_setting'); ?>+</strong>
                                            </li>
                                            <li class="fs-23 text-center text-md-start py-1 fw-semibold" data-aos="fade-left"><strong>Nurses</strong>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="fs-23 text-center text-md-start py-1 fw-bold clr-text" data-aos="fade-up">
                                                <strong><?php echo get_theme_mod('medplus_about_section_case_studies_counter_setting');?>+</strong>
                                            </li>
                                            <li class="fs-23 text-center text-md-start py-1 fw-semibold" data-aos="fade-up"><strong>Case
                                                    Studeis</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-between flex-column">
                                        <img class="img-fluid" src="<?php echo get_theme_mod('medplus_about_image_one_setting');?>" alt="About mediPlus" data-aos="fade-right">
                                        <img class="img-fluid" src="<?php echo get_theme_mod('medplus_about_image_two_setting');?>" alt="About mediPlus" data-aos="fade-left">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="<?php echo get_theme_mod('medplus_about_image_three_setting');?>" alt="About mediPlus" data-aos="fade-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- === **** Section Testimonial *** ===  -->
                <section class="my-5" id="testimonials">
                    <div class="container">
                        <div class="testimonial__head">
                            <h2 class="fs-24 fw-bold clr-text" data-aos="fade-right">Testimonials</h2>
                            <p class="fs-18 fw-normal m-0" data-aos="fade-left">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took.</p>
                        </div>
                        <div class="testimonial__slider">
                            <!-- Testimonial (Slide_1)-->
                           <?php 

                            $testArgs = array(
                                'post_type'      => 'testimonial',
                                'posts_per_page' => 10,
                            );
                            $testimonialQuery= new WP_Query($testArgs);
                           
                           while($testimonialQuery->have_posts()) {
                            $testimonialQuery->the_post();
                               ?>

                            <div  data-aos="zoom-in-up">
                                <div class="testimonial__caption shadow border bg-white p-3 rounded-20 my-4 me-2">
                                    <div class="d-flex justify-content-between align-items-baseline pb-4">
                                        <div class="d-flex align-items-center">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Testimonial Card">
                                            <span class="testimonial__title ps-3">
                                                <h3 class="fs-20 fw-medium m-0"><?php the_title(); ?></h3>
                                                <small class="fs-16 fst-italic clr-text-light"><?php echo get_the_title(); ?></small>
                                            </span>
                                        </div>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>./assets/images/Stars.png" alt="Customer Rating">
                                    </div>
                                    <p class="fs-16 fw-normal m-0">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            </div>

                            <?php 
                           }
                           ?>
                           
                        </div>
                    </div>
                </section>
            
                <!-- Section: Google Map -->
                <section id="googleMap">
                    <iframe class="w-100"
                        src="<?php echo get_theme_mod('medplus_map_url_setting');?>"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </section>
        </main>

    <script src="<?php echo get_template_directory_uri()?>./assets/js/aos.js"></script>
    <script src="<?php echo get_template_directory_uri()?>./assets/js/slick.min.js"></script>

    <script>
        AOS.init();


        $('.testimonial__slider').slick({

            speed: 100,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            arrows: false,
            dots: false,
            responsive: [{
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
            });
    </script>

<?php
get_footer();
