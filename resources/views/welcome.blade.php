@extends('layout.welcomelayout')
@section('title', 'Easy Farming')
@section('content')



<style>




    .firstbody
           {
            background: url('{{ asset('final.jpg') }}') no-repeat center center fixed;
            background-size: cover;
                height: 100vh; /* Set height to fill the viewport */
                padding-left: 180px;
            }




            .secondbody {
      background: linear-gradient(to right,rgb(77, 159, 107), rgb(37, 179, 53));
      /* height: 695px; */
       height: 100vh;
      padding-left: 180px;
    }

    .thirdbody
           {
                background: linear-gradient(to right, rgb(77, 159, 107), rgb(10, 106, 21));
                height: 90vh; /* Set height to fill the viewport */
            }


    .maintext
    {
        color: rgb(13, 60, 19);
        font-size: 75px;
        font-weight: bold;
        text-decoration: none;
        padding: 0;
        border: none;
        /* margin-top:320px; */
        margin-top: 10vh;
        position: absolute;


        z-index: 2;
        outline: none;
    }





    .subtext
{
    color: rgb(255, 255, 255);
    font-size: 28px;
    font-weight: bold;
    text-decoration: none;
    border: none;
    background-color: rgba(37, 91, 38, 0.5); /* Green shade with 50% transparency */
    /* margin-top: 580px; */
    margin-top: 65vh;
    position: absolute;


    z-index: 2;
    outline: none;
}




.button
{
    color: rgb(255, 255, 255);
    font-size: 28px;
    font-weight: bold;
    text-decoration: none;
    border: none;
    /* margin-top: 580px; */
    margin-top: 75vh;
    position: absolute;

    z-index: 2;
    outline: none;
}

.button button
{
    font-size: 25px;
    color: #ffffff;
    font-weight:bold;
    background-color: rgb(17, 90, 11);
}


.button button {
  cursor: pointer;
  animation: rainbowBg 4s infinite; /* Adjust animation duration as needed */
  border: none;
  color: white;
  padding: 10px 15px;
  font-size: 18px;
  border-radius: 5px;
}

.button button:hover {
  animation-play-state: paused; /* Pause animation on hover */
}

@keyframes rainbowBg {
  0% { background-color: red; }
  30% { background-color: blue; }
  75% { background-color: indigo; }
  100% { background-color: red; }
}

























.secondbody h2
{
  padding-top: 70px;
  font-size: 30px;
  font-weight: bold;
  color: #000000;
}

.secondbody h3
{
  padding-top: 5px;
  font-size: 30px;
  font-weight: bold;
  color: #000000;
}


.secondbody p{
    padding-top: 5px;
  font-size: 20px;
  color: #000000;
}








    .contact-box {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      background-color: rgba(35, 105, 255, 0);
      color: #fff;
      width: 35%;
      margin-top: 10vh;
      position: absolute;
      left: 180px;
    }






    .contact-box h4 {
      font-size: 38px; /* Decrease the font size for the heading */
      margin-bottom: 15px;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: calc(100% - 10px); /* Adjust the width of input fields */
      padding: 8px;
      border: 1px solid #ffffff;
      border-radius: 3px;
    }

    .form-group textarea {
      height: 70px; /* Adjust the height of the textarea */
    }

    button[type="submit"] {
      background-color: #2e23cb;
      color: #fff;
      padding: 8px 15px;
      border: 1px solid #2a1a84;
      border-radius: 3px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #2606c8;
    }





















    .location-box {

      padding: 50px;
      border-radius: 5px;
      background-color: rgba(35, 105, 255, 0);
      color: #fff;
      width: 35%;
      margin-top: 17vh;
      position: absolute;
      right: 250px;
    }

    .location-box h4,
    .location-box p {
      display: flex;
      align-items: flex-start;
      padding-top: 10px;
    }

    .location-box h4 {
      padding-top: 20px;
    }


    .location-box p {
      margin-left: 50px;
    }

    .location-box h4 i,
    .location-box p i {
      margin-right: 25px;
      margin-top: 4px;
    }











    @media (max-width: 1350px) {
      .location-box {
            right: 200px;
        }
          }




          @media (max-width: 1200px) {
      .location-box {
            right: 10px;
            width: 45%;
        }
        .contact-box {
      width: 40%;
    }
          }












          @media (max-width: 1100px) {
            .secondbody {
      padding-left: 90px;
    }

    .firstbody
           {
                padding-left: 90px;
            }


    .contact-box {
      left: 90px;
      width: 45%;
    }
          }












          @media (max-width: 1000px) {

            .maintext
                  {
                     font-size: 70px;
                  }
           .subtext
                  {
                     font-size: 25px;
                  }

                  .secondbody {
      padding-left: 50px;
    }

    .firstbody
           {
                padding-left: 50px;
            }


    .contact-box {
      left: 50px;
    }


          }




























          @media (max-width: 940px) {

            .secondbody {
       height: 680px;
    }

    .secondbody h2
                {
               padding-top: 50px;
                 }




      .secondbody {
padding-left: 10px;
}

.firstbody
{
    padding-left: 10px;
}


.contact-box {
left: 10px;
}


}
















          @media (max-width: 920px) {


                 .thirdbody
                 {
                  height: 1000px;
                 }

                 .contact-box
                 {
                   left: 50%;
                   right: auto; /* Reset the right position */
                   transform: translateX(-50%); /* Center the box horizontally */
                   width: 60%;
                 }

             .location-box
             {
               margin-top: 580px;
               left: 50%;
               right: auto; /* Reset the right position */
               transform: translateX(-50%); /* Center the box horizontally */
               width: 100%;
               padding-left: 23%;
             }



          }









          @media (max-width: 800px) {

            .secondbody {
       height: 50%;
       margin-bottom: -20px;
       padding-bottom: 10px;
    }


    .secondbody h2 {
        padding-top: 30px;
    }

        }


























        @media (max-width: 775px) {

            .maintext
            {
                font-size: 65px;
            }

        }















        @media (max-width: 700px) {

.maintext
{

    font-size: 56px;
    margin-top: 12vh;
}




.secondbody h2
{
  font-size: 28px;
}

.secondbody h3
{
  padding-top: 0px;
  font-size: 28px;
}


.secondbody p{
    padding-top: 0px;
    font-size: 18px;
}



     .contact-box
                 {
                   width: 80%;
                 }



                 .location-box
             {
               padding-left: 13%;
             }




}












@media (max-width: 605px) {

           .subtext
                  {
                     font-size: 20px;
                  }

}







@media (max-width: 475px) {


.maintext
              {
                 font-size: 50px;
              }
       .subtext
              {
                margin-top: 60vh;
                 font-size: 17px;
              }
              .button
            {
                margin-top: 70vh;
             }
            }







@media (max-width: 420px) {


.maintext
              {
                 margin-top: 8vh;
                 font-size: 45px;
              }
       .subtext
              {
                margin-top: 60vh;
                 font-size: 15.5px;
              }

}




.alert-fixed {
    background-color: green;
    color: #ffffff;
    position: fixed;
    top: 70px;
    width: 210px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1050;
    display: flex;
    align-items: center; /* Vertically centers the content */
    justify-content: center; /* Horizontally centers the content */
    text-align: center; /* Ensures text is centered */
    display: none;
}



    </style>





<div class="firstbody"  id="firstbody">





    <div id="flash-message" class="alert alert-success alert-fixed">
        {{ session('success') }}
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage.textContent.trim() !== '') {
                flashMessage.style.display = 'block';
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 2000);
            }
        });
    </script>




    {{-- <img src="{{ asset('t4mkbg.jpg') }}" alt="Background Image" class="background-image"> --}}


<div class="maintext">
    Empowering Farmers
 <br> with
 <br>Smart Solutions!
</div>
    {{-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}




    <div class="subtext">
        Click the below button for DairyDosth free trial
    </div>




    <div class="button">
    <button onclick="location.href='https://dd.easyfarming.in'">Explore DairyDosth</button>
    </div>


</div>


<script>

// Smooth scrolling to contact section when clicking on the link
document.getElementById('contactLink').addEventListener('click', function() {
    document.getElementById('contactus').scrollIntoView({ behavior: 'smooth' });
});

</script>







































<div id="secondbody" class="secondbody">
    <h2>About EasyFarming</h2>
    <p>Highlight your commitment to revolutionizing farming practices through technology.<br>
       Revolutionizing Agriculture through Technology.<br>
       Empowering farmers with innovative tools for sustainable, profitable farming.</p>

    <h3>Our Products</h3>
    <p>Introduction to DairyDosth: "Streamline Your Dairy Farm Operations with DairyDosth."<br>
    Key features: Automated cattle management, health tracking, milk production analysis, and more.</p>





    <h3>How DairyDosth Works</h3>
    <p>Step-by-step guide on how DairyDosth simplifies dairy farm management.<br>
       Visual aids such as screenshots or infographics.<br>
       Highlight the ease of use and time-saving benefits.<p>


    <h3>Why Choose EasyFarming</h3>
    <p>Showcase your expertise in agricultural technology.<br>
       Emphasize the advantages of partnering with EasyFarming for farm automation needs.<p>




    </div>






















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


window.onload = function() {
    // Scroll to the top of the page when the page is refreshed
    window.scrollTo(0, 0);
};


$(document).ready(function() {
    var cards = $('.card');
    var cardPositions = [];

    // Get positions of each card
    cards.each(function() {
        var position = $(this).offset().top;
        cardPositions.push(position);
        $(this).css('opacity', 0); // Hide initially
    });

    // Show card when user scrolls to its position
    $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop() + $(window).height();
        for (var i = 0; i < cardPositions.length; i++) {
            if (scrollPosition > cardPositions[i]) {
                cards.eq(i).animate({ opacity: 1 }, 800); // Adjust animation speed as needed
            }
        }
    });
});
</script>





















<div id="contactus" class="thirdbody">




<div class="contact-box">
<h4>Reach Us</h4>
<form action="{{ route('makeaenquiry') }}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>
  </div>
  <div class="form-group">
    <label for="email">Email ID: (optional)</label>
    <input type="email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="need">Describe Your Need:</label>
    <textarea id="need" name="need" required></textarea>
  </div>
  <button type="submit">Get a free consultation</button>
</form>
</div>









<div class="location-box">
<h4><i class="fas fa-map-marker-alt"></i> OUR LOCATION</h4>
<p>Cyberpark Kozhikode, Kerala, 673016</p>
<h4><i class="far fa-envelope"></i> SEND US MAIL</h4>
<p>info@t4mk.com</p>
<h4><i class="fas fa-phone"></i> CALL US</h4>
<p>+91 8714079898</p>
</div>








</div>




@endsection



















