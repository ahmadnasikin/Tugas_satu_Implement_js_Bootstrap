<!-- Demo CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/slider/flexslider/flexslider.css" type="text/css" media="screen" />

<!-- Modernizr -->
<script src="<?php echo base_url(); ?>assets/slider/flexslider/js/modernizr.js"></script>

<section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="<?php echo base_url(); ?>assets/slider/flexslider/demo/images/kitchen_adventurer_cheesecake_brownie.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url(); ?>assets/slider/flexslider/demo/images/kitchen_adventurer_lemon.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url(); ?>assets/slider/flexslider/demo/images/kitchen_adventurer_donut.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url(); ?>assets/slider/flexslider/demo/images/kitchen_adventurer_caramel.jpg" />
  	    		</li>
          </ul>
        </div>
</section>
      <aside>
        <div class="cf">
          <h3>Basic Slider</h3>
          <h4>JS</h4>
        </div>
        <div id="view-js" class="code">
          <pre class="brush: js; toolbar: false; gutter: false;">
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide"
              });
            });
          </pre>
        </div>
        <h4>HTML</h4>  
        <div id="view-html" class="code">
          <pre class="brush: xml; toolbar: false; gutter: false;">
            &lt;!-- Place somewhere in the &lt;body&gt; of your page -->
            &lt;div class="flexslider">
              &lt;ul class="slides">
                &lt;li>
                  &lt;img src="slide1.jpg" />
                &lt;/li>
                &lt;li>
                  &lt;img src="slide2.jpg" />
                &lt;/li>
                &lt;li>
                  &lt;img src="slide3.jpg" />
                &lt;/li>
                &lt;li>
                  &lt;img src="slide4.jpg" />
                &lt;/li>
              &lt;/ul>
            &lt;/div>
          </pre>
        </div>
      </aside>
    </div>

  </div>

  <!-- jQuery -->
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
  <!--<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>-->

  <!-- FlexSlider -->
  <script defer src="<?php echo base_url(); ?>assets/slider/flexslider/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/slider/flexslider/js/shCore.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/slider/flexslider/js/shBrushXml.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/slider/flexslider/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="<?php echo base_url(); ?>assets/slider/flexslider/js/jquery.easing.js"></script>
  <script src="<?php echo base_url(); ?>assets/slider/flexslider/js/jquery.mousewheel.js"></script>
  <script defer src="<?php echo base_url(); ?>assets/slider/flexslider/js/demo.js"></script>
