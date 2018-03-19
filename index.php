<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	  <meta name="keywords" content="hussainresume.herokuapp.com,hussainresume" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Resume </title>
	<link rel="icon" type="image/jpg" href="img/icon.jpg">
    <!-- Import Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Import Theme & Components -->
    <link href="css/theme.min.css" rel="stylesheet">

    <!-- Import Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="animate.css">

<style>

#loader {
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}

.flex-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  
}

.flex-container>div {
  color: white;
  width: 100px;
  height: 100px;
}
#up{
position: fixed;
right:30px;
bottom: 20px;
display:none;
}

body {
	width: 100wh;
	height: 90vh;
	color: #fff;
	background: linear-gradient(-45deg, #EE7752, #e8182b, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

	
	

</style>
  </head>

  <body id="top" onload="myFunction()" style="margin:0;" data-spy="scroll" data-target="#navbar" data-offset="340">
	  
  
<center><div class="flex-container" id="loader">
  <div>
  
  <img src="img/shari.gif" class="img-responsive" width="70" height="70">
  

</div>

</div></center>
 <div style="display:none;" id="myDiv" class="animate-bottom">
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
            <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#top">My Resume</a>
        </div>

           <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll hidden-xs hidden-sm hidden-md hidden-lg" href="#top"></a></li>
            <li><a class="page-scroll" href="#about-me">About me</a></li>
            <li><a class="page-scroll" href="#work-experience">Experience</a></li>
            <li><a class="page-scroll" href="#education">Education</a></li>
            <li><a class="page-scroll" href="#certificates">Certificates</a></li>
            <li><a class="page-scroll" href="#skills-tools">Skills</a></li>
            <li><a class="page-scroll" href="#languages">Languages</a></li>
            <li><a class="page-scroll" href="#hobbies">Hobbies</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right quick-links">
            <li><a href="https://github.com/modhussain" target="_blank"><i class="fa fa-github"></i></a></li>
            <li><a href="md.hussain.dg@gmail.com" target="_blank"><i class="fa fa-google"></i></a></li>
            <li><a href="https://www.linkedin.com/in/hussain-mohammad-6ba666135/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <section class="global-info">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="avatar">
              <img src="img/pic.jpg" alt="" class="img-responsive">
            </div>
            <div class="name-jobtitle">
              <h2 class="title"><small>UI Developer</small>Hussain</h2>
            </div>
          </div>
          <div class="col-md-7 hidden-sm hidden-xs">
            <div class="address-contact">
              <div class="address">
                <span>Address</span>
                <p>21-13-94/A,<br/>
                Madhura Nagar,Vijayawada<br/>
                AP,India</p>
              </div>
              <div class="contact">
                <span>Contact</span>
                <p>md.hussain.dg@gmail.com<br/>
                +91 8790369343<br/>
                www.github.com/Modhussain</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<a href="" target="Top" id="up"><i class="glyphicon glyphicon-upload " id="s" style="font-size:35px;color:red"></i></a>
    <div class="resume-container">
      <section id="about-me" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>About Me</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">Who I am ?</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">I’m Hussain, nice to meet you.</h3>
                <p>I'm a Hussain based Front-End developer and UI designer. Post Graduated from PVPSIT in 2017 and currently learning UI technologies </p>

                <p>Hoping to develop my career into making Web apps and Mobile apps the like! Also love to do photo manipulation in Photoshop every once in a while :-)</p>
              </div>
            </div>
          </div>
        </article>
      </section>
      <section id="work-experience" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>Work Experience</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">Jan 2017 – Mar 2017</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Intern <small>AT Credo Web Solutions</small></h3>
                <p>At Credo I’m responsible for the Learning MEAN Stack and I develop web application with the help of MEAN Stack at the end of Internship for 3months </p>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">Apr 2017 – Jun 2017</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Trainee Engineer <small>AT Credo web Solutions</small></h3>
                <p>At Credo I was responsible for designing and developing a huge range of Nodejs and Reactjs Web Applications.
                </p>
              </div>
            </div>
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">Apr 2017 – Oct 2017</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Technical Associate Support <small>AT BR Concepts PVT LTD</small></h3>
                <p>At BR Concepts Pvt Ltd I was responsible Tele-Calling and Posting of Jobs in E-commerce Websites and Also I Learn PHP frameworks and Java Technologies in BR Concepts pvt ltd.  
                </p>
              </div>
            </div>
          </div>
        </article>
      </section>
      <section id="education" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>Education</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">April 2009</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">SCC<small>at Gowthama English Meduim School</small></h3>
				<big>with 78.5 %</big>
              </div>
            </div>
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">April 2011</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Intermediate<small>at Narayana Junior College</small></h3>
				<big>with 72.8%</big>
              </div>
            </div>
            
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">April 2014</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">B.Sc(Comp)<small>at Andhra Loyola College</small></h3>
				<big>with 76.5 %</big>
              </div>
            </div>
            
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">April 2017</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">MCA<small>at PVPSIT</small></h3>
				<big>with 8.88 CGPA</big>
              </div>
            </div>
            
            
          </div>
        </article>
      </section>
      <section id="certificates" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>Certificates</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">2012- 2014 </span>
              <div class="col-md-6 resume-card">
                <h3 class="title">NCC AIR WING <small>B &amp; C Certificate</small></h3>
              </div>
            </div>
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">July 2015 – Dec 2015</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">NPTEL IIT Mardras <small>C programming Certificate</small></h3>
              </div>
            </div>
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">July 2016 – Nov 2016</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Google Certification <small>Android Application Developement Certificate</small></h3>
              </div>
            </div>
			
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">Jan 2017 – Mar 2017</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Internship Certification <small>MEAN STACK Certificate</small></h3>
              </div>
            </div>
          </div>
        </article>
      </section>
      <section id="skills-tools" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>Skills &amp; Tools</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note hidden-print">Programming Langauages</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">Technical Skills</h3>
                <div class="skill">
                  <h4 class="title">C programming</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="70" style="width: 70%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <h4 class="title">JAVA Programming</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 75%;">
                      <span class="sr-only">Professional</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <h4 class="title">VB.NET</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width: 75%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <h4 class="title">PHP Scripts</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 60%;">
                      <span class="sr-only">Professional</span>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <h4 class="title">Nodejs and Reactjs</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70" style="width: 60%;">
                      <span class="sr-only">Intermediate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note hidden-print">Front-end Development and UI Designing</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">UI Technologies</h3>
                <div class="skill">
                  <h4 class="title">HTML &amp; CSS</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>

                </div>
				
                <div class="skill">
                  <h4 class="title">Bootstrap</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>

                </div>
				
                <div class="skill">
                  <h4 class="title">Javascript</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>

                </div>
				
                <div class="skill">
                  <h4 class="title">Jquery</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>

                </div>
                <div class="skill">
                  <h4 class="title">AngularJS</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                      <span class="sr-only">Intermediate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note hidden-print">DataBase Designing</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">DataBase Technologies</h3>
                <div class="skill">
                  <h4 class="title">Oracle</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>

                </div>
				<div class="skill">
                  <h4 class="title">MySQL</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                      <span class="sr-only">Expert</span>
                    </div>
                  </div>

                </div>
                <div class="skill">
                  <h4 class="title">MongoDB</h4>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                      <span class="sr-only">Intermediate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note">Tools and Websites</span>
              <div class="col-md-6 resume-card">
                <h3 class="title">My prefered tools<small>FROM DESIGN TO CODE</small></h3>
                <div class="row list">
                  <div class="col-md-5">
                    <ul class="list-unstyled">
                      <li>Photoshop CC 2015</li>
                      <li>PhotoScape</li>
                      <li>Wix.com</li>
                      <li>Visual Studio 2010</li>
                      <li>W3schools.com</li>
                    </ul>
                  </div>
                  <div class="col-md-5">
                    <ul class="list-unstyled">
                      <li>jquerysript.net</li>
                      <li>Mit App Inventor</li>
                      <li>XAMP</li>
                      <li>Wordpress.com</li>
                      <li>Github</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
      <section id="languages" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>Languages</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note hidden-print">Languages</span>
              <div class="col-md-6 resume-card">
                <h3 class="title hidden-print">Languages</h3>
                <div class="skill">
                  <h4 class="title">English<small>US Accent</small></h4>
                </div>
                <div class="skill">
                  <h4 class="title">Hindi <small>formal</small></h4>
                </div>
				<div class="skill">
                  <h4 class="title">Telugu <small>formal</small></h4>
                </div>

				<div class="skill">
                  <h4 class="title">Tamil <small>Formal</small></h4>
                </div>
		<div class="skill">
                  <h4 class="title">Urdu <small>Mother </small></h4>
                </div>

              </div>
            </div>
          </div>
        </article>
      </section>
      <section id="hobbies" class="resume-section">
        <article class="container">
          <div class="row">
            <div class="category-title col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>Hobbies</h2>
                </div>
              </div>
            </div>
            <div class="card-container">
              <span class="col-md-3 col-md-offset-1 side-note hidden-print">My Hobbies</span>
              <div class="col-md-6 resume-card">
                <h3 class="title hidden-print">My Hobbies<small>SPORTS AND DESIGNING</small></h3>
                <div class="row list">
                  <div class="col-md-3">
                    <ul class="list-unstyled">
                      <li>Web designing</li>
                      <li>Cycling</li>
                      <li>Cricket</li>
                      <li>Soccer</li>
                      <li>Mobile App Designing</li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="list-unstyled">
                      <li> Video Games</li>
                      <li>Movies</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
    </div>

    <footer class="text-center">
      <p>© 2017 MyResume.All Rights are Reserved By Hussain</p>
    </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    
    <script src="js/main.min.js"></script>
	
	<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

	 
	 <script>

window.onscroll = function(){showbut()};

function showbut() {
	
    if ( document.body.scrollTop > 50) {
	$("#up").show();
	$("#up").addClass('animated flip');
    	
	} else {
	$("#up").hide();	
    
	}
	
}


</script>
	 
	 
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-52649085-4', 'auto');
      ga('send', 'pageview');

    </script>

  </body>
</html>
