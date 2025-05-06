<?php
include('admin/dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVET Full Story</title>
    <link rel="stylesheet" href="fullstory5.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
  <a href="index.php" class="back-button">← Back to Home</a>

    <div class="blog-container">

    <?php 
                        $query = "SELECT * FROM day1";
                        $result = mysqli_query($connection, $query);

                        if(!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        } 
                        
                        else {
 
                            while ($row = mysqli_fetch_assoc($result)){
                    ?>

      <h1 class="blog-title"><?php echo $row['title']; ?></h1>
      <p class="blog-date"><?php echo $row['date']; ?></p>
  
      <!-- Day 1 -->
      <div class="day1-section">
        <h3><?php echo $row['subtitle']; ?></h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="img/bsit.JPG" alt="Day 1 Image 1" />
          </div>
          <div class="text-content text-right">
            <p> <?php echo $row['storyone']; ?>
            </p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p> <?php echo $row['storytwo']; ?>
            </p>
          </div>
          <div class="image-content image-right">
            <img src="tour/plane.jpeg" alt="Day 1 Image 2" />

            <?php 
                                    }
                                }
                            ?> 


          </div>
        </div>
      </div>
    </div>
    
    <button class="toggle-button1" onclick="toggleDay1()">Show Day 1</button>

    <div class="blog-container" id="day1-section" style="display: none;">
        <h1 class="blog-title">Hello Manila!</h1>
        <p class="blog-date">April 07, 2025</p>
      <!-- Day 1 -->
      <div class="day-section">
        <h3>Day 1: Rizal Park, Intramuros and Mall of Asia</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/rizal.jpeg" alt="Day 1 Image 1" />
          </div>
          <div class="text-content text-right">
            <p> Touchdown Manila! We linked up with our travel agency namely "DJM Travel and Tours". We hopped on their bus and secured a seat in
              the back, where I kind of felt dizzy from the flight. The bus finally took off, and there we first met our tour guide Sir Enan. 
              He was so nice and you can tell he is very approachable. It took around 35 minutes until we finally arrived in our dormitory. From there
              I get to meet a few of my friends and classmates who arrived in Manila first. The accomodation in the dormitory was so ice, it's giving
              a home-like feels. However, it only felt like a 20minute rest, then our professors announced that we'll leave to proceed to the first itenirary - Rizal Park.
              Time skip, when we arrived, the place is scorching with very high heat temperature. But despite that, we get to see the huge Philippine flag and 
              the statue of Jose Rizal. We took a short stop in a nearby icecream vendor to cool ourselves, then we continued to the next itenirary.
            </p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>For the next itenerary: Intramuros, we went deep into the heart of Manila, the city is so modernized but the Intramuros has left 
              remains from the past where it reminds us the story of our old capital went through. Sir Enan gave us a tour inside, from there we can 
              old buildings, old forts, run-down walls, where you can really fell the vintage vibes of the past. Deep into the Intramuros, we finally
              arrived at the Fort Santiago the iconic memorial of the place. We took pictures, and Sir Enan explained the history of the fort. The tour
              inside the Intramuros ended at the Pasig river where we took lots of selfies because the view was mesmerizing. Finally, we exited from where
              we came from and we hopped back to the bus and surprisingly, we still have an extra time to go to the Mall! Our tourist guide said we can visit
              the Mall of Asia for 1 hour and 30mins which made us feel excited but clearly we know that ius not enough time to explore the famous MOA. 
              When we arrived at the mall, me and my firends couldn't decide where to go so we explored to where we can possibly go, and we ended up in a 
              photo studio, food court, and an open area. 1 hour and 30 minutes passed by so quickly so we went back to the meeting place of where the bus waited.
              Finally, when everyone found their way back, we headed back to the dormitory back in Quezon City. It took 45 mins to 1hour this time because of
              the heavy traffic. The day ended when we finally got our proper rest in the dorm, we took our baths, charged our phones, and prepared for tomorrow's 
              early schedule. 
            </p>
          </div>
          <div class="image-content image-right">
            <img src="tour/fort.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>


    <button class="toggle-button2" onclick="toggleDay2()">Show Day 2</button>

    <div class="blog-container" id="day2-section" style="display: none;">
        <h1 class="blog-title">Sun, Sea, and Subic: A Coastal Escape</h1>
        <p class="blog-date">April 08, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 2: Around Subic Bay and Subic Law Enforcement</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/subic.jpeg" alt="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/law.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>
    
    <button class="toggle-button3" onclick="toggleDay3()">Show Day 3</button>

    <div class="blog-container" id="day3-section" style="display: none;">
        <h1 class="blog-title">Beyond the Glass: Discovering Museum Wonders Begins: Our Educational Tour</h1>
        <p class="blog-date">April 09, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 3: National Museum, Manuel Quezon Shrine</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/museum.jpeg" alt="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/manuel.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>



    <button class="toggle-button4" onclick="toggleDay4()">Show Day 4</button>

    <div class="blog-container" id="day4-section" style="display: none;">
        <h1 class="blog-title">"Currency to Current: Banko Central & Hytec Power Inc.</h1>
        <p class="blog-date">April 10, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 4: Banko Central ng Pilipinas and Hytec Power Incorporated</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/bank.jpeg" alt="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>It was eye-opening to witness the environment of software development teams and how technology drives modern industries today.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/hytec.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>
  
    <button class="toggle-button5" onclick="toggleDay5()">Show Day 5</button>

    <div class="blog-container" id="day5-section" style="display: none;">
        <h1 class="blog-title">Navigating Metro Manila</h1>
        <p class="blog-date">April 11, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 5: A Visit to LRT and MMDA</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/lrt.jpeg" alt="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/mmda.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>


    <button class="toggle-button6" onclick="toggleDay6()">Show Day 6</button>

    <div class="blog-container" id="day6-section" style="display: none;">
        <h1 class="blog-title">Escaping to Baguio: A Journey to the Summer Capital</h1>
        <p class="blog-date">April 12, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 6: The most awaited, Baguio City!</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/pma.jpeg" alt="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/baguio.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>


    <button class="toggle-button7" onclick="toggleDay7()">Show Day 7</button>

    <div class="blog-container" id="day7-section" style="display: none;">
        <h1 class="blog-title">The Journey Ends: But the Memories Stayed</h1>
        <p class="blog-date">April 13, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 7: Back to Quezon City</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/bags.jpeg" alt="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/last.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>


    <button class="toggle-button8" onclick="toggleDay8()">Show Day 8</button>

    <div class="blog-container" id="day8-section" style="display: none;">
        <h1 class="blog-title">Arrival... Route Back Home</h1>
        <p class="blog-date">Posted on April 30, 2025</p>
      <!-- Day 2 -->
      <div class="day-section">
        <h3>Day 8: NAIA, A Flight Back Home</h3>
        <div class="text-image-row">
          <div class="image-content image-left">
            <img src="tour/board.jpg" alt ="Day 2 Image 1" />
          </div>
          <div class="text-content text-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="text-image-row">
          <div class="text-content text-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="image-content image-right">
            <img src="tour/bye.jpeg" alt="Day 2 Image 2" />
          </div>
        </div>
      </div>
    </div>




      <a href="index.php" class="back-button">← Back to Home</a>
  





    <script>
      function toggleDay1() {
          const section = document.getElementById("day1-section");
          const button = document.querySelector(".toggle-button1");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 1" : "Hide Day 1";
        }
        function toggleDay2() {
          const section = document.getElementById("day2-section");
          const button = document.querySelector(".toggle-button2");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 2" : "Hide Day 2";
        }
        function toggleDay3() {
          const section = document.getElementById("day3-section");
          const button = document.querySelector(".toggle-button3");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 3" : "Hide Day 3";
        }
        function toggleDay4() {
          const section = document.getElementById("day4-section");
          const button = document.querySelector(".toggle-button4");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 4" : "Hide Day 4";
        }
        function toggleDay5() {
          const section = document.getElementById("day5-section");
          const button = document.querySelector(".toggle-button5");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 5" : "Hide Day 5";
        }
        function toggleDay6() {
          const section = document.getElementById("day6-section");
          const button = document.querySelector(".toggle-button6");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 6" : "Hide Day 6";
        }
        function toggleDay7() {
          const section = document.getElementById("day7-section");
          const button = document.querySelector(".toggle-button7");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 7" : "Hide Day 7";
        }
        function toggleDay8() {
          const section = document.getElementById("day8-section");
          const button = document.querySelector(".toggle-button8");
          const isVisible = section.style.display === "block";
          
          section.style.display = isVisible ? "none" : "block";
          button.textContent = isVisible ? "Show Day 8" : "Hide Day 8";
        }




      </script>


  </body>
</html>