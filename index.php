<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<!-- START LEFT COL -->
        <section>
            <h2 class="pageID"><?=$pageHeading?></h2>
<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
            <img src="images/desktop.jpg" class="desktop" alt="Picture of Thom and Stewart" />
            <img src="images/phone.jpg" class="phone" alt="Picture of Thom" />
            <h3>Welcome to my website</h3>
            <p>I’m preparing for the launch of my 4th career and have returned to SCC student for the second time, and working on Web Dev and DB Amin Certificates. I loved SCC last time I was here (in the late 1980’s). I found the corporative atmosphere conducive to learning. That’s why when I decided to return, I returned here.</p>
            <h3>Between high school and college</h3>
            <p>I worked in retail right out of high school and then spent several years in the airline industry (various ground handling positions) and traveled the world. Then I decided to go to college and, as we said in the reservations office, get a <em>real job</em>.</p>
            <h3>Off to college</h3>
            <p>So I started at Seattle Central (then Community College), and I graduated from UW in 1994, the year Marc Andreessen released the first Netscape internet browser. I had envisioned launching into a career of client server, and then web development.</p>
            <h3>Career &#35;3</h3>
            <p>I ended up as a COBOL developer, and soon became the lead for my area. What I quickly learned was that the fun part of technology for me is working out the puzzles. The actual technology was interesting, but the specific technology I used isn’t so important because it is all interesting.</p>
            <p>Over the years, I moved through the ranks of lead developer, systems manager, systems analyst, product &amp; program manager, and product owner. Through this, I worked for 4 different companies, 3 of which no longer exist, so don’t follow me if you are interested in job stability.</p>
            <h3>The myth of job stability</h3>
            <p>That said, job stability is a myth. Whether you work for yourself of someone else, the job market is fluid. And we are better off for it. My experience has taught me that the more I rotate through jobs and assignments, the more I learn, the better I think and the happier I am.</p>
        </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
        <aside>
            <BR /><BR />
            <img src="images/tablet.jpg" class="tablet" alt="Picture of Thom, Stewart and friends" />
            <h3>Change is good</h3>
            <p>I strongly believe that change is  spice of life. It invigorates me, and compels my curiosity. Curiosity breeds opportunity for learning and growth. So here I am. Back in school, learning and growing and preparing for my 4th career.</p>
            <h3>My home is my hobby</h3>
            <p>My partner, Stewart Wong, &amp; I (And yes, we are married, but PLEAZE don’t use the "H" word with us. That’s a whole rant I'll save for another day.) bought an unassuming World War Two box in 1989, and like my work life, it has been transformed. It has gone through 4 distinct phases, now being twice as large as when we bought it and a mix of a quasi-craftsman and modern design – still  in progress. Take a look at the <a href="http://steppingstonehouse.com/" target="_blank">Stepping Stone House</a> website, and you’ll understand why I need this program.</p>
            <p>I'm open to meeting new people, and visualizing the future. If you find my story interesting, I hope you'll get in touch. </p>
            <h3>Here's the best way to get in touch!</h3>
            
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other 1!       
             *
             */
            include 'includes/simple.php'; #demonstrates a simple contact form
            //include 'includes/multiple.php';#demonstrates multiple form elements
	        ?>
	        <p class="clear-recaptcha"></p>
        </aside>
<!-- END RIGHT COL -->

<?php include 'includes/footer.php';?>
