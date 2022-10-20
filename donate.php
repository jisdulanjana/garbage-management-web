<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="test.css">

    <title>Personal Porfolio</title>
</head>
<body>
    <header><!-- header start -->
        <nav class="navbar navbar-expand-lg fixed-top"><!-- nav start -->
            <div class="container">
			<img src="5608-remreview.png">
                <a href="#" class="logo"> ZeroWaste. </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#life">Life History</a>
                        <a class="dropdown-item" href="#testimonials">Testimonials</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#gallery">Gallery</a>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
        </nav><!-- nav end -->

        <div class="container header-content w-md-50 w-100">
            <img src="don.jpg" alt="Mark Waugh"><!-- small image -->
            <div class="content">
                <h2>"Service to others is the rent you pay for your room here on earth"</h2>
            </div>
        </div>
    </header><!-- header end -->

    <div class="section container-fluid about" id="about"><!-- about start -->
        <div class="row">
            <div class="col-md-4 col-12">
                <img src="original.jfif" alt="Mark Waugh">
            </div>
            <div class="col-md-8 col-12">
                <div class="content">
                    <h2>Welcome To Our Site</h2>
                    <p>We give a voice to future generations and stand up for their rights by providing policy tools to empower <br>thousands of people all around sri lanka.</p>
                    <p>Would you like to join with us?</p>
                </div>
                
                <div class="about-buttons">
                    <a href="#contact">Contact Us</a>
                    <a href="web.php">Sign in</a>
                </div>
            </div>
        </div>
    </div><!-- about end -->

    <div class="section services" id="services"><!-- service start -->
        <div class="content1">
            <div class="container">
                <h2>For whom?</h2>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="single-service">
                            <i class="fa fa-magic" aria-hidden="true"></i>
                            <h4>Schools</h4>
                            <p>We would like to donate items to selected schools throughout Sri Lanka.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="single-service">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h4>selected children's home</h4>
                            <p>We would like to donate items to selected children's homes throughout Sri Lanka.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="single-service">
                            <i class="fa fa-code" aria-hidden="true"></i>
                            <h4>selected libraries</h4>
                            <p>We would like to donate items to selected libraries throughout Sri Lanka, especially books and other related materials.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- service end -->
    

    <div class="section gallery container" id="gallery"><!-- gallery start -->
        <h2>Expected Materials</h2>
        <div class="row images">
            <div class="imgBox col-md-4 col-12">
                <div><img src="serv-1.png" alt="Books"><p>Recomended-Books</p></div>
            </div>
            <div class="imgBox col-md-4 col-12">
                <div><img src="serv-3.png" alt="Gallery"><p>education-materials</p></div>
                
            </div>
            <div class="imgBox col-md-4 col-12">
                <div><img src="19598293-removebg-preview.png" alt="Gallery"><p>clothes</p></div>
                
            </div>
            <div class="imgBox col-md-4 col-12">
                <div><img src="serv-4.png" alt="Gallery"><p>Used Furniture</p></div>
            </div>
            <div class="imgBox col-md-4 col-12">
                <div><img src="serv-2.png" alt="Gallery"><p>Used Toys</p></div>
            </div>
            <div class="imgBox col-md-4 col-12">
                <div><img src="serv-5.png" alt="Gallery"><p>Used Sport Item</p></div>
            </div>
        </div>
           <p>If you can donate such items please contact us</p>
           <div class="btn2">
        <p><a href="web.php">Donate</a></p>
        </div>
    </div><!-- gallery end -->

    



    <div class="section contact" id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form>
                        <div class="form-group">
                            <input type="text" id="name" required placeholder="Enter your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" required placeholder="Enter your Subject">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" required placeholder="Enter your Email">
                        </div>
                        <div class="form-group text-area">
                            <textarea id="message" required placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-success">Send Contact Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <ul>
                            <li><a href="#!"><i class="fa fa-map-marker"></i>No:221B,Pitipana Road,Homagama.</a></li>
                            <li><a href="#!"><i class="fa fa-envelope"></i>zerowaste21.1@gmail.com</a></li>
                            <li><a href="#!"><i class="fa fa-phone"></i>+7-800-999-800</a></li>
                            <li><a href="#!"><i class="fa fa-info"></i>Download Resume</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer><!-- footer start -->
        <div class="section container footer">
            <div class="footer-social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="divider"></div>
            <div class="footer-bottom">
                <p>© 2022 WEB PROJECT | Designed by GROUP 3(Ugc.CS)</p>
            </div>
        </div>
    </footer><!-- footer end -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>