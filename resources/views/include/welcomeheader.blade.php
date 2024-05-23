<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Your Website Title</title>
    <style>
   body {
    margin: 0;
    padding: 0;
}

header {
    background-color: #358439;
    padding: 12px;  /* change to 5px when we wnat to display cattle list*/
    text-align: center;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1004;
    overflow: hidden;
}




.menuoptions {
    color: rgb(255, 255, 255);
    font-size: 23px;
    font-weight: bold;
    text-decoration: none;
    padding: 0;
    border: none;
    background: none;
    margin: 0;
    position: absolute;
    right: 60px; /* Adjust the right position */
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    outline: none;
}

.menuoptions span {
    margin-left: 20px; /* Adjust spacing between menu items */
    text-decoration: none;
    color: inherit;
    cursor: pointer;
}

.menuoptions span:hover {
    color: rgb(221, 221, 221);
}







header img {
            margin-left: 10px;
            width: 118.67px; /* Set the width to 99px */
            height: 50.89px; /* Set the height to 23.9px */
            float: left;
            cursor: pointer;
        }


body {
    margin-top: 50px; /* Adjust the margin-top to match the height of your fixed header and the spilled milk effect */
}




#imgoverlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1003;
    }

    #cow-img-card {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 15px;
            z-index: 1004;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 10cm;
        }

        @media screen and (max-width: 500px) {
            #cow-img-card {
                width: 80%;
            }
        }

        .imgtext{
        font-size: 20px;
  font-weight: bold;
  text-align: center;
  padding-top: 10px;
  margin-bottom: -10px;
}

.imgtextitem{
    font-size: 18px;
    font-weight: bold;
  text-align: center;
  margin-top: 5px;
}


.icon-link {
    margin-right: 10px; /* Adjust this value to set the desired space */
    margin-left: 10px;
    text-decoration: none; /* Remove underline from the icon links */
}


.custom-layoutbuttons {
            width: 100px;
            height: 40px;
            margin-top: 15px;
            margin-bottom: 5px;
            margin-left: 10px;
        }




.icon-link i.fab.fa-instagram {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  -webkit-background-clip: text; /* Clip the background to the text */
  background-clip: text;
  color: transparent; /* Make the text transparent to reveal the background */
}










@media (max-width: 775px) {

    .menuoptions {
    right: 30px;
    }

}





@media (max-width: 490px) {

    .menuoptions {
    font-size: 18px;
    right: 10px;
    }

    .menuoptions span {
    margin-left: 10px; /* Adjust spacing between menu items */
}

    header img {
            margin-left: 5px;
            width: 110.67px; /* Set the width to 99px */
            height: 45.89px; /* Set the height to 23.9px */
        }

        header {
    padding: 10px;  /* change to 5px when we wnat to display cattle list*/
}

}








    </style>
</head>
<body>





    <div id="imgoverlay" onclick="hideimgOverlay()"></div>

    <div id="cow-img-card">
        <div class="card-body">
            <div class="imgtext">Connect with us on</div>
            <br>
            <a href="https://www.youtube.com/@dairydosth" class="icon-link"><i class="fab fa-youtube fa-3x" style="color: red;"></i></a>
            <a href="https://www.facebook.com/share/iQn8VcPtSMLmFQHA/?mibextid=qi2Omg" class="icon-link"><i class="fab fa-facebook fa-3x"></i></a>
            <a href="https://www.instagram.com/dairy_dosth?igsh=MWlwMGU5OTUwa3RhMw==" class="icon-link"><i class="fab fa-instagram fa-3x"></i></a>
            <div class="imgtextitem">Team Dairy-Dosth</div>
            <a onclick="hideimgOverlay()" class="btn btn-danger custom-layoutbuttons">Close</a>
        </div>
    </div>




    <header>
        <img src="{{ asset('easyfarming.png') }}" alt="Logo" onclick="openimgOverlay()">
        <script>
            function openimgOverlay() {
                var overlay = document.getElementById('imgoverlay');
                var detailsCard = document.getElementById('cow-img-card');
                var body = document.body;

                overlay.style.display = 'block';
                detailsCard.style.display = 'block';
                body.style.overflow = 'hidden'; // Disable scrolling
            }

            function hideimgOverlay() {
                var overlay = document.getElementById('imgoverlay');
                var detailsCard = document.getElementById('cow-img-card');
                var body = document.body;

                overlay.style.display = 'none';
                detailsCard.style.display = 'none';
                body.style.overflow = 'auto';
            }
        </script>




<div class="menuoptions">
    <span data-href="#firstbody">Home</span>
    <span data-href="#secondbody">About</span>
    <span data-href="#contactus">Contact</span>
</div>

    </header>

    <script>
        document.querySelectorAll('.menuoptions span').forEach(span => {
    span.addEventListener('click', function() {
        const targetId = this.getAttribute('data-href');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
</script>

    <!-- The rest of your website content goes here -->

</body>
</html>































