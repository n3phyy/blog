<?php
include('admin/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nephyy IVET Blog</title>
    <link rel="stylesheet" href="index23.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
      <div class="logo"> 
        <img class="logo1" src="img/wmsu.png" alt="Blog Post" /> 
        
      </div>
        <nav id="nav-links">
          <a href="#highlight">Highlights</a>
          <a href="#story">Read Story</a>
          <a href="#featured">Featured</a>
          <a href="#about">About Me</a>
        </nav>
        <img class="logo2" src="img/it.png" alt="Blog Post" />
        <div class="hamburger" onclick="toggleMenu()">☰</div>
      </header>

      <div class="text-div">
                    <?php 
                        $query = "SELECT * FROM main";
                        $result = mysqli_query($connection, $query);

                        if(!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                        
                        else {
 
                            while ($row = mysqli_fetch_assoc($result)){
                    ?>

                            <p class="subtext">College of Computing Studies</p>
                            <p class="main-heading"><?php echo $row['title']; ?></p>
                            <p class="subtext">by Nephertilee Saddarani</p>
                            
                                
       </div>
      <div class="center-div">
        <img class="myimg" src="img/mee.png" alt="Blog Post" />
        <button class="simple-button2" onclick="location.href='fullstory.php'">Read the full experience here!</button>
      </div>

      <div class="text-div2">
        <p class="subtext2"><?php echo $row['definition']; ?></p>

        <?php 
                                    }
                                }
                            ?>   

      </div>
     
      
      <div class="separator"></div>

      <section class="about-blog" id="highlight">
        <div class="container">
          <h2>About the Industry Visit & Educational Tour</h2>
          <p>This blog is created to document our journeys, adventures, and educational tours outside the classroom! 🌎  
          We believe in learning by exploring, connecting with people, and experiencing different cultures firsthand.  
          Join us as we share inspiring stories, breathtaking destinations, and valuable lessons from our travels!</p>
        </div>
      </section>

      <div class="separator"></div>

      <section class="tour-highlights" id="story">
        <h2 style="margin-top: 30px;">Tour Highlights</h2>
        <div class="grid" data-aos="fade-up">

            <div class="card">
                <h4>Intramuros Fort Santiago</h4>
                <div><img class="card-image" src="img/IMG7.png" alt="Blog Post" /></div>
                <div class="card-content">
                  <h3>Intramuros: The Walled Story of Old Manila</h3>
                  <p>Step back in time and explore the historic heart of Manila! 
                    This Intramuros tour takes you through cobbled streets, centuries-old churches, 
                    and Spanish-era walls—where every corner whispers a story from the past.</p>
                </div>
                <div class="card-overlay"> 
                  <a class="read-more-btn" href="highlights/highlight1.html">Read More</a> 
                </div>
            </div>

            <div class="card">
                <h4>Hytec Power Incorporated</h4>
                <div><img class="card-image" src="img/IMG.png" alt="Blog Post" /></div>
                <div class="card-content">
                  <h3>Hytec Power Inc.: Bridging Industry and Innovation</h3>
                  <p>Hytec Power Inc. is a 100% Filipino-owned company founded in 1994 by Engr. Eric Jude S. Soliman. 
                    Headquartered in Novaliches, Quezon City, it has established itself as a leading 
                    provider of integrated solutions  </p>
                </div>
                <div class="card-overlay">
                  <a class="read-more-btn" href="highlights/highlight2.html">Read More</a> 
                </div>
            </div>
               
            <div class="card">
                <h4>Baguio City</h4>
                <div><img class="card-image" src="img/IMG9.png" alt="Blog Post" /></div>
                <div class="card-content">
                  <h3>Baguio: The City of Pines and Endless Charm</h3>
                  <p>Known as the “Summer Capital of the Philippines,” Baguio City offers a cool escape with its pine-covered hills,
                     scenic parks, and vibrant culture. A perfect mix of nature, art, and history 
                     nestled in the Cordillera mountains.</p>
                </div>
                <div class="card-overlay">
                  <a class="read-more-btn" href="highlights/highlight3.html">Read More</a> 
                </div>
            </div>

        </div>
        <button class="simple-button" onclick="location.href='fullstory.html'">Read the full experience here!</button>

      </section>

      <div class="separator"></div>
        <h2 style="margin-top: 50px;"> Video Highlight</h2>

        <video class="tour-video" data-aos="fade-in" muted playsinline >
          <source src="vid/bidyow.MOV" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="separator"></div>

      <!-- Featured Section -->
      <section class="featured-section" id="featured">
        <h2 class="section-title">Featured</h2>
        <p>Fun Fact: Click on the cards!</p>


        <div class="card-container" data-aos="zoom-in">
  
      <!-- Travel Agency -->
      <div class="feature-card" onclick="toggleCard(this)">
        <h3>Travel Agency</h3>
        <img src="img/DJM.jpg" alt="Travel Agency" class="feature-img" />
        <p>DJM Travel and Tours Services. The travel agency behind the trip:</p>

        <div class="card-details">
          <p style="color:#328f56;"> I would like to thank the DJM Travel and Tours for taking care of us during the whole trip!
            They were so nice and accomodating. The viands almost every breakfast, lunch and dinner was very good in taste! And most 
            importantly, they always make sure that no student gets left behind, ensuring our safety and security.
          </p>
        </div>
      </div>


      <!-- Professors -->
      <div class="feature-card"  onclick="toggleCard(this)">
        <h3>Our Professors</h3>
        <img src="img/PROF.png" alt="Professors" class="feature-img" />
        <p>LOOK: The amazing mentors who guided us throughout this experience.</p>
        
        <div class="card-details" >
          <p style="color:#328f56;"> More of course, I would like to give this recognition to our dearest professors who were with us
            during our educational tour. Namely, we have our IT Head Department: Sir Jason Catadman, CS Head Department: Sir Jaydee Ballaho,
             and we are also accopanied by a couple of faculty members namely Sir Gadmar, and Sir Ceed. Thank you !
          </p>
        </div>
      </div>

      <!-- Itinerary -->
      <div class="feature-card"  onclick="toggleCard(this)">
        <h3>Itinerary</h3>
        <img src="img/ITEN.jpg" alt="Itinerary" class="feature-img" />
        <p>Get a glimpse of the full schedule and activities of the whole tour!</p>
        <div class="card-details">
          <p style="color:#328f56;">Curious? well I can only show you a few!</p>
          <img src="img/SCHED.jpg" class="feature-img" />
        </div>
      </div>

</div>
    
</section>
      
<section class="about-me" id="about">
  <h2 class="about-title">About Me</h2>
  <div class="about-container">
    
    <div class="about-photo-container">
      <img src="img/ABT.jpg" alt="Profile Photo" class="about-photo">
    </div>

    <div class="about-text">
      <p>
        Hello! I'm the mind behind this blog—a BSIT student from the College of Computing Studies. I created this platform to share highlights from our educational tours, and document the vibrant moments we experience on the road. Thanks for joining the journey!
      </p>
      <div class="button-container">
        <a href="https://hostedportfolio-rho.vercel.app/" target="_blank" class="portfolio-button">
          Visit My Portfolio
        </a>
      </div>
    </div>

  </div>
</section>

<footer class="site-footer">
  <div class="footer-container">
    <p>© 2025 Industry Visit & Educational Tour. All Rights Reserved.</p>
    
  </div>
</footer>

      <script>

        function toggleMenu() {
            const nav = document.getElementById('nav-links');
            nav.classList.toggle('show');
          }

        function toggleCard(cardElement) {
          cardElement.classList.toggle('show');
        }

        const video = document.querySelector('.tour-video');
      
        const observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              video.play();
            } else {
              video.pause();
            }
          });
        }, {
          threshold: 0.5 // Adjust this if you want the video to play earlier/later
        });
      
        observer.observe(video);
      </script>

      <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

</body>

</html>