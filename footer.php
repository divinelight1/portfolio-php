<footer>
  
   <div id="wrap">
        <h1>Send a message</h1>
        <div id='form_wrap'>
            <form>
                <p>Contact me</p>
                <label for="email">Your Message : </label>
                <textarea  name="message" value="Your Message" id="message" ></textarea>
                <p>Your</p>    
                <label for="name">Name: </label>
                <input type="text" name="name" value="" id="name" />
                <label for="email">Email: </label>
                <input type="text" name="email" value="" id="email" />
                <input type="submit" name ="submit" value="Send Now" />
            </form>
        </div>
    </div>
</footer>



<!-- ---------------SCRIPT FOR jQuery ------------------------- -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
  $(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});
});
       $(document).ready(function(){
    var t = setInterval(function(){
        $("#carousel ul").animate({marginLeft:-680},1000,function(){
            $(this).find("li:last").after($(this).find("li:first"));
            $(this).css({marginLeft:0});
        })
    },4000);


    $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
});
        </script>
    </body>
</html>
