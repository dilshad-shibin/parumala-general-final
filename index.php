<?php
error_reporting(0);
$source='';
$source=$_GET['utm_source'];
$medium='';
$medium=$_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Parumala - General Departments </title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/cookiealert.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NNV4TFZ');</script>
<!-- End Google Tag Manager -->


</head>

<body class="homepage-1">

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNV4TFZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <div class="nav-logo1">
                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-regular" src="assets/img/logo/parumala-logo.png" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="assets/img/logo/parumala-logo.png"
                            alt="sticky brand-logo">
                    </a>
                </div>
                <div class="nav-logo2">
                    <a href="index.html">
                        <img src="assets/img/logo/happy-healing-logo.png" alt="" class="">
                    </a>
                </div>

                <div class="navbar-inner">
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area h-90vh d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-12 col-lg-7 pr-100">

                    </div>
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="welcome-form">
                            <form name="form1" method="post" action="email.php">
                                <div class="form-title">
                                    <h4>Request for an Appointment</h4>
                                    <p>Get in touch with us!</p>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel"
                                        pattern="[0-9]{10}" maxlength="10"
                                        oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                        onchange="this.setCustomValidity('')">
                                </div>
                                <div class="form-group form-group-btn">
                                    <input type="hidden" name="esource" value="<?php echo $source;?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                    <input type="submit" value="submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Center of Excellence Area Start ***** -->
        <section class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="about-head">
                            <h1>Centres Of  <span>Excellence</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="centres-listing owl-carousel">
                                    <div class="single-centre">
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/01.png" alt="" class="hover-none">
                                                    <img src="assets/img/excelence/png/01.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Institute of Oncology</h4></div>
                                                <div class="text"><p>St. Gregorios International Cancer Care Centre (SGICCC) provides multidisciplinary...</p></div>
                                            </a>
                                        </div>
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon"> 
                                                    <img src="assets/img/excelence/png-color/04.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/04.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Neuroscience</h4></div>
                                                <div class="text"><p>We offer comprehensive state of the art facilities for treatment in the field of Neurological...</p></div>
                                            </a>
                                        </div>
                                    </div><!-- 1st single close -->
                                    <!-- 1st Single close -->
                                    <div class="single-centre">
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/02.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/02.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Institute of Cardiothoracic Centre</h4></div>
                                                <div class="text"><p>St. Gregorios Cardiac Centre and Research Institute Centre of Excellence.....</p></div>
                                            </a>
                                        </div>
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/05.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/05.png" alt="" class="d-none hover-block">                                         
                                                </div>
                                                <div class="head"><h4>Orthopaedics & Arthroscopic Surgery</h4></div>
                                                <div class="text"><p>The department of Orthopedics has excellent facilities for advanced trauma...</p></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 2nd Single close -->
                                    <div class="single-centre">
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/03.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/03.png" alt="" class="d-none hover-block">                                         
                                                </div>
                                                <div class="head"><h4>Renal Care Centre</h4></div>
                                                <div class="text"><p>The Renal Care Center at Parumala Hospital is one of the best in the region...</p></div>
                                            </a>
                                        </div>
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/06.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/06.png" alt="" class="d-none hover-block">                                          
                                                </div>
                                                <div class="head"><h4>Head & Neck Reconstructive Surgery</h4></div>
                                                <div class="text"><p>The Head and Neck Oncology & Reconstructive Surgery department has excellence...</p></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 3rd Single close -->
                                    <div class="single-centre">
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/07.png" alt="" class="hover-none">
                                                    <img src="assets/img/excelence/png/07.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Medical & Surgical Gastroenterology</h4></div>
                                                <div class="text"><p>The Gastroenterology department in the hospital offers advanced care for comprehensive....</p></div>
                                            </a>
                                        </div>
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon"> 
                                                    <img src="assets/img/excelence/png-color/08.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/08.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Critical Care</h4></div>
                                                <div class="text"><p>The Department of Critical Care Medicine provides 24 X 7 comprehensive solution....</p></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 4th Single close -->
                                    <div class="single-centre">
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon">
                                                    <img src="assets/img/excelence/png-color/09.png" alt="" class="hover-none">
                                                    <img src="assets/img/excelence/png/09.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Women Health</h4></div>
                                                <div class="text"><p>With the most advanced facilities of its kind in the region....</p></div>
                                            </a>
                                        </div>
                                        <div class="centre-box">
                                            <a href="#">
                                                <div class="icon"> 
                                                    <img src="assets/img/excelence/png-color/10.png" alt=""  class="hover-none">
                                                    <img src="assets/img/excelence/png/10.png" alt="" class="d-none hover-block">
                                                </div>
                                                <div class="head"><h4>Child Care</h4></div>
                                                <div class="text"><p>Children born with disabilities have to be addressed at an early stage to optimize their....</p></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- 5th close -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Multi Specialities Area Start ***** -->
        <section class="multi-spec-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="speciality-head">
                            <div class="head"><h1>Multi Specialities</h1></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="speciality-slider owl-carousel">
                            
                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/anasthesia.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Anaesthesiology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The department of Anesthesiology offers excellent anesthesia and critical care services to patients in the postoperative setup…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/dentistry.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Dentistry</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The department is committed to provide patients with comprehensive and superior dental care with most advanced technologies…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/ayurvedic.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Ayurvedic Medicine</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>As its name implies, the Ayurveda department has been established in the St. Gregorios Medical Mission Hospital, Parumala…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/dermatology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Dermatology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Dermatology Department offers comprehensive consultation and treatment for all dermatological conditions including…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 2 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/cardio.png" alt="">
                                           </div>
                                           <div class="name">
                                               <h3>Cardiothoracic Centre</h3>
                                           </div>
                                           <div class="spc-bx-hover">
                                            <p>St. Gregorios Cardiac Centre and Research Institute Centre of Excellence in Cardiac Sciences offers a comprehensive range…</p>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/emergency.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Emergency Medicine</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>Emergency Medicine is a medical specialty which deals with all acute illnesses whether it is medical or surgical of..</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 3 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/rahabilitation.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Clinical & Rehabilitation Psychology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>Rehabilitation Psychology is recognized as a clinical specialty within the broad areas of psychology and the role of rehabilitation…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/endo.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Endocrinology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>Endocrinology is a branch of medicine with the structure, function and disorders of the endocrine glands. The glands of the endocrine..</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 4 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/critical.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Critical Care</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Department of Critical Care Medicine provides 24 X 7 comprehensive solutions for all patients who suffer from life-threatening…  </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/general.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>General Medicine</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>Our physicians with decades of experience, handle the prevention, diagnosis and treatment of various diseases…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 5 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/ent.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>ENT</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The well-established ENT department has facilities for diagnosis and treatment of all common Ear, Nose & Throat diseases and also…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/gastro.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Gastroenterology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Gastroenterology department is equipped with all the advanced 190 series scopes and ERCP scopes.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 6 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/laparoscopic.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>General and Laparoscopic Surgery</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The hospital has a state-of-the-art department of General and Laparoscopic Surgery, which also forms the platform for the various..</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/head.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Head and Neck Reconstructive Surgery</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Head and Neck Oncology & Reconstructive Surgery department has excellence in the evaluation and treatment of…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 7 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/microbiology.png" alt="">
                                           </div>
                                           <div class="name">
                                               <h3>Microbiology</h3>
                                           </div>
                                           <div class="spc-bx-hover">
                                            <p>The microbiology lab is responsible for all the screening as well as advanced diagnostic techniques for the detection…</p>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/neonatology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Neonatology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>We have a ten bedded NeoNatal intensive Care unit (NICU) which has the sophisticated Drager Baby log 8000 plus ventilator…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 8 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/nephrology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Nephrology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The fully equipped Nephrology Department has a 24 hours functioning dialysis unit. The department provides…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/neuro.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Neuro Surgery</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The fully equipped Neurosurgery department provides treatment to patients with head injury, spine injury and to major road…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 9 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/neurology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Neurology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The department of neurology provides state of the art care to patients with all kinds of acute and chronic diseases..</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/nuclear-medicine.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Nuclear Medicine</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>Nuclear Medicine is a branch of medicine that makes use of radioactive medicines for diagnosis and treatment of diseases. Small..</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 10 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/gynaecology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Obstetrics and Gynaecology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Obstetrics & Gynecology department provides comprehensive health services in a caring environment to women of all age groups.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/oncology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Oncology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>St. Gregorios International Cancer Care Centre (SGICCC) is dedicated to provide multidisciplinary cancer treatment under one…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 11 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/opthalmology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Ophthalmology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>We give comprehensive and quality eye care in the department.We have been conducting School Screening programs..</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/orthopedics.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Orthopedics</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The department of Orthopedics has state of the art facilities for advanced trauma management, joint replacement, arthroplasty...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 12 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/pathologuy.png" alt="">
                                           </div>
                                           <div class="name">
                                               <h3>Pathology</h3>
                                           </div>
                                           <div class="spc-bx-hover">
                                            <p>Pathology is the study of diseases. It bridges science and medicine and underpins every aspect of patient care, from…</p>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/pediatrics.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Pediatrics</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Department of Pediatrics aims at providing complete health care to infants, children and adolescents. The department works...</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 13 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/physiotherapy.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Physiotherapy</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Department of Physiotherapy deals with the remediation of impairments, disabilities, promotion of mobility..</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/plastic-surgery.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Plastic Surgery</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>Plastic surgery (also known as reconstructive surgery) is used to repair and reconstruct damaged tissue and skin, to…</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 14 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/psychiatry.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Psychiatry De Addiction and Rehabilitation</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>St. Gregorios Medical Mission Hospital started the department of Psychiatry and De-addiction as a project for the…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/pulmonology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Pulmonology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Department of Pulmonology, Critical Care Medicine and Sleep Medicine specializes in the diagnosis and treatment of..</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 15 close -->

                            <div class="single-speciality">
                                <div class="main-box">
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/radiology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Radiology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The Department of Radiology is equipped with state of art equipment and facilities in various modalities. We provide round the clock…</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="speciality-box">
                                        <a href="#">
                                            <div class="icon">
                                                <img src="assets/img/specialities/urology.png" alt="">
                                            </div>
                                            <div class="name">
                                                <h3>Urology</h3>
                                            </div>
                                            <div class="spc-bx-hover">
                                                <p>The department of Urology offers comprehensive facilities for the diagnosis and the treatment of genitourinary problems..</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- single 16 close -->

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="appointment-btn">
                            <a href="#" class="" data-toggle="modal" data-target="#exampleModal0">Make an appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** About and Count Area Start ***** -->
        <section class="about-count section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content-area">
                            <div class="head">
                                <span>About</span>
                                <h1>St. Gregorios Medical Mission Multi-Speciality Hospital</h1>
                            </div>
                            <div class="content">
                                <p class="mb-40">St. Gregorios Medical Mission Hospital, was inaugurated on the 11th of September 1975 with just 50 beds and 3 departments. The Hospital grew to the status of a Multi-Speciality hospital with 197 beds and most modern facilities over forty-five years.</p>
                                <p>The Hospital is owned and controlled by a Charitable Society of the Indian (Malankara) Orthodox Syrian Church,registered under theTravancore- Coçhin Literacy, Scientific and Charitable Act with Reg No. A334/78. The President of the Society is the Head of the Malankara Orthodox Church, His Holiness Baselios Marthoma Paulose II, the Catholicos of the Apostolic throne of St. Thomas and the Vice-President of the Society is His Grace Dr. Yuhanon Mar Chrisostomos, Metropolitan of the Niranam Diocese of the Church. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="about-content-img">
                            <img src="assets/img/about.png" alt="">
                        </div> -->
                    </div>
                    <div class="col-12">
                        <div class="count-area d-flex hh-counter">
                            <div class="counter-box">
                                <div class="head">
                                    <h2 class="counter">45</h2>
                                    <span>+</span>
                                </div>
                                <p>YEARS OF EXPERIENCE</p>
                            </div>
                            <div class="counter-box">
                                <div class="head">
                                    <h2 class="counter">500</h2>
                                    <span>+</span>
                                </div>
                                <p>BEDDED HOSPITAL</p>
                            </div>
                            <div class="counter-box">
                                <div class="head">
                                    <h2 class="counter">40</h2>
                                    <span>+</span>
                                </div>
                                <p>SPECIALITIES</p>
                            </div>
                            <div class="counter-box counter-last">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Testimonials Area Start ***** -->
        <section class="testi-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="testi-head">
                            <span>Testimonials</span>
                            <h2>What our Patients Are Saying</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testi-slider owl-carousel">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="img">
                                        <img src="assets/img/quote.png" alt="">
                                    </div>
                                    <div class="testi-content">
                                        <p>Best hospital in Central Travancore. Hospitality and care of the doctors are excellent. We can call the doctors any time and clear our doubts regarding treatment. Hospitality of the receptionist, nursing staff, and other staff are appreciated. Good management. </p>
                                    </div>
                                    <div class="test-name">
                                        <h4>Surajith </h4>
                                        <p>Vellamkulangara</p>
                                    </div>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testi.png" alt="">
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="img">
                                        <img src="assets/img/quote.png" alt="">
                                    </div>
                                    <div class="testi-content">
                                        <p>I am speechless about the transformation the hospital has undergone. The facilities now are top notch and you could see perfection reflected in each and every nook and corner of the hospital. Wishing all the best for the future to the team SGMMH. </p>
                                    </div>
                                    <div class="test-name">
                                        <h4>Grittu K Cherian</h4>
                                        <p>Pala</p>
                                    </div>
                                </div>
                                <div class="testi-img">
                                    <img src="assets/img/testi2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Services Area Start ***** -->
        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="service-head">
                            <h2>24 x 7 Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/icu.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>ICU</h3>
                                <p>Provides a 24 X 7 comprehensive solution for all patients who suffer from life-threatening illnesses. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/ambulance.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Ambulance</h3>
                                <p>The Emergency Care unit at Parumala Hospital offers comprehensive care for all medical emergencies...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/blood-bank.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Blood Bank</h3>
                                <p>A Department that lends crucial support to every Speciality. The Blood Bank at Parumala Hospital is fully fledged......</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/pharmacy.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Pharmacy</h3>
                                <p>Accessible round the clock, these well-stocked pharmacies ensure that the bystanders of the patient do not have......</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/laboratory.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Laboratory</h3>
                                <p>Pathology is the study of disease. It bridges science and medicine and underpins every aspect of patient care, from.... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/operation-theatre.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Operation Theatre</h3>
                                <p>An Operation Theatre is a facility within a hospital where surgical operations are carried out in a sterile environment....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/emergency.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Emergency & Truama Care</h3>
                                <p>The Emergency Care unit at Parumala Hospital offers comprehensive care for all medical emergencies, 24/7....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="assets/img/services/haemo.png" alt="">
                            </div>
                            <div class="inner">
                                <h3>Haemo & Perotoneal dialysis</h3>
                                <p>Currently the dialysis unit has 30 dialysis machines with most modern facilities. The department addresses the...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="appointment-btn">
                            <a href="#" class="" data-toggle="modal" data-target="#exampleModal0">Make an appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-area">
            <div class="container">
                <div class="row row-footer">
                    <div class="col-lg-6">
                        <div class="footer-address">
                            <div class="adress">
                                <h5>St. Gregorios Medical Mission Hospital, Parumala</h5>
                                <p>Near Parumala Church Post Office Road, Karala - 689 626</p>
                            </div>
                            <div class="footer-number">
                                <h2>Call</h2>
                                <div class="numbers">
                                    <a href="tel:04792312266">0479 - 2312266</a>
                                    <a href="tel:2317000">2317000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-mail">
                            <span>Email</span>
                            <div class="mail">
                                <a href="mailto:happyhealing@parumalahospital.com">happyhealing@parumalahospital.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <section class="last-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copy-right">
                            <p> Copyright &copy; 2021. All Rights Reserved. Designed by <a
                                    href="http://www.theviralmafia.com/?utm_source=parumala-oncology" target="_blank"> <img
                                        src="assets/img/logo/viralmafia.svg"></a> <a href="#" class="privacy_policy" data-toggle="modal" data-target="#myModal3">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <h4>Make an Appointment</h4>
                                        <h3>FILL UP THE FORM TO GET OUR MEDICAL SERVICES</h3>
                                        <!-- <h4>Our consultant will get in touch with you</h4> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Appointment Now</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel"
                                                                                    pattern="[0-9]{10}" maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" name="email"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit"
                                                                                    class="form-control" value="Submit"
                                                                                    name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="modal fade order-model" id="exampleModal1" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <h4>Limited Seats Only</h4>
                                        <h3>Get A <span>Free</span> <br> Consultation</h3>
                                        <h4>Our consultant will get in touch with you</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Download Brochure</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form4" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel"
                                                                                    pattern="[0-9]{10}" maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" name="email"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit"
                                                                                    class="form-control" value="Submit"
                                                                                    name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>








                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Right Side Bottom Fixed Buttons -->
    <div class="cont_link_box">
        <a id="" href="tel:+914792312266" class="callnow_inte" target="">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>
        </a>
        <a id="" href="https://wa.me/+914792312266" class="whatsapp_inte" target="_blank">
        <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <a href="#" class="vertical_btn" data-toggle="modal" data-target="#exampleModal0" >Enquire</a> 

        <!-- Privacy popup -->
    <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
    </div>


    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->






    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    $("#exampleModal0").modal('show');
                }, 7000);
            });
    </script>

</body>

</html>