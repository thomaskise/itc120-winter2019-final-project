<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>   

<section>
    <h2 class="pageID"><i class="<?=$logo?>"></i><?=$sectionHeading?></h2>
    <p>
        Flexbox is CSS designed to provide smooth functionality for arranging containers and items on a web page that are responsive to changes in screen size. Its structure is also simple to manipulate in  @media declarations. It is comprised of two basic components. Flexbox containers, and items which go into a container. While understanding these concepts is of utmost important, and understanding container was no problem, getting information on “item” was a bit elusive. As I understand it now, an item is simply any element, whether an element used as a container (e.g. div or section) or an element used as a page component (e.g. h1 or p).<br /><br />

        The basic declaration for flexbox is either display: flex; or display: inline-flex; The difference is comparable to block vs inline-block declaration (<a href="#stack">Stackoverflow</a>).<br /><br />

        Flexbox provides easy ways to align items within a container. For instance, to have items pile up on top of each other, use the flex-direction: column; property/value in the container declaration. To display items side by side simply use flex-direction: row. Additional values offer greater flexibility in handling order. There is also a flexbox-wrap property that instructs the container to let its items wrap or not wrap. This is one of the things that makes it simple to adjust @media settings.  For instance, set nowrap for a desktop and wrap for a mobile can flow left to right (or right to left if you like) or stack content nicely in the display adjusting for each media.  <br /><br />

        The “Complete Guide to Flexbox” (<a href="#stack">CSS-Tricks</a>) and “Basic concepts of flexbox” (<a href="#mdn">MDN web docs</a>) are both great references if you are interested in developing a flexbox web page. The latter does a better job in explaining the css declarations for both containers and items, and has a nice menu for selecting specific properties. The former is a good deep read and offers quicker look-up once you get the hang of it. <br /><br />

        My CSS skills are marginal, and it took me a while to get up to speed. After 15-20 hours working with it, I was getting pretty good results. I highly recommend for anyone interested in responsive web to take a look.<br /><br />

    </p>
</section>

<aside>
    <h2>Works Cited</h2>    
    <h4 id="mdn">MDN web docs: </h4>
    <p>
        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">&quot;Basic concepts of flexbox&quot;; </a><i class="fa fa-external-link-square" aria-hidden="true"></i> not dated; accessed 24 February 2019.
    </p>
    <h4 id="tricks">CSS-Tricks: </h4>
    <p>
        <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">&quot;A Complete Guide to Flexbox&quot;; </a><i class="fa fa-external-link-square" aria-hidden="true"></i> updated 31 January 2019; accessed 20 February 2019.
    </p>
    <h4 id="stack">Stack Overflow: </h4>
    <p>
        <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">&quot;What's the difference between display:inline-flex and display:flex&quot;; </a><i class="fa fa-external-link-square" aria-hidden="true"></i> uposting dated 21 March 2018; accessed 24 February 2019.
    </p>
    <br /><br />
    <p><a href="pdf/big3.pdf" target="_blank">Get this article in PDF </a><i class="fa fa-external-link-square" aria-hidden="true"></i></p>
</aside>

<?php include 'includes/footer.php'?>
