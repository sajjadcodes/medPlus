
<?php
/**
 * The template for displaying medical specialist
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('secondary');

$container = get_theme_mod( 'medplus_container_type' );
?>



<main>
        <!-- === ****Sectionb (Medical Specialiest) *** ===  -->
        <section class="medical__special my-5" id="">
            <div class="container">
                <!-- Medical Specialiest(head) -->
                <article class="text-center">
                    <h2 class="fs-24 fw-bold feature__caption--line">Medical Specialities</h2>
                    <p class="w-50 fs-18 fw-normal mx-auto">Lorem Ipsum is simply dummy text of the pritting industry.
                        Lorem
                        Ipsum has been the the 1500s,ining It was popularised in the 1960s w</p>
                </article>
                <!-- Medical Specialiest(caption) -->
                <article class="overflow-hidden pt-4">
                    <div class="row row-cols-1 row-cols-md-3 g-2 g-md-3 text-center">
                        <!-- Medical Widget_1-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-1.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-1">Obstetrician - Gynecologists</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_2-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-2.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Pediatrics</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_3-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-3.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Internal Medicine</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_4-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-4.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Orthopedics</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_5-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-5.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Dentistry</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_6-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-6.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Ear, Nose & Throat</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_7-->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-7.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Dermatology</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                        <!-- Medical Widget_8 -->
                        <div class="col">
                            <div class="med-card shadow border p-3 rounded-20">
                                <span class="d-flex align-items-center justify-content-center">
                                    <img src="./assets/images/medi-specialiest-8.png" alt="Medical Specialiest">
                                    <h3 class="fs-22 fw-semibold clr-text m-0 ps-2">Psychiatry</h3>
                                </span>
                                <p class="fs-16 fw-normal pt-4">Dentistry, also known as Dental and Oral Medicine, is a
                                    branch of medicine that consists.</p>
                            </div>
                        </div>

                    </div>
                </article>
            </div>
        </section>
    </main>






<?php

get_footer();