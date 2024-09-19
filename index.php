<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" type="image/png" sizes="150x150" href="img/AHlogo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AIHUB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    text-decoration: none;
    
}


#navbar {
  overflow: hidden;
  background:linear-gradient(65deg, rgba(227, 85, 249, 0.389),rgba(41, 100, 251, 0.478));
  padding: 23px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 20px; 
  line-height: 15px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a.active {
    background-color: rgba(116, 255, 179, 0.925);
  color: black;
border-radius:20px;
}

#navbar a.activ {
    background-color: rgba(176, 255, 212, 0.925);

  color: black;
  border-radius:20px;

  
}
#navbar a.activ:hover {
    background-color: rgba(60, 255, 148, 0.925);

  color:white;
  border-radius:20px;

  
}
#navbar a.acti {
  color: white;
border-radius:20px;

  
}
#navbar a.acti:hover {
    background-color: rgba(245, 245, 245, 0.699);

color:black;
border-radius:20px;


  
}
#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}


/* header */
.header{
    margin: auto;
   background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(img/back.jpg) center/cover no-repeat;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.header h2{
    margin: 1rem;
    font-size: 4rem;
    font-weight: 900;
    color: #fff;
    letter-spacing: 2px;
    
}
.header p{
    margin: 0.5rem auto;
    color: #fff;
    width: 60%;
    opacity: 0.8;
    font-weight: 400;
    font-size: 1.4rem;
    text-align: center;
}
.header button {
    margin: 5vw;
    font-size: 20px; /* Adjust the font size as needed */
    width: 12%; /* Adjust the width as needed */
    text-transform: uppercase;
    background: linear-gradient(65deg, rgba(103, 159, 255, 0.878), rgba(133, 233, 255, 0.81));
    color: #ffffff;
    border: none;
    padding: 0.8vw 1.2vw; /* Adjust the padding as needed */
    transition: all 0.5s ease;
    cursor: pointer;
    border-radius: 15px;
}
@media screen and (max-width: 768px) {
    .header button {
        font-size: 3vw; /* Adjust the font size for smaller screens */
    }
}
.header button:hover {
    background: linear-gradient(65deg, rgba(133, 233, 255, 0.81), rgba(103, 159, 255, 0.878));
    color: #000;
    transform: scale(1.2);
}
/* Media Queries */


.counter {
            font-size: 2em;
            font-weight: bold;
            color: #ddd
        }
    }
    /* Default styles for login icon */
/* flex grid */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0;
     padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.container{
    background:linear-gradient(65deg, rgba(215, 172, 255, 0.864),rgb(238, 130, 238),rgb(126, 90, 215),rgb(89, 180, 200), rgba(125, 172, 255, 0.864));
    padding:15px 9%;
    padding-bottom: 100px;
}

.container .heading{
    text-align:justify;
    padding-bottom: 15px;
    color:#000000;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 20px;
}

.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap:15px;
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}
/*.container .box-container .box:hover{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #bce1f3c7;
    text-align: center;
    padding:30px 20px;
}*/
.container .box-container .box img{
    height: 80px;
}

.container .box-container .box h3{
    color:#444;
    font-size: 22px;
    padding:10px 0;
}

.container .box-container .box p{
    color:#777;
    font-size: 15px;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:linear-gradient(65deg, rgb(92, 193, 255),rgb(133, 255, 231));
    color:#fffffff7;
    font-size: 17px;
    border-radius: 10px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 2px;
}
.container .box-container .box .btn:hover{
    margin-top: 10px;
    display: inline-block;
    background:linear-gradient(65deg,rgb(133, 255, 231), rgb(92, 193, 255));
    color:#041b4e;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}
.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(20, 68, 131, 0.988);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container{
        padding:20px;
    }
}

#count{
    margin: 0;
    font-size: 2em;
   font-weight: bold;
}
/*testimonial*/
/*contact*/
.second-half {
    height: 50vh; /* Set the height of the second half to 50% of the viewport height */
    background:linear-gradient(65deg,rgb(48, 48, 48), rgb(205, 236, 255));
    display: flex;
    justify-content: center;
    align-items: center;
}
@media screen and (max-width: 768px) {
    .second-half {
        font-size: 0.8rem; /* Decrease the font size for smaller screens */
    }
}
@media screen and (max-width: 480px) {
    .second-half {
        font-size: 0.6rem; /* Further decrease the font size for smaller screens */
    }
}
/* container for the about */
#abou {
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    padding-left: 0px;
    background: transparent;
    padding-bottom: 50px;
    border-radius: 10px;
    background:linear-gradient( rgba(122, 171, 255, 0.351));
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 2px;
    padding-left: 180px;
}

.grid-item {
    margin-top: 90px;
    background: rgb(199, 230, 255);
    background:linear-gradient(65deg, rgba(170, 235, 255, 0.268),white, rgba(170, 235, 255, 0.268));
    padding: 20px;
    text-align: center;
    display: flex;
    align-items: center;
    border-radius: 18px;
    width: 500px;
}

.imag {
    max-width: 10%;
    height: auto;
    margin-right: 20px; /* Add margin to separate the logo from text */
}

.icon {
    font-size: 48px; /* Adjust icon size as needed */
}

.align {
    text-align: justify;
    font-size: 16px; /* Set the font size for the paragraph */
    line-height: 1.5; /* Set the line height for better readability */
}

@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: 1fr;
    }

    .grid-item {
        width: 100%;
        margin: 0;
    }

    .imag {
        max-width: 20%;
    }

    .icon {
        font-size: 36px; /* Adjust icon size for smaller screens */
    }

    .align {
        font-size: 14px; /* Adjust font size for smaller screens */
    }
}
/*testimonial*/
@import url("https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap");
:root {
  --light-gray: hsl(0, 0%, 81%);
  --light-grayish-blue: hsl(210, 46%, 95%);
  --modarate-violet: hsl(263, 55%, 52%);
  --dark-grayish-blue: hsl(217, 19%, 35%);
  --dark-blackish-blue: hsl(219, 29%, 14%);
  --white: hsl(0, 0%, 100%);
  --light-white: rgba(255, 255, 255, 0.5);
  --black: hsl(0, 0%, 0%);
  --body-font: "Barlow Semi Condensed", sans-serif;
}

*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  font-size: 0.81rem;
}

body {
  -ms-overflow-style: none; /* for Internet Explorer, Edge */
  scrollbar-width: none; /* for Firefox */
  overflow-y: scroll;
  min-height: 100vh;
  background-color: var(--light-grayish-blue);
  font-family: var(--body-font);
}
body::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}

/** Testimonials Section **/

.testimonials-section {
  margin: 0 auto;
  margin-top:60px;
  margin-bottom: 12.692rem;
  max-width: 77.083%;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2.308rem;
  justify-content: center;
}

/** Testimonial Sections **/

.testimonials-section > * {
  display: flex;
  flex-direction: column;
  gap: 14px;
  border-radius: 10px;
  padding: 1.9rem 2.6rem;
}

.section-1,
.section-2,
.section-5 {
  color: var(--white);
}
.section-3,
.section-4 {
  background-color: var(--white);
  color: var(--black);
}

.section-1 {
  background-image: url("images/bg-pattern-quotation.svg");
  background-repeat: no-repeat;
  background-position: top right 18%;
  background-size: 100px;
  grid-column: span 2;
  background-color: var(--modarate-violet);
}
.section-2 {
  background-color: var(--dark-grayish-blue);
}
.section-3 {
  grid-row: span 2;
}
.section-3 .highlight-content p {
  color: var(--dark-grayish-blue);
}
.section-5 {
  background-color: var(--dark-blackish-blue);
  grid-column: span 2;
}

/** Author **/
.author {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 15px;
}

.section-1 .author-info,
.section-2 .author-info,
.section-5 .author-info {
  color: var(--white);
  font-weight: 500;
}

.section-3 .author-info,
.section-4 .author-info .section-3 .highlight-content,
.section-4 .highlight-content {
  color: var(--dark-grayish-blue);
}

.author-describtion,
.content {
  opacity: 50%;
}
.author-describtion {
  font-size: 11px;
}

/** Author Images **/
#testm{
  font-size: 35px;
  font-weight: 600;
  color: grey;
  text-align: center;
  margin-top: 20px;
  text-shadow: 2px 2px 3px grey;
}
.author-img {
  border-radius: 50%;
  width: 2.5rem;
  height: 2.5rem;
}

.section-1 .author-img,
.section-5 .author-img {
  border-style: solid;
  border-width: 2px;
}

.section-5 .author-img {
  border-color: var(--modarate-violet);
}

.section-1 .author-img {
  border-color: var(--light-white);
}

/** Hightlight Content **/
.highlight-content {
  font-size: 1.5rem;
  word-spacing: 1.7px;
}
.highlight-content p {
  font-weight: 600;
}

/** Content **/

.content {
  font-size: 1rem;
  padding-top: 0.4rem;
  line-height: 1.4rem;
}

/** Responsive **/

@media screen and (max-width: 1201px) {
  .testimonials-section {
    margin-top: 5.385rem;
  }
  .section-2,
  .section-4 {
    grid-column: span 2;
  }
  .section-3 {
    grid-row: span 1;
    grid-column: span 4;
  }
}

@media screen and (max-width: 801px) {
  .testimonials-section > * {
    grid-column: span 4;
    grid-row: span 1;
  }
}
/*footer*/



footer{
    display: flex;
    flex-wrap: wrap;
    margin-top: auto;
    background-color: #2d2e33;
    padding: 60px 10%;
}

ul{
    list-style: none;
}

.footer-col{
    width: 25%;
}

.footer-col h4{
    position: relative;
    margin-bottom: 30px;
    font-weight: 400;
    font-size: 22px;
    color: #f1bc0d;
    text-transform: capitalize;
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    background-color: #27c0ac;
    height: 2px;
    width: 40px;
}

ul li:not(:last-child){
    margin-bottom: 8px;
}

ul li a{
    display: block;
    font-size: 19px;
    text-transform: capitalize;
    color: #bdb6b6;
    text-decoration: none;
    transition: 0.4s;
}

ul li a:hover{
    color: white;
    padding-left: 2px;
}

.links a{
    display: inline-block;
    height: 44px;
    width: 44px;
    color: white;
    background-color: rgba(40, 130, 214, 0.8);
    margin: 0 8px 8px 0;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: 0.4s;
}

.links a:hover{
    color: #4d4f55;
    background-color: white;
}

@media(max-width: 740px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
        text-align: center;
    }

    .footer-col h4::before{
        all: unset;
    }
}

@media(max-width: 555px){
    .footer-col{
        width: 100%;
    }
}
/*floating button*/
.float{
	position:fixed;
    width:55px;
    height:55px;
    bottom:30px;
    right:30px;
    background:linear-gradient(65deg, rgba(227, 85, 249, 0.889),rgba(41, 100, 251, 0.878));
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    z-index:100;
    animation: jump 3s infinite, blue 3s infinite, wave 10s linear infinite;
    overflow: hidden;
}

.my-float{
	margin-top:16px;
}
.float:hover{
    box-shadow: 4px 10px 15px rgba(33, 94, 226, 0.988);
    transform: scale(1.03);
}

@keyframes jump {
    0%, 10%, 20%, 30%, 50% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-15px);
    }
    60% {
        transform: translateY(-5px);
    }
}

.bh-icon {
  /* Add your styles here */
  font-weight: bold;
  font-size: 21px; 
  color:#6cfff5;

}
  /* floating icon module completed */

</style>  
</head>
  <body>
      <div id="navbar">
  <a href="index.php" id="logo" >AI Hub</a>
  <div id="navbar-right">
    <a  href="#main" class="acti">Home</a>
    <a href="#foot" class="acti">Contact</a>
    <a href="#abou" class="acti">About</a>
    <a href="register.php" class="active">Signup</a>
    <a href="logout.php" class="activ">Logout</a>
  </div>
</div>

    
<div id="main">
    <section class = "header">
        <br>
      <br>
      <h2>READY TO ASSIST</h2>
      <p>Streamline Your Workflow with Our List of AI tools - Find Your Perfect Solution</p>
      
</div>
    </section>
    <div class="container">
        <br>
        <br>
  <section>
      <div class="box-container">
        
          
  
          <div class="box">
              <img src="img/essay.png" alt="">
              <h3>Essay Writing</h3>
              <p>Write Better Content .</p>
              <a href="essay.html" class="btn">Assist</a>
          </div>
  
          <div class="box">
              <img src="img/paragragh.png" alt="">
              <h3>Paraphrase</h3>
              <p>Quick and Easy Rewriting.</p>
              <a href="paraphrase.html" class="btn">Assist</a>
          </div>
  
          <div class="box">
              <img src="img/summary.png" alt="">
              <h3>Summarizer</h3>
              <p>Quick and accurate summaries.</p>
              <a href="summarizer.html" class="btn">Assist</a>
          </div>
  
          
          
             <div class="box">
              <img src="img/eduuuuu.png" alt="">
              <h3>Education</h3>
              <p>Enhance your learning experience.</p>
              <a href="education.html" class="btn">Assist</a>
          </div>  <div class="box">
              <img src="img/ppt.png" alt="">
              <h3>Presentations</h3>
              <p>Enhance your presentation and impress your audience.</p>
              <a href="presentation.html" class="btn">Assist</a>
      </div>
      <div class="box">
              <img src="img/code.png" alt="">
              <h3>Code Generator</h3>
              <p>Become a programmer .</p>
              <a href="code.html" class="btn">Assist</a>
          </div>
</div>
</div>
</section>
<section>
<div id="abou">
    <div class="grid-container">
      <div class="grid-item">
        <img src="img/image1.png" alt="Logo" class="imag">
        <p class="align">AIHub serves as your all-in-one solution for day-to-life problems. Our platform provides Text-AI,Image-AI and more. Through our AI-driven chatbot interface, you can effortlessly generate content tailored to your inquiries and seamlessly transform it into your desired document format. </p>
      </div>
      <div class="grid-item">
        <img src="img/image2.png" alt="Logo" class="imag">
        <p class="align">AIHUB prioritizes your data security. We follow ISO 27001 standards and have been trusted by our users and customers since our inception. Your files are safe with us; no one except you will ever have access to them.</p>
      </div>
      <div class="grid-item">
        <img src="img/image3.png" alt="Logo" class="imag">
        <p class="align">AIHub ensures high-quality conversions for your inputs. Our advanced algorithms guarantee that your files are converted with precision and accuracy, maintaining the integrity of your content.Also we have a chatbot which helps to convert your content to your desired formats.</p>
      </div>
      <div class="grid-item">
        <img src="img/image4.png" alt="Logo" class="imag">
        <p class="align">AI Hub provides AI-driven tools for streamlined productivity. Its suite includes an essay writer, summarizer, paraphraser, file converter, PowerPoint content generator, and code generator. These tools aid in content creation, summarization, file management, presentation design, and programming tasks. Catering to students, professionals, and hobbyists, AI Hub aims to simplify various endeavors, offering efficient solutions for diverse needs.</p>
      </div>
    </div>
  </div>
</section>
  <!--testimonial-->
  <main>
  <p id="testm">Users about us</p>

    <!-- Testimonials Section -->
    <section class="testimonials-section">

        <!-- Section 1 -->
        <section class="section-1">

            <!-- Author -->
            <section class="author">

                <img class="author-img" src="img/image-daniel.png" alt="author-img">
                <section class="author-info">

                    <p class="author-name">Daniel Clifford</p>
                    <p class="author-describtion">Verified Graduate</p>
                </section>
            </section>
            <!-- Highlighted Content -->
            <section class="highlight-content">

                <p>My experience with "AIhub" has been excellent. It has become my go-to platform for all my day-to-day works, and I highly recommend it to others.</p>
            </section>
            <!-- Content -->
            <section class="content">

                <q>In today's fast-paced digital world, managing time efficiently is a must. I recently started using this  website, and I must say, it has made my life so much easier. The platform offers studies related AI and also including file covertors, all seamlessly integrated with an AI-powered chatbot.The chatbot is incredibly intuitive. I just give my content and format, and it swiftly processes the information, providing me with the converted document in no time. This level of efficiency and convenience is unmatched. If you're looking for a tool to reduce your time of work, I highly recommend giving this platform a try. It's been a game-changer for me!</q>
            </section>
        </section>
        <!-- Section 2 -->
        <section class="section-2">

            <!-- Author -->
            <section class="author">

                <img class="author-img" src="img/image-daniel.png" alt="author-img">
                <section class="author-info">

                    <p class="author-name">Jonathan Walters</p>
                    <p class="author-describtion">Verified Graduate</p>
                </section>
            </section>
            <!-- Highlighted Content -->
            <section class="highlight-content">

                <p>I trust "AIhub" to deliver high-quality assistance every time. </p>
            </section>
            <!-- Content -->
            <section class="content">

                <q>This website has been a game-changer for me. The AI-powered chatbot makes converting contents a breeze. I highly recommend it for anyone looking to clear doubts without anyones help.</q>
            </section>
        </section>
        <!-- Section 3 -->
        <section class="section-3">

            <!-- Author -->
            <section class="author">

                <img class="author-img" src="img/image-daniel.png" alt="author-img">
                <section class="author-info">

                    <p class="author-name">Kira Whittle</p>
                    <p class="author-describtion">Verified Graduate</p>
                </section>
            </section>
            <!-- Highlighted Content -->
            <section class="highlight-content">

                <p>Such a life-changing
                    experience. Highly
                    recommended!
                </p>
            </section>
            <!-- Content -->
            <section class="content">
<q>In today's digital age, managing time efficiently is crucial, and this  website has truly made a difference for me. The platform offers educational related AI toolsand also including file covertors, all seamlessly integrated with an AI-powered chatbot.The chatbot is incredibly intuitive, allowing me to specify my requirements and format effortlessly. It swiftly processes the information, providing me with the converted document almost instantly. This level of efficiency and convenience is unmatched.Since I started using this platform, completing my tasks has become so much easier. It has saved me a lot of time and effort. I highly recommend this platform."</q>
            </section>
        </section>
        <!-- Section 4 -->
        <section class="section-4">

            <!-- Author -->
            <section class="author">

                <img class="author-img" src="img/image-daniel.png" alt="author-img">
                <section class="author-info">

                    <p class="author-name">Jeanette Harmon</p>
                    <p class="author-describtion">Verified Graduate</p>
                </section>
            </section>
            <!-- Highlighted Content -->
            <section class="highlight-content">

                <p>An overall wonderful
                    and rewarding
                    experience
                </p>
            </section>
            <!-- Content -->
            <section class="content">

                <q>This AI tools website is a lifesaver. It simplifies the entire process, completing the work in quick and easy way.</q>
            </section>
        </section>
        <!-- Section 5 -->
        <section class="section-5">

            <!-- Author -->
            <section class="author">

                <img class="author-img" src="img/image-daniel.png" alt="author-img">
                <section class="author-info">

                    <p class="author-name">Patrick Abrams</p>
                    <p class="author-describtion">Verified Graduate</p>
                </section>
            </section>
            <!-- Highlighted Content -->
            <section class="highlight-content">

                <p>I appreciate the innovative features offered by "AIhub," such as the chatbot integration.
                </p>
            </section>
            <!-- Content -->
            <section class="content">

                <q>This AI tools website has truly transformed the way I take time to complete my works. With its AI-powered Tools, finding solution has become effortless. I can specify my requirements  and the A tools swiftly delivers the result. This level of efficiency has saved me so much time. I highly recommend this platform to anyone looking for a convenient and reliable AI driven solution.</q>
            </section>
        </section>
    </section>
</main>

  <!--footer-->
  <div id="foot">
  <footer>
        <div class="footer-col">
            
        </div>
        <div class="footer-col">
            <h4>AIHub</h4>
            <ul>
                <li><a href="chatbot.html">Chatbot</a></li>
                <li><a href="essay.html">Essay Writing</a></li>
                <li><a href="paraphrase.html">Paraphrase</a></li>
                <li><a href="summarizer.html">Summarizer</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="presentation.html">Presentation</a></li>
                <li><a href="code.html">Code generator</a></li>
                
            </ul>
        </div>
        <div class="footer-col">
            <h4>Deals</h4>
            <ul>
                <li><a href="#abou">About</a></li>
                <li><a href="#footer-col">API</a></li>
                <li><a href="#footer-col">contact us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="links">
                <a href="https://www.linkedin.com/in/nithinr17"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
</div>
    </footer>
    <link rel="stylesheet" >
<a href="chatbot.html" class="float">
<i class="fa fa-comments chatgpt-icon"></i>
</a>
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script >
        $(document).ready(function(){
    $('.navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(300);
    });
    
    smallScreenMenu();
    let temp;
    function resizeEnd(){
        smallScreenMenu();
    }

    $(window).resize(function(){
        clearTimeout(temp);
        temp = setTimeout(resizeEnd, 100);
        resetMenu();
    });
});


const subMenus = $('.sub-menu');
const menuLinks = $('.menu-link');

function smallScreenMenu(){
    if($(window).innerWidth() <= 992){
        menuLinks.each(function(item){
            $(this).click(function(){
                $(this).next().slideToggle();
            });
        });
    } else {
        menuLinks.each(function(item){
            $(this).off('click');
        });
    }
}

function resetMenu(){
    if($(window).innerWidth() > 992){
        subMenus.each(function(item){
            $(this).css('display', 'none');
        });
    }
}

{let count = 0;
        const counterElement = document.getElementById('counter');

        function updateCounter() {
            count += 7+1;
            counterElement.textContent = count;
        }

        setInterval(updateCounter, 500); 
}

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "15px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "18px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}


    </script>
  </body>
  
</html>
