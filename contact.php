<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>Title</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">

    
    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
    <div id="page-wrapper">
        <?php include ('header.php') ?>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Kontakty</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">O nás</a></li>
                    <li class="active">Kontakty</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <section id="content">
                    <div class="container">
                        <div id="main">
                            <div class="travelo-google-map block">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.501877404692!2d21.272793829201472!3d49.2952008733258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDE3JzQyLjciTiAyMcKwMTYnMjQuMCJF!5e0!3m2!1ssk!2sus!4v1517241478079" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                                <div class="col-md-4">
                                    <div class="icon-box style5">
                                        <i class="soap-icon-phone"></i>
                                        <div class="description">
                                            <small>We are on 24/7</small>
                                            <h5>Tel./Fax: +421 54 472 21 52
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon-box style5">
                                        <i class="soap-icon-message"></i>
                                        <div class="description">
                                            <small>Send us email on</small>
                                            <h5>info@topoknoslovakia.sk</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon-box style5">
                                        <i class="soap-icon-address"></i>
                                        <div class="description">
                                            <small>meet us at</small>
                                            <h5>KULL s.r.o.
                                                Hurbanova ul.11
                                                085 01 Bardejov
                                                Slovensko</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="travelo-box box-full">
                                <div class="contact-form">
                                    <h2>Send us a Message</h2>
                                    <form action="http://www.soaptheme.net/html/travelo/contact-us-handler.php" method="post">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input type="text" name="name" class="input-text full-width">
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Email</label>
                                                    <input type="text" name="email" class="input-text full-width">
                                                </div>
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" name="subject" class="input-text full-width">
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Your Message</label>
                                                    <textarea name="message" rows="8" class="input-text full-width" placeholder="write message here"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sms-offset-6 col-sm-offset-6 col-md-offset-8 col-lg-offset-9">
                                            <button class="btn-medium full-width">SEND MESSAGE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <?php include ('footer.php') ?>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery-ui.1.10.4.min.js"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
<!--    <script type='text/javascript' src="//maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>-->
<!--    <script type="text/javascript" src="js/gmap3.min.js"></script>-->
<!--    <script type="text/javascript">-->
<!--        tjq(".travelo-google-map").gmap3({-->
<!--            map: {-->
<!--                options: {-->
<!--                    center: [48.85661, 2.35222],-->
<!--                    zoom: 12-->
<!--                }-->
<!--            },-->
<!--            marker:{-->
<!--                values: [-->
<!--                    {latLng:[48.85661, 2.35222], data:"Paris"}-->
<!---->
<!--                ],-->
<!--                options: {-->
<!--                    draggable: false-->
<!--                },-->
<!--            }-->
<!--        });-->
<!--    </script>-->
    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
<!--    <script type="text/javascript" src="js/scripts.js"></script>-->
    
</body>

</html>

