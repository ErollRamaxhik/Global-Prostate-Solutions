<!DOCTYPE html>
<html lang="en">
<?php
$warning=3;
    if(isset($_POST['send'])){

    
        $to = "exwave96@gmail.com";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $message = $_POST['message'];

        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phonenumber) && !empty($message)){
            $warning=1;

            $body = "";
            $body .= "First Name: ";
            $body .= $firstname;
            $body .= "\nLast Name: ";
            $body .= $lastname;
            $body .= "\nEmail: ";
            $body .= $email;
            $body .= "\nPhone Number : ";
            $body .= $phonenumber;
            $body .= "\nMessage : ";
            $body .= $message;

            // send email
            mail($to,"Global Prostate Solutions",$body);
            
        }else{
            $warning=0;
        }


    }
?>
  
    <?php include "includes/header.php";?>
  <body class="full-height">

    <!-- NAVBAR -->
    <?php include "includes/navigation.php";?>

    <!--PAGE HEADER-->
    <section id="heading" class="p-5">
      <div class="dark-overlay">
        <div class="row">
          <div class="col">
            <div class="container pt-5">
              <h1>Contact Us</h1>
              <p class="d-none d-md-block">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In similique sapiente, reiciendis nulla
                voluptatem ab maxime assumenda eos. Reiciendis, quidem.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--CONTACT US SECTION-->

    <section id="contact" class="py-3">
      <div class="container">
        <div class="row g-2">
          <div class="col ">
            <div class="card p-4">
                <form method="post">
                    <div class="card-body p-0">
                        <h3 class="info-text text-center">Please fill out this<b> form</b> to<b> contact </b> us</h3>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="firstname" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name" name="lastname"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-2">
                                <div class="form-group">
                                <textarea class="form-control" placeholder="Message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <input name="send" type="submit" value="Submit" class="btn btn-outline-danger w-100" />
                                </div>
                                <?php
                            if($warning==1){
                                echo "<div class='mt-2 alert alert-success text-center' role='alert'>
                                Your Message has been sent!
                                </div>";
                            }else if($warning==0){
                                echo "<div class='mt-2 alert alert-danger text-center' role='alert'>
                                Fields cannot be empty!
                                </div>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <div class="container-fluid p-0">
     <div class="card  overflow-hidden"> 
                <h3 class="info-text p-4 pb-0 mb-0 text-center">Our<b> Location</b></h3>  
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152425.3278223185!2d-6.461876030062087!3d53.34959734268401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2700fe0d8c716167!2sTrinity%20College%20Dublin!5e0!3m2!1sen!2s!4v1615311424944!5m2!1sen!2s"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
    </div>
    <!-- QUESTIONS-->

    <section id="faq" class="p-5 bg-dark-image text-white">
      <div class="container">
        <div class="row">
          <h3 class="content-index text-center">Frequently Asked Questions</h3>
          <hr />
          <div class="content-index col-md-6">
            <div id="accordion" class="accordion">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <a href="#collapseOne" data-bs-toggle="collapse" data-bs-parent="#accordion">Question One </a>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus laborum ea qui libero ipsa,
                    exercitationem sapiente quis voluptatem laboriosam officiis magnam nostrum! Est voluptates nostrum
                    quaerat quidem quia, ipsam quisquam? Et nesciunt officiis id quaerat a facilis sed? Doloribus, ipsa.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <a href="#collapseTwo" data-bs-toggle="collapse" data-bs-parent="#accordion">Question Two </a>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus laborum ea qui libero ipsa,
                    exercitationem sapiente quis voluptatem laboriosam officiis magnam nostrum! Est voluptates nostrum
                    quaerat quidem quia, ipsam quisquam? Et nesciunt officiis id quaerat a facilis sed? Doloribus, ipsa.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <a href="#collapseThree" data-bs-toggle="collapse" data-bs-parent="#accordion">Question Three </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus laborum ea qui libero ipsa,
                    exercitationem sapiente quis voluptatem laboriosam officiis magnam nostrum! Est voluptates nostrum
                    quaerat quidem quia, ipsam quisquam? Et nesciunt officiis id quaerat a facilis sed? Doloribus, ipsa.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-index col-md-6">
            <div id="accordion" class="accordion">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <a href="#collapseFour" data-bs-toggle="collapse" data-bs-parent="#accordion">Question Four </a>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus laborum ea qui libero ipsa,
                    exercitationem sapiente quis voluptatem laboriosam officiis magnam nostrum! Est voluptates nostrum
                    quaerat quidem quia, ipsam quisquam? Et nesciunt officiis id quaerat a facilis sed? Doloribus, ipsa.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <a href="#collapseFive" data-bs-toggle="collapse" data-bs-parent="#accordion">Question Five </a>
                  </h5>
                </div>
                <div id="collapseFive" class="collapse">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus laborum ea qui libero ipsa,
                    exercitationem sapiente quis voluptatem laboriosam officiis magnam nostrum! Est voluptates nostrum
                    quaerat quidem quia, ipsam quisquam? Et nesciunt officiis id quaerat a facilis sed? Doloribus, ipsa.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">
                    <a href="#collapseSix" data-bs-toggle="collapse" data-bs-parent="#accordion">Question Six </a>
                  </h5>
                </div>
                <div id="collapseSix" class="collapse">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus laborum ea qui libero ipsa,
                    exercitationem sapiente quis voluptatem laboriosam officiis magnam nostrum! Est voluptates nostrum
                    quaerat quidem quia, ipsam quisquam? Et nesciunt officiis id quaerat a facilis sed? Doloribus, ipsa.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER -->

    <?php include "includes/footer.php";?>
  </body>
</html>
