<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website with a contact Form 01</title>
    <link rel="stylesheet" href="main.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="{{ mix('css/app3.css') }}">
    

</head>


<body>
    
    <div class="content">

        <h1 class="logo">CONTAC <span>TANOS<span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contactanos</h3>
                <form action="">
                    <p>
                        <label>Nombres Completos</label>
                        <input type="text" name="fullname">
                    </p>
                    <p>
                        <label>Email </label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Numero de Celular</label>
                        <input type="tel" name="phone">
                    </p>
                    <p>
                        <label>Asusnto</label>
                        <input type="text" name="affair">
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Mas Informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Latacunga , Belisario</li>
                    <li><i class="fas fa-phone"></i> (09) 98463149</li>
                    <li><i class="fas fa-envelope-open-text"></i> gamerdfest@websitr,comcom</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>GmaerFest.com</p>
            </div>
        </div>

    </div>

</body>
</html>