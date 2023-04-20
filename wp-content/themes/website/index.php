  <?php

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?> 

<?php
   get_header();
?>


<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
   <img src="<?php echo get_template_directory_uri(); ?>/images/user-img2.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Klajdo Qasolli</h3>
      <span data-aos="fade-up">web designer & frontend developer</span>
      <p data-aos="fade-up">"Do not wait until the conditions are perfect to begin. Beginning makes the conditions perfect." - Alan Cohen.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>About Me</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">With more than seven years of experience leading teams of up to 64 members and a solid background in software engineering, I'm a hands-on leader who loves to create user-friendly software using agile methodologies. <br><br>

      I always keep up with the latest industry trends and use my problem-solving skills to get great results. As someone who's always learning, I'm open to new challenges, and my communication skills help me work well with others. I truly believe in making a positive impact and joining projects that make a difference. You can count on me to work hard, deliver results, and make sure every project I'm involved in succeeds.
      <br><br>
      As an enthusiastic software developer, I see the huge potential technology has to make the world a better place. I'm committed to giving back to the community and getting involved in projects that drive real change.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Klajdo Qasolli </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> klajdoqasolli@yahoo.com</h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Tampa, Florida </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +1 (312) 792-1621 </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="resume.pdf" class="btn" data-aos="fade-up" download="Klajdo_Qasolli_Resume">Download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class='skills-bars'>
            <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span>  </div>
            <div class="bar" data-aos="fade-right"> <h3><span>PHP</span>  </div>
            <div class="bar" data-aos="fade-left"> <h3><span>Wordpress</span>  </div>
            <div class="bar" data-aos="fade-right"> <h3><span>React</span>  </div>
            <div class="bar" data-aos="fade-left"> <h3><span>HTML</span>  </div>
            <div class="bar" data-aos="fade-right"> <h3><span>CSS</span>  </div> 
         </div>
         <div class='skills-bars'>
            <div class="bar" data-aos="fade-left"> <h3><span>Ruby on Rails</span>  </div>
            <div class="bar" data-aos="fade-right"> <h3><span>PostgreSQL</span> </div>
            <div class="bar" data-aos="fade-left"> <h3><span>AWS</span>  </div>
            <div class="bar" data-aos="fade-right"> <h3><span>Figma</span>  </div>
            <div class="bar" data-aos="fade-left"> <h3><span>Trello</span>  </div> 
            <div class="bar" data-aos="fade-right"> <h3><span>Render</span>  </div>
         </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( Dec 2022 - Mar 2023 ) Flatiron School</span>
               <h3>Software Engineer Student</h3>
               <p>As a software engineering immersive student at Flatiron I created a solid foundation in software engineering principles and became well-versed in the various phases of software development. After learning HTML, CSS, Javascript, React, Ruby, and Ruby on Rails I created a strong understanding of front-end development as well as building front-end web applications. I also gained experience in back-end development, including creating back-end web APIs, and deploying my apps using Render, Heroku and Netlify</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( Apr 2021 - Dec 2022 ) Smile Design</span>
               <h3>Office Manager</h3>
               <p>● Assumed responsibility for maintaining the company's website, including updating content and plugins, ensuring
               website security, and troubleshooting technical issues.<br>
               ● Developed and implemented a training program that improved customer service ratings by 40% and ensured
               compliance with HIPAA regulations.<br>
               ● Digitized patient records and implemented electronic billing systems.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( Sept 2019 - Apr 2021 ) Baker Hill Dental</span>
               <h3>Office Manager</h3>
               <p>● Managed scheduling and billing processes, resulting in a 60% increase in revenue.<br>
               ● Led marketing campaigns that increased patient referrals by 30%.<br>
               ● Assisted with troubleshooting IT issues and worked with the IT team to resolve hardware and software problems.</p>
            </div>
            <div class="box" data-aos="fade-left">
               <span>( Aug 2017 - Sept 2019 ) Garden Dental Arts</span>
               <h3>Scheduling Manager</h3>
               <p>● Managed and organized dental professionals' schedules, ensuring smooth office operations while balancing patients' and staff needs.<br>
               ● Maintained accurate patient records, communicated effectively with various parties, and resolved scheduling conflicts and emergencies.<br>
               ● Developed strong organizational and time management skills to optimize practice efficiency, minimize waiting times, and improve patient satisfaction.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Full Stack Development</h3>
         <p>Comprehensive expertise in creating web applications using both front-end and back-end technologies, including JavaScript, React, Ruby, Node.js, HTML5, CSS, and PostgreSQL.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <i class="fas fa-bars-progress"></i>
               <h3>Project Management</h3>
         <p>Strong leadership abilities and experience in managing teams of up to 64 people. Proficient in using project management tools like Kanban and Trello.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <i class="fas fa-globe"></i>
         <h3>UI Design</h3>
         <p> Skilled in crafting user-friendly and visually appealing interfaces for web applications using tools like Figma, Bootstrap, and Material UI, with a focus on enhancing user experience.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <i class="fas fa-code-branch"></i>
            <h3>API Integration</h3>
         <p>Experienced in working with REST APIs and integrating third-party services into web applications, enhancing their functionality and providing seamless user experiences.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <i class="fas fa-shield-halved"></i>
               <h3>Web Security and maintenance </h3>
         <p>Experienced in managing websites by updating content, handling plugins, and enforcing website security measures. Capable of addressing and resolving any technical issues that might occur.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>Wordpress and PHP</h3>
         <p>Skilled in designing, sustaining, and tailoring WordPress websites using PHP for the creation of bespoke themes and plugins, guaranteeing smooth operation and an attractive online presence.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="<?php echo get_template_directory_uri(); ?>/images/petsnap.png" alt="" class='project-img'>

         <h3>PetSnap</h3>
         <a href="https://github.com/KlajdoQ/petsnap" target="_blank"><button class="github-git1" >Github & README </button></a>

      </div>

      <div class="box" data-aos="zoom-in">
         <img src="<?php echo get_template_directory_uri(); ?>/images/localsearch.png" alt="" class='project-img'>

         <h3>LocalSearch</h3>
         <a href="https://github.com/KlajdoQ/LocalSearch" target="_blank"><button class="github-git1" >Github & README  </button></a>

      </div>

      <div class="box" data-aos="zoom-in">
         <img src="<?php echo get_template_directory_uri(); ?>/images/bitcoin-webscraper.png" alt="" class='project-img'>

         <h3>Bitcoin Webscraper</h3>
         <a href="https://github.com/KlajdoQ/bitcoin-webscraper" target="_blank"><button class="github-git1" >Github & README  </button></a>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>


</section>

<!-- contact section ends -->

<?php
   get_footer();
?>
