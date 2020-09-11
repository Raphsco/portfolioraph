<?php

$firstname = $name = $email = $phone = $message = "";
$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
$isSuccess = false;
$emailTo = "scottodipertaraphael@gmail.com";

if ($_SERVER ["REQUEST_METHOD"] == "POST")
{
    $firstname = verifyInput($_POST["firstname"]);
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]); 
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);
    $isSuccess = true;
    $emailText = "";

    if(empty($firstname))
    {
        $firstnameError = " Je veux connaitre ton prénom !";
        $isSuccess = false;
    }
    else   
        $emailText .= "firstname: $firstname\n";

    if(empty($name))
    {
        $nameError = "Et oui même ton nom ! ";
        $isSuccess = false;
    }
    else   
        $emailText .= "name: $name\n";

    if(empty($email))
    {
        $emailError = "comment repondre sans email? ;)";
        $isSuccess = false;
    }
    else   
        $emailText .= "email: $email\n";

    if(empty($phone))
    {
            $phoneError = "Parler de vive voix c'est mieux non?!";
            $isSuccess = false;
    }
    else   
            $emailText .= "phone: $phone\n";
    if(empty($message))
    {
        $messageError = "Et dis donc! et ton petit mot ?  ";
        $isSuccess = false;
    }
    else   
        $emailText .= "message: $message\n";

    if($isSuccess)
    {
        $headers = "From: $firstname $name <$email>\r\nReply-to: $email";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
        $firstname = $name = $email = $phone = $message = "";
    }
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);


    return $var;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="images/portfolio.png" />
        <title>CV RAPHAËL</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="180">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-10 col-centered">
                            <ul class="nav navbar-nav">
                                <li><a href="#about">Moi</a></li>
                                <li><a href="#skills">Compétences</a></li>
                                <li><a href="#logiciels">Logiciels</a></li>                        
                                <li><a href="#experience">Expériences</a></li>
                                <li><a href="#education">Éducations</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>

                            </ul>
                        </div>
                    </div>    
                </div>

                </div>

            </div>
        </nav>

        <section id="about" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-picture">
                <img  src="images/me2.jpg" alt="raphaël" class="img-circle">
            </div>
            <div class="heading">
                <h1>Hello, c'est moi Raphaël</h1>
                <h3>Développeur</h3>
                <a href="docs/cvraph.pdf" class="button1">Télécharger CV</a>
            </div>
        </section>

        <section id="skills">
            <div class="green-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-centered">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                    <h5>HTML&ensp;95%</h5>

                                </div>
                            </div>
                            <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        <h5>CSS&ensp;90%</h5>
    
                                    </div>
                                </div>
                                <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <h5>JAVASCRIPT&ensp;70%</h5>
        
                                        </div>
                                    </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <h5> PHP&ensp;30%</h5>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                            <h5> NODEJS&ensp;40%</h5>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                            <h5> VUEJS&ensp;45%</h5>
                                    </div>
                                </div>
                                                             

                        </div>
                        <div class="col-lg-6 col-centered">

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                        <h5> JQUERY&ensp;65%</h5>
    
                                </div>
                            </div>
                            <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        <h5> BOOTSTRAP&ensp;80%</h5>
    
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <h5> ANGULAR&ensp;30%</h5>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <h5> MYSQL&ensp;30%</h5>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <h5>Wordpress&ensp;70%</h5>
                                    </div>
                                </div> 
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                            <h5> FLUTTER&ensp;45%</h5>
                                    </div>
                                </div>      

                            </div>           
                </div>
            </div>
            </div>
        </section>
        <section id="logiciels">  
        
            <h2 style="text-align: center;"> Logiciels </h2>
            <br>

                    <div class="container-fluid">
                    
                        <img src="images/logiciel.png" class="center-block" alt="Adobe suite"></div>
                        <br>       
        
        </section>
        <section id="experience">
        
            <div class="container">
            <div class="raw">
            <div class="col-md-12 col-centered">
                <div class="white-divider"></div>  
                    <div class="heading">
                        <h2  style="color:white;">Expériences Professionelles</h2>
                    </div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>LDLC.COM (Plan De Campagne)<img class="img-text2" src="images/ldlc.png"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> (01/10/2019 - 01/01/2020)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Vente & Réparation de matériel informatique </p>
                                        <p> Développement de site internet pour des clients</p>
                                        <p> Gestion de parc informatique pour clients proffessionels</p>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>BRICOMAC (Paris)<img class="img-text2" src="images/bricomac.jpg"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> (01/12/2018- 01/05/2019)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Vente & Réparation de matériel informatique </p>
                                        <p> Formation des techniciens & Vendeurs</p>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>Huawei (Paris) <img class="img-text2" src="images/huawei.png"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> (05/09/2018- 30/11/2018)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Vente & Réparation de matériel informatique</p>
                                        <p> amenagement de la boutique</p>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>Micro Concept (Plan De Campagne)<img class="img-text3" src="images/mconcept.jpg"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> (01/03/2017 - 01/08/2017)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Vente & Réparation de matériel informatique</p>
                                        <p> amenagement de la boutique</p>
                                        <p> Mise a jours du site web</p>
                                        <p> Community manager Sur Facebook <img class="img-text" src="images/facebook.png"> & Instagram <img class="img-text" src="images/instagram.png"></p>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>Docteur IT (Arles) <img class="img-text2" src="images/docit.jpg"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> (01/12/2016 - 29/02/2017)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Vente & Réparation de matériel informatique</p>
                                        <p> Formation des techniciens suppléants</p>
                                        <p> Gestion des stocks</p>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>Apple-store (Aix en provence)<img class="img-text4" src="images/apple.png"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> (01/01/2016 - 31/07/2016)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Acceuil des clients</p>
                                        <p> Detection Des pannes logiciels & materiels</p>
                                        <p> Instructer manager des clients lors des formations sur les produits.</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                
                        <li>
                            <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span>
                            </div>
                            <div class="timeline-panel-container">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3>Happy Cash (pertuis) <img class="img-text2" src="images/hcash.jpg"></h3>
                                        <h4>Technicien</h4>
                                        <p class="text-muted"><small class="glyphicon glyphicon-time"> ( 01/11/2014 - 01/11/2015)</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p> Acceuil des clients</p>
                                        <p> Detection Des pannes logiciels & materiels</p>
                                        <p> Achat Revente de produits D'occasion</p>
                                    </div>
                                </div>

                            </div>
                        </li>

                    </ul>

            </div>
            </div>                         
            </div>

        </section>
        <section id="education">
            <div class="container">
                <div class="green-divider"></div>  
                    <div class="heading">
                        <h2>Éducations</h2>
                        <br>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="education-block">
                            <h5> 2012 - 2013</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>Ares (Aix en provence)</h3>
                            <h4> C A P de vente option B</h4>
                            <br>
                            <div class="green-divider"></div>
                            <p> Methodes De Ventes</p>
                            <br>
                            <p> Acceuil clients</p>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="education-block">
                            <h5> 2013 - 2014</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3> AFPA (TOULON) </h3>
                            <h4>Technicien Informatique</h4>
                            <br>
                            <div class="green-divider"></div>
                            <p> Réparer le materiel Informatique </p>
                            <br>
                            <p> connaissances: hardware software & resaux</p>

                        </div>
                </div>
                <div class="col-lg-4">
                    <div class="education-block">
                        <h5> 2020 </h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3> Udemy.com </h3>
                        <h4> Formation complete Web Developpeur</h4>
                        <div class="green-divider"></div>
                        <p> Language HTML/CSS/JAVASCRIPT/JQUERY
                        /BOOTSRAP/PHP/MYSQL/WORDPRESS </p>
                        <p> Responsive Design</p>

                    </div>

                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                    <div class="raw">
                        <div class="heading">
                            <div>    
                        
                            <h2 style="color: white;">Portfolio</h2>
                            </div>
                            <div class="col-4">  <!-- col -->
                               
                                <h4 id="portfolio" ><a href="https://colorpicker.secondelife.fr" style="color: white;" onclick="window.open(this.href); return false;">Color Picker RGB "vue js"</a></h4>
                                <a href="https://colorpicker.secondelife.fr" onclick="window.open(this.href); return false;"> <img class="image2"  src="images/colorpicker.png" style="min-width: 350px; max-height: 200px;" alt="colorpicker">  </a>
                                </div>  <!-- col-->

                                                                       <!-- jeux du simon -->
                                <div class="col-4">
                                <h4 id="portfolio"  class="mxauto"><a href="https://jds.secondelife.fr" style="color: white;" onclick="window.open(this.href); return false;"> Jeux du Simon "vue js"</a></h4>
                                <a href="https://jds.secondelife.fr" onclick="window.open(this.href); return false;"> <img class="image", style="max-width: 350px; min-height: 200px;"  src="images/jds.gif"   alt="jeux du simon">  </a>
                                </div>

                                
                                <div class="col-4">
                                <h4 id="portfolio" ><a href="http://www.victoria-magon.fr" style="color: white;" onclick="window.open(this.href); return false;">Site web Victoria Magon</a></h4>
                                <a href="http://www.victoria-magon.fr" onclick="window.open(this.href); return false;"> <img src="images/vic.png" style="width: 350px;height: 200px;" alt="Victoria-magon">  </a>

                                </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                           
                            
                        </div> <!-- heading -->
                    </div>     <!-- raw -->
            </div>             <!-- container -->
            

                


        </section>
        <section id="contact">
            <div class="container">
                <div class="green-divider"></div>  
                    <div class="heading">
                        <h2> Contactez moi !</h2>
                        <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" role="form">
                            <div class="row">
        
                                <div class="col-md-12 col-centered">
                                <label for="firstname"> Prénom<span class="blue"> *</span></label>
                                <input type="text"  id="firstname" name="firstname" require class="form-control" placeholder="Votre Prénom" value="<?php echo $firstname; ?>">
                                <p class="comments"><?php echo $firstnameError ?></p>
                                </div>
        
                                <div class="col-md-12 col-centered">
                                    <label for="name"> Name<span class="blue"> *</span></label>
                                <input type="text"  id="name" name="name"  require class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
                                <p class="comments"><?php echo $nameError ?></p>
                                </div>
        
                                <div class="col-md-12 col-centered">
                                    <label for="email"> Email<span class="blue"> *</span></label>
                                <input type="email"  id="email" name="email" require class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
                                <p class="comments"><?php echo $emailError ?></p>
                                </div>
        
                                <div class="col-md-12 col-centered">
                                    <label for="phone"> Téléphone<span class="blue"> *</span></label>
                                <input type="tel"  id="phone" name="phone" class="form-control" placeholder="votre téléphone" value="<?php echo $phone; ?>">
                                <p class="comments"><?php echo $phoneError ?></p>
                                </div>
        
                                <div class="col-md-12">
                                    <label for="message"> Message<span class="blue"> *</span></label>
                                    <textarea id="message" name="message" require class="form-control" placeholder="votre Message" rows="4"><?php echo $message; ?></textarea>
                                <p class="comments"><?php echo $messageError ?></p>
                                </div>
                                <div class="col-md-12">  
                                <p class="blue"><strong>* Ces informations sont requises</strong></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="button2" value="Envoyer" style="color: white;">
                                </div>
                            </div>
                            <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none'?>">Votre message a bien était envoyé. Merci de m'avoir contacter :)</p>
                      </form>
            </div>
        </section>


        <footer class="text-center">
            <a href="#about">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <h5>© 2020 Raphaël Scotto DI Perta tous droits réservé</h5>
        </footer>
        
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="js/script.JS"></script>
    </body> 
</html>















