<?php
require_once('functions/function.php');
get_header();

if(!empty($_POST)){
  $name =htmlentities($_POST['name'],ENT_QUOTES);
  $email =htmlentities($_POST['email'],ENT_QUOTES);
  $sub =htmlentities($_POST['subject'],ENT_QUOTES);
  $mass =htmlentities($_POST['message'],ENT_QUOTES);

  if(!empty($name)){
    if(!empty($email)){
      if(!empty($sub)){
        if(!empty($mass)){
          // INSERT QUERY START HERE ================
          $inser ="INSERT INTO cs_contact (con_name,con_email,con_subject,con_massage)
          VALUES('$name','$email','$sub','$mass')";
         if(mysqli_query($con,$inser)){
           echo  'your massage sen successful!';
         }else{
           echo " massage send faild !";
         }
          // INSERT QUERY END  HERE ================


// massage end here 
        }else{
          echo " writte your massage here !";
        }
// subject end 
      }else{
        echo "What's your subject !";
      }
// email end 
    }else{
      echo "please inter your valid email !";
    }
//name end
  }else{
    echo "please inter your valid name !";
  }


}

?>
<!-- Start top-section Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center text-center banner-content">
      <div class="col-lg-12">
        <h1 class="text-white">Conatct</h1>
        <p>Days so us evening for herb bearing lesser man female night</p>
      </div>
    </div>
  </div>
</section>
<!-- End top-section Area -->

<!--================Contact Area =================-->
<section class="contact_area section-gap">
  <div class="container">
      <div id="mapBox"  margin='200px'><iframe width='100%' margin-bottom='150px' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17371.76784480165!2d90.38638737803028!3d23.74865148806909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bcd681372b%3A0x5c2b8755e4327004!2z4Kas4Ka44KeB4Kao4KeN4Kan4Kaw4Ka-IOCmuOCmv-Cmn-CmvyDgprbgpqrgpr_gpoIg4KaV4Kau4Kaq4KeN4Kay4KeH4KaV4KeN4Ka4!5e0!3m2!1sbn!2sbd!4v1648539088056!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <br>
    <div class="row">
      <div class="col-lg-3">
        <div class="contact_info">
          <div class="info_item">
            <i class="fa fa-home"></i>
            <h6>California, United States</h6>
            <p>Santa monica bullevard</p>
          </div>
          <div class="info_item">
            <i class="fa fa-phone"></i>
            <h6><a href="#">00 (440) 9865 562</a></h6>
            <p>Mon to Fri 9am to 6 pm</p>
          </div>
          <div class="info_item">
            <i class="fa fa-envelope"></i>
            <h6><a href="#">support@colorlib.com</a></h6>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
      <!-- foorm start here  -->
        <form class="row contact_form" action="" method="post" id="contactForm"
          novalidate="novalidate">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required="" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
            </div>
          </div>
          <div class="col-md-12 text-right">
            <button type="submit" value="submit" class="btn primary-btn">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--================Contact Area =================-->
<?php

get_footer();

?>