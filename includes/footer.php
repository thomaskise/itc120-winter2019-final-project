 
<!-- START footer.php -->
        <footer>
            <BR />
            <hr class="footer">
            <p><small>&copy; 2018 - <?=date("Y")?> by <a href="<?=$virtual_path ?>contactme.php">Thom Harrington (contact me!)</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML5</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
/* reCaptcha function */
        grecaptcha.ready(function() {
        grecaptcha.execute('6LeUT4kUAAAAAF_Mw3YbkVb6GZKRYugT2SUnJj58', {action: 'action_name'})
        .then(function(token) {
// Verify the token on the server.
        });
        });
    </script>
</div>
</body>
</html>
