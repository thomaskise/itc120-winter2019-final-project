<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>   

<section>
    <h2 class="pageID"><?=$sectionHeading;?></h2>
    <!--show/hide month/day calendar based on resolution -->
    <div class='month-view embed-container'>
        <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&height=600&wkst=1&bgcolor=%23993399&src=seattlecentral.edu_j1ekvjcuh37h3n1bug1d82r5v0%40group.calendar.google.com&color=%23B1440E&ctz=America%2FLos_Angeles' style='border:solid 1px #777' width='800' height='600' frameborder='0' scrolling='no'>
        </iframe>
    </div>
    <div class='agenda-view embed-container'>
        <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&mode=AGENDA&height=600&wkst=1&bgcolor=%23993399&src=seattlecentral.edu_j1ekvjcuh37h3n1bug1d82r5v0%40group.calendar.google.com&color=%23B1440E&ctz=America%2FLos_Angeles' style='border:solid 1px #777' width='800' height='600' frameborder='0' scrolling='no'>
        </iframe>
    </div>
</section>
<aside>
    <h2 class="pageID">Upcoming Events</h2>
    <h3>AAPI Perspectives on The AMP</h3>
    <strong>
    <p>
        March 9<br />
        Learn about The AMP: AIDS Memorial Pathway from Lead Artist Horatio Law! This event is co-presented by the Asian Counseling and Referral Service (ACRS).<br />

        The AMP will be completed in 2020 above the Capitol Hill Light Rail Station and the north edge of Cal Anderson Park. We’ll share details of this multi-media public art project, and show some videos that are part of our story collection initiative.<br />

        Also, Victor Loo from ACRS will provide information addressing access and health disparities for LGBTQ people in AAPI and other POC communities.
    </p>
    </strong>
</aside>
<?php include 'includes/footer.php'?>
