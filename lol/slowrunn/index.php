<!DOCTYPE html>
<html lang="fi">

<head>
    <title>Slow Running</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.store.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
    
</head>

<body>

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1 class="navbar-brand">SLOW RUN</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Näytä valikko">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Koti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="uutiset.php">Uutiset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="yhteys.php">Yhteys</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <div class="image-container">
        <img src="images/slow-running.jpg" class="d-block w-100" alt="Slow Running">
        <div class="button-container">
            <div class="button-text">Juokse hitaammin niin voit paremmin</div>
            <a href="yhteys.php" class="join-button">Liity mukaan</a>
        </div>
    </div>

  <!-- Mistä on kyse -->
<section id="what-about" class="my-5">
    <div class="container">
        <h2 class="text-center mb-4">Mistä on kyse?</h2>
        <p class="text-center">Hitaalla eli matalasykkeisellä juoksemisella on todettu monia terveysvaikutuksia. Yleisesti rasitat kehoasi vähän, mutta saat suurimman osan terveyshyödyistä. Näin ollen pitkäikäisyys ja hyvinvointi paranee pitkällä aikavälillä ja vältät urheilun haittapuolet kehollesi.</p>
        
        <div class="icon-container">
            <div class="icon-item">
                <i class="fa fa-bacteria fa-3x"></i>
                <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Elit tincidunt etiam vivamus at pharetra lorem amet. Mollis pretium risus lorem urna eget porta. Duis curabitur metus, facilisi fames suspendisse diam est</p>
            </div>
            <div class="icon-item">
                <i class="fa fa-brain fa-3x"></i>
                <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Elit tincidunt etiam vivamus at pharetra lorem amet. Mollis pretium risus lorem urna eget porta. Duis curabitur metus, facilisi fames suspendisse diam est</p>
            </div>
            <div class="icon-item">
                <i class="fa fa-bicycle fa-3x"></i>
                <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Elit tincidunt etiam vivamus at pharetra lorem amet. Mollis pretium risus lorem urna eget porta. Duis curabitur metus, facilisi fames suspendisse diam est</p>
            </div>
        </div>
    </div>
</section>




<!-- Keitä olemme -->
<section id="who-are-we" class="my-5">
    <div class="container">
        <h2>Keitä olemme?</h2>
        <p>Olemme Slow run yhdistys, jonka tarkoituksena on parantaa ihmisten hyvinvointia, rentoutumista ja luoda tervettä yhteisöllisyyttä. Hidas juokseminen on askel kohti terveempää ja tasapainoisempaa elämää. Hitaasti juokseminen soveltuu lähes kaikille ja niin myös yhdistyksemme.</p>
    </div>
</section>




<!-- Miksi mukaan? -->
<section id="values-section" class="my-5">
    <div class="container">
        <div class="image-wrapper">
            <picture>
                <!-- For large screens -->
                <source media="(min-width: 769px)" srcset="images/valmiskuva.jpg">
                <!-- For medium screens -->
                <source media="(max-width: 768px)" srcset="images/valmiskuva.jpg">
                <!-- For small screens, fallback image -->
                <img src="images/small-image.png" alt="Values Image" class="responsive-image">
            </picture>
        </div>
    </div>
</section>


</body>

<!-- Contact Section with Map -->
<section id="contact">
    <div class="container">
        <h2 class="text-center mb-4">Ota yhteyttä</h2>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <form id="contactForm" class="contact-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nimesi.." required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Puhelinnumero.." required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Sähköposti.." required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="4" placeholder="Vapaa viesti meille.." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Lähetä</button>
                </form>
            </div>

            <!-- Map Section with Red Dot and Location Text -->
            <div class="col-md-6">
                <div id="map-container" style="position: relative;">
                    <!-- Background Map Image -->
                    <img src="images/karttajasijainti.png" alt="Slow Run Headquarters" style="width: 100%; height: 400px; border-radius: 8px;">

                    <!-- Red Dot Marker -->
                    <div class="map-marker" style="position: absolute; top: 50%; left: 27%; width: 15px; height: 15px; background-color: red; border-radius: 50%;"></div>

                    <!-- Location Text -->
                    <div class="map-label" style="position: absolute; top: 49%; left: 31%; color: black; font-weight: bold;">
                        Torintie 7 B, 20540 Turku
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



     <!------SCRIPT FOR THE CONTACT SECTION------->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                $.ajax({
                    type: 'POST',
                    url: 'submit_contact.php', // The PHP script that will handle the submission
                    data: $(this).serialize(), // Serialize the form data
                    success: function(response) {
                        // Show the success message in the alert div
                        $('#successMessage').text(response).fadeIn().delay(3000).fadeOut();
                        $('#contactForm')[0].reset(); // Reset the form fields
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors here
                        console.error(xhr.responseText); // Log the error response for debugging
                        alert('There was an error processing your request. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

</html>
