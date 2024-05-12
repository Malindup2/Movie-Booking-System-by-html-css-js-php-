<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>FAQs</title>
      <style>
      *
{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
}

body
{
    width: 100%;
    height: auto;
    padding: 3%;
    background: black;
   
}

button a
{
    text-decoration: none;
    color: #fff;

}

.inq
{
    width: 300px;
    padding: 10px;
    text-transform: uppercase;
    margin-top: 40px;
    font-size: 20px;
    background-color: red;
    font-weight: bolder;
    border-radius: 10px;
    color: white;

}

.inq:hover
{
    cursor: pointer;
    transform: skewX(-5deg) scale(1.001);
}

section
{
    min-height: 100vh;
    width:80%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2
{
    font-size: 60px;
    color: rgb(202, 27, 27);
}

.fwrapper
{
    width: 100%;
    padding: 1.5rem;
    border-bottom: 1px solid rgb(255, 255, 255);
}

.ftitle
{
    display: block;
    position: relative;
    width:100%;
    letter-spacing:1.2;
    font-size:25px ;
    font-weight: 600;
    color: rgb(253, 252, 252);
}

.ftitle::after
{
    width: 10px;
    height: 10px;
    content: "";
    float: right;
    border-style: solid;
    border-width: 2px 2px 0 0;
    transform: rotate(135deg);
    transition: 0.4s ease-in-out;
}

.fdetails
{
    line-height: 1.5;
    letter-spacing: 1;
    max-height: 0;
    overflow: hidden;
    transition: 0.3s ease-in-out;
    font-size: 18px;
    color: #fff;
}

.ftrigger
{
    display: none;
}

.ftrigger:checked + .ftitle + .fdetails
{
    max-height: 300px;
}

.ftrigger:checked + .ftitle::after
{
    transform: rotate(45deg);
    transition:0.4s ease-in-out;
}
</style>
    </head>
    
    <body>
        <section>
            <h2 class="top">FAQ</h2>

            <div class="fbox">
                <div class="fwrapper">
                    <input type="checkbox" class="ftrigger" id="ftrigger1">
                    <label class="ftitle" for="ftrigger1">How do I find movies and showtimes on your website?

                    </label>
                    <div class="fdetails">
                        <p>
                            You can find movies and showtimes by selecting your city or location on our homepage.
                             Once you've selected your city, you'll see a list of cinemas and the movies currently showing,
                              along with their respective showtimes.

                        </p>
                    </div>
                </div>
    
                <div class="fwrapper">
                    <input type="checkbox" class="ftrigger" id="ftrigger2">
                    <label class="ftitle" for="ftrigger2">Do I need to create an account to book tickets?

                    </label>
                    <div class="fdetails">
                        <p>
                            Yes, you need to create an account to book tickets. This allows us to save your preferences, 
                            manage your bookings, and provide you with a personalized experience.

                        </p>
                    </div>
                </div>
    
                <div class="fwrapper">
                    <input type="checkbox" class="ftrigger" id="ftrigger3">
                    <label class="ftitle" for="ftrigger3"> Can I choose my seats when booking tickets online?</label>
                    <div class="fdetails">
                        <p>
                            Yes, you can choose your seats using our interactive seating map. 
                            Simply select the seats you want from the available options.

                        </p>
                    </div>
                </div>
    
                <div class="fwrapper">
                    <input type="checkbox" class="ftrigger" id="ftrigger4">
                    <label class="ftitle" for="ftrigger4">Can I book tickets for upcoming movies?</label>
                    <div class="fdetails">
                        <p>
                            Yes, you can book tickets for upcoming movies as soon as they are listed on our website. 
                            We often open bookings for popular movies well in advance, so keep an eye on our site for updates.

                        </p>
                    </div>
                </div>
    
                <div class="fwrapper">
                    <input type="checkbox" class="ftrigger" id="ftrigger5">
                    <label class="ftitle" for="ftrigger5"> Is it safe to use my credit/debit card on your website?</label>
                    <div class="fdetails">
                        <p>
                            Yes, it is safe to use your credit/debit card on our website. We use industry-standard encryption and security measures 
                            to protect your payment information.
                        </p>
                    </div>
                </div>


                <button class="inq"><a href="inquiry.php">Inquire Now</a></button>
    
                
    
        <script src="js/faqs.js"></script>
    </body>
</html>