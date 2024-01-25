<!--John 3:5-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mitchell Martin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="style.css">
        <style>

        </style>
    </head>
    <body>
        <div class="p-3 text-center" id="settings">
            <h6 class="click-section d-inline-block" id="about-me">About Me</h6>
            <select id="projectDropdown">
                <option selected disabled hidden id="projects-id">Projects</option>
                <option id="game-option">Games</option>
                <option id="mobile-option">Mobile Apps</option>
            </select>
            <h6 class="click-section d-inline-block ml-3">Contact</h6>
        </div>

        <div class="container">
            <div class="row container p-5" id="header_block">
                <div class="row">
                    <!--New div on the left-->
                    <div class="col-md-6 side_area d-flex flex-column align-items-center
                                justify-content-center pr-3 fade-text animate__animated animate__fadeInDown" id="intro-block">
                        <img id="my_img" src="assets/1330857.jpg">
                    </div>


                    <!--Contact div-->
                    <div class="col-md-6 fade-text animate__animated animate__fadeInUp" id="contact_div">
                        <form action="send_email.php" method="POST">
                            <div class="form-group">
                                <h1>Contact Me</h1>
                                <p>If you have any other questions or requests, feel free to contact me.</p>


                                <label for="input-email">Email</label>
                                <input class="form-control" id="user-email-text" type="email" name="email" placeholder="Enter email"> 
                                
                                <br>
                                <label for="input-subject">Subject</label>
                                <input class="form-control" id="user-subject-text" type="text" name="subject" placeholder="Enter subject"> 
                                
                                <br>
                                <label for="input-message">Message</label>

                                <br>
                                <textarea class="form-control" id="user-message-text" rows="3"
                                placeholder="Enter Message" type="text" name="message"></textarea>
                            
                                <br>
                                <input class="btn btn-primary" type="submit" name="submit" value="Send message">
                            </div>
                        </form>
                    </div>
    
                    <!-- Content div-->
                    <div class="col-md-6 fade-text animate__animated animate__fadeInUp" id="header_div">
                        
                        <h1>Mitchell Martin</h1>
                        <h2>Enspiring Software Engineer</h2>    
                    
                        <p>I am a recent graduate from Angelo State University
                            with a Bachelor's Degree in Computer Science.
                            Through my academic journey, I have gained a foundation
                            in computer science and have hands-on experience
                            in multiple programming languages and technologies.
                        </p>
                    </div>
                </div>
            </div>
    
            <!-- Project div-->
            <div class="row fade-text animate__animated animate__fadeInUp" id="project_div">
                <style>

                    .description h1 {
                        color:rgb(77, 175, 255);

                    }

                    .description h1, p {
                        padding-left: 3%;
                        text-align: left;
                    }

                    .description h1 {
                        padding-bottom: 1%;
                    }

                    .description {
                        padding-bottom: 5%;
                    }
                </style>

                <div class="description">
                    <span id="gameParagraph">
                        <h1>Games</h1>
                        <p>Since I was an undergradate student, my toolkit of programming languages to develop games
                        were in C++, C, Java, and Python. Even today, I utilize developing games as a way to practice
                        my software development skills in a creative manner. 
                        </p>
                    </span>

                    <span id="mobileParagraph">
                        <h1>Mobile Apps</h1>
                        <p>I have developed mobile applications utilizing programming languages such as Java and Python
                            and have utilized development platforms such as Realtime Database and utilized a Database in AWS.
                            I am willing to learn and currently developing my skillset in mobile development.
                        </p>
                    </span>


                </div>
                <div class="container">
                    <span id="gameApps" class="fade-text animate__animated animate__fadeInUp">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card" style="width: auto;">
                                    <img src="assets\projects\games\tacoplatformer\plat_0.png" class="card-img-top mt-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Taco Platformer</h5>
                                        <p class="card-text">SDL2 Platformer Game Developed in C++</p>
                                        <a href="https://github.com/mmartin46/Taco_Platformer" class="btn btn-primary">Click To View</a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-sm">
                                <div class="card" style="width: auto;">
                                    <img src="assets\projects\games\tacoshooter\screen_2.png" class="card-img-top mt-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Taco Shooter</h5>
                                        <p class="card-text">RPG Style-Project Developed in Java</p>
                                        <a href="https://github.com/mmartin46/TacoShooter" class="btn btn-primary">Click To View</a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-sm">
                                <div class="card" style="width: auto;">
                                    <img src="assets\projects\games\balloonjump\screen_3.png" class="card-img-top mt-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Balloon Jump</h5>
                                        <p class="card-text">SFML Platformer Based-Game Developed in C++</p>
                                        <a href="https://github.com/mmartin46/TacoShooter" class="btn btn-primary">Click To View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
    
                    <span id="mobileApps" class="fade-text animate__animated animate__fadeInUp">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card" style="width: auto;">
                                    <img src="assets\projects\mobile\shannon\menu_screen.png" class="card-img-top mt-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Shannon HealthCare App</h5>
                                        <p class="card-text">Android Application for Shannon HealthCare</p>
                                        <a href="https://github.com/rileyArndt/ShannonHealthApp" class="btn btn-primary">Click To View</a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-sm">
                                <div class="card" style="width: auto;">
                                    <img src="assets\projects\mobile\chatapp\chatapp.png" class="card-img-top mt-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">ChatterApp</h5>
                                        <p class="card-text">A Basic Messaging Applet</p>
                                        <a href="https://github.com/mmartin46/ChatteredApp?tab=readme-ov-file" class="btn btn-primary">Click To View</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="card" style="width: auto;">
                                    <img src="assets\projects\mobile\bmi\bmi_0.png" class="card-img-top mt-3 mx-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">BMI Calculator</h5>
                                        <p class="card-text">A Basic BMI Calculator Applet</p>
                                        <a href="https://github.com/mmartin46/BMICalculator" class="btn btn-primary">Click To View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                    
                </div>
            </div>
        </div>


        <!-- Bootstrap and jQuery Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        <script>
            $(document).ready(function () {

                $(".fade-text").animate({
                    opacity: 1
                }, {
                   duration: 1000,
                   easing: "swing"
                });
            })
        </script>


    </body>
</html>