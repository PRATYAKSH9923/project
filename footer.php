<?php
?>
<div class="main_footer">
           <div class ="sub_footer1">
           <h3> About Us</h3>
            <ul><li><a href="#" target="_blank" >About Our Group</a></li>
                <li><a href="#" target="_blank"  >Careers</a></li>
                <li><a href="#" target="_blank"  >Contact Us</a></li>
            </ul>
           </div>
           <div class ="sub_footer1">
            <h3>Extra</h3>
            <ul>
                <li><a href="#" target="_blank">Help</a></li>
                <li><a href="#" target="_blank">Sitemap</a></li>
                <li><a href="#" target="_blank">Legal &amp; Privacy information</a></li>
            </ul>
           </div>
           <div class ="sub_footer1">
            <h3>Follow Us</h3>
                <div>
                   <a> <i id="Wsin_pass_icon" class="fa fa-exclamation-circle exclamation"></i></a> 
                   <a> <i id="Wsin_pass_icon" class="fa fa-exclamation-circle exclamation"></i></a>
                   <a> <i id="Wsin_pass_icon" class="fa fa-exclamation-circle exclamation"></i></a>
                </div>
           </div>
           <div style="margin-top: 141px; ;"><center>Free Classified in India. © 2021 NotesBecho.com</center></div>

       </div>
       
</body>
<?php if(!empty($error)||!empty($sinerr)){ ?>
  <script>
    setTimeout(() => {
     document.getElementById("signup_msg").style.display="none";
    }, 3000);
</script>

  <?php } ?>
</html>