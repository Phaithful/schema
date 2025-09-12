<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schema</title>

    <!-- Document Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="images/logo.png" type="image/png">

    <!-- Google Font ad Icons Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>


<body>


    <nav class="navbar" id="navbar">
        <a href="#home" class="logo">
            <img src="images/logo.png" alt="">
            <p>Schema</p>
        </a>

        <div class="nav_links">
            <ul>
                <l1>
                    <a href="#features">Features</a>
                </l1>
                <l1>
                    <a href="#pricing">Pricing</a>
                </l1>
                <l1>
                    <a href="#faq">FAQ</a>
                </l1>
            </ul>

            <a href="#" class="started">Get started</a>
        </div>
    </nav>


    <!-- Sign Up Form Modal -->
    <div class="signup_cont " id="signupModal">
        <div class="signup">
            <button id="close_btn">
                <span class="material-symbols-outlined">cancel</span>
            </button>
            <form action="" id="signupForm">
                <h3>Get started with Schema</h3>
                <input type="email" id="email" class="email" placeholder="Enter your personal or work email" required>
                <input type="password" id="password" class="password" placeholder="Enter Secure Password" id="email">
                <!-- <button type="submit">Signup</button> -->
                 <input type="submit" value="SUBMIT">
                <p>By continuing, you accept our <a href="#">privacy policy</a></p>
            </form>

            <div id="output"></div>
        </div>
    </div>

    <section class="home" id="home">

        <!-- Home Left Section -->
        <div class="left col-12 col-md-6">

            <!-- Home left Top section -->
            <div class="home_title">
                <img src="images/logo.png" alt="">
                <h3>Schema</h3>
            </div>

            <!-- Home left middle section -->
            <div class="home_info">
                <div class="intro">
                    <h1>Built for <br>world changers</h1>
                    <p>Be the change the world needs with Schema!</p>
                </div>

                <div class="options">
                    <a href="#" class="google">
                        <img src="images/google.png" alt="">
                        <p>Continue with Google</p>
                    </a>
                    
                    <p>OR</p>

                    <form action="" id="signup">
                        <input class="email" type="email" placeholder="Enter your personal or work email">
                        <input type="submit" class="btn submit" value="Continue with email" id="signup_trigger">
                        <p>By continuing, you accept our <a href="#">privacy policy</a></p>
                    </form>
                </div>
            </div>

            <!-- Home left bottom section -->
            <a href="#features" class="learn_more">
                <p>Learn more</p>
                <span class="material-symbols-outlined">arrow_cool_down</span>
            </a>

        </div>


        <!-- Home Rigt Section -->
        <div class="right col-12 col-md-6">
        
        </div>


    </section>


    <section class="features" id="features">
        <div class="description">
            <h1>Meet Schema</h1>
            <h3>Schema is a next-generation AI research assistant that curates credible sources, builds study materials, and checks plagiarism; <br>empowering students to defend projects with confidence.</h3>
        </div>

        <div class="container">
            <div class="row">
                <div class="animation col-12 col-md-6">

                </div>

                <div class="content col-12 col-md-6">
                    <div>
                        <button id="button1" class="fActive">
                            <span class="material-symbols-outlined">document_search</span>
                            <h5>Research with Schema</h5>
                        </button>
                        <p id="feature1" class="feature active">Enter your project topic and instantly get curated academic sources, guides, and insights; so you spend less time searching and more time understanding.</p>
                    </div>
                    <hr>
                    <div>
                        <button id="button2" class="fNotActive">
                            <span class="material-symbols-outlined">article</span>
                            <h5>Prepare with confidence</h5>
                        </button>
                        <p id="feature2" class="feature">Build study materials, summaries, and defense-ready notes directly from credible references. Plus, check originality with our in-built AI and plagiarism detection tools.</p>
                    </div>
                    <hr>
                    <div>
                        <button id="button3" class="fNotActive">
                            <span class="material-symbols-outlined">verified</span>
                            <h5>Trust what you learn</h5>
                        </button>
                        <p id="feature3" class="feature">Our engine delivers only trusted references and verified materials, giving you confidence that your project stands on solid academic ground.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    
    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <h1 class="heading">Explore plans</h1>

        <div class="container">
            <div class="row">
                <button class="free col-12 col-lg-3 price_cont">
                    <div>
                        <h3>Free</h3>
                        <p class="desc">Start simple. Learn faster.</p>

                        <div class="free_cont">
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Curated project topic analysis (basic)</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Access to 3 credible sources per search</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Basic project outline generator</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Limited plagiarism checks (up to 2,000 words/month)</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>AI style detection (basic)</p>
                            </div>
                        </div>
                    </div>
                    

                    <div class="price_tag">
                        <h4>$0</h4>
                        <p>Free for everyone</p>
                    </div>
                </button>


                <button class="pro col-12 col-lg-3 price_cont">
                    <div>
                        <h3>Pro</h3>
                        <p class="desc">Deeper research. Stronger defense.</p>

                        <div class="pro_cont">
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                            <p>Unlimited curated source searches</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Access to 15 sources per topic with ranking</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Advanced project outline + viva defense questions</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Plagiarism checker (up to 50,000 words/month)</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>AI-generated study flashcards & summaries</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Priority support</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Citation Builder (APA, MLA, Harvard auto-formatting)</p>
                            </div>    
                        </div>
                    </div>

                    <div class="price_tag">
                        <h4>$17</h4>
                        <p>Per month billed annually</p>
                    </div>
                    
                </button>
    
                
                <button class="max col-12 col-lg-3 price_cont">
                    <div>
                        <h3>Max</h3>
                        <p class="desc">5-20X more usage than Pro</p>

                        <div class="pro_cont">
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Unlimited plagiarism checks</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Unlimited AI originality/style detection</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Full research material builder (notes, slides, draft reports)</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Export to PDF, DOCX, and PPTX</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Early access to new AI tools (e.g. real-time defense simulator)</p>
                            </div>
                            <div class="items">
                                <span class="material-symbols-outlined check">check_circle</span>
                                <p>Dedicated support + faster results</p>
                            </div>    
                        </div>
                    </div>

                    <div class="price_tag">
                        <h4>From $100</h4>
                        <p>Per month billed monthly</p>
                    </div>
                    
                </button>

            </div>
        </div>

        <p class="tax">Prices shown do not include applicalbe tax. <a href="#">Usage limits apply.</a></p>
    </section>


    <section class="faq" id="faq">

        <div class="faq_cont">

            <h1 class="faq_header">Frequently asked questions</h1>

            <div class="questions_cont">
                <div class="questions">
                    <div>
                        <h4>How is this different from regular AI tools?</h4>
                        <button id="question1">
                            <span class="material-symbols-outlined showFaq activee">add_2</span>
                        </button>
                    </div>
                    <p class="answer active">Unlike AI content generators, our engine doesn’t write your project for you. Instead, it curates credible sources, builds structured study materials, and helps you prepare for defense. This ensures your work remains original and passes AI/plagiarism checks.</p>
                </div>

                <div class="questions">
                    <div>
                        <h4>Will my project be flagged for plagiarism or AI usage?</h4>
                        <button id="question2">
                            <span class="material-symbols-outlined showFaq">add_2</span>
                        </button>
                    </div>
                    <p class="answer">No. Our system is designed to provide references, outlines, and learning materials; not pre-written essays. Plus, we include an in-built plagiarism and AI-style checker so you can verify originality before submission. </p>
                </div>

                <div class="questions">
                    <div>
                        <h4>Is my data and research safe on this platform?</h4>
                        <button id="question3">
                            <span class="material-symbols-outlined showFaq">add_2</span>
                        </button>
                    </div>
                    <p class="answer">Yes. Your searches, saved projects, and uploaded documents are stored securely. We never share your work with third parties, ensuring your privacy and academic integrity.</p>
                </div>

                <div class="questions">
                    <div>
                        <h4>What types of projects does Schema this support?</h4>
                        <button id="question4">
                            <span class="material-symbols-outlined showFaq">add_2</span>
                        </button>
                    </div>
                    <p class="answer">Our engine works across a wide range of academic fields; from computer science and engineering to business, social sciences, and humanities. If you can define a topic, we can help you research and prepare.</p>
                </div>

            </div>

        </div>

    </section>


    <footer class=" py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-3 mb-4 mb-md-0 logo-cont">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                        <h4>Schema</h4>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 mb-md-0 links" >
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none" >Home</a></li>
                        <li><a href="#" class=" text-decoration-none" >Features</a></li>
                        <li><a href="#" class=" text-decoration-none" >Pricing</a></li>
                        <li><a href="#" class=" text-decoration-none" >FAQ</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-4 mb-md-0 support">
                    <ul class="list-unstyled">
                        <li><a href="#" class=" text-decoration-none" >Help center</a></li>
                        <li><a href="#" class=" text-decoration-none" >Pricavy Policy</a></li>
                        <li><a href="#" class=" text-decoration-none">Terms of service</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 contact">
                    <div class="socials_cont">
                        
                        <p>Sign up for all our laters News & updates</p>

                        <form action="">
                            <input type="email" name="email" placeholder="Enter Email">
                            <button type="submit" name="news_submit" class="arrow">
                                <span class="material-symbols-outlined ">keyboard_tab</span>
                            </button>
                        </form>
                    
                    </div>
                </div>
            </div>
            <hr class="mt-4">
            <p class="text-center mb-0">&copy; 2025 Schema. All rights reserved. Research with clarity. Defend with confidence.</p>
        </div>
    </footer>

    

    <script src="assets/script.js"></script>
</body>


</html>