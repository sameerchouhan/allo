@extends('layouts.application.template')

@section('title', 'Page de contact')

@section('content')

<script src='https://www.google.com/recaptcha/api.js'></script>

<main class="site-main contact-us">
    <div class="container">
        <ol class="breadcrumb-page">
            <li><a href="#">Home </a></li>
            <li class="active"><a href="#">Contact Us</a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!isset($_GET['ref']) || isset($_GET['ref']) && $_GET['ref'] != 1){ ?>
            <p>Aucun appareil ne correspond à votre recherche.<br><b>Vérifiez les références de votre appareil (marque, modèle)</b><br>Si le problème persiste, vous pouvez nous contacter en remplissant le questionnaire ci-dessous :</p>
            <?php } ?>
            <p>Vous ne trouvez pas votre pièces ou la référence de votre appareil ?
            <p style="color:#486d97">&#x279C; Appelez nous avec les références de votre appareil sous les yeux
                <br>Notre équipe de techniciens va vous assister dans vos recherches :
                <br>
                <div class="phone-icon" style="font-size: 15px;font-weight: bold">Besoin d'aide :
                    <i class="fa fa-phone" aria-hidden="true"></i> 0 899 253 057 (Service Commercial 0,80€/min)
                </div>
                du lundi au vendredi : de 8h30 à 20h
            <p>
                <br>Allo Éléctromenager s'engage a vous aider, vous pouvez nous contacter en remplissant le questionnaire ci-dessous :
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-contact" action="" method="POST" novalidate>
                <div class="col-md-5">
                    <div class="contact-info">
                        <h5 class="title-contact">Leave a Message</h5>
                        <p class="form-row form-row-wide">
                            <label>La référence de votre appareil<span class="required">*</span></label>
                            <input type="text" value="" name="reference" onkeyup="validateContactField(this)" class="input-text" required="required" />
                        </p>
                        <p class="form-row form-row-wide">
                            <label>La marque de votre appareil<span class="required">*</span></label>
                            <input type="text" value="" name="brand" onkeyup="validateContactField(this)" required class="input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Le type de votre appareil<span class="required">*</span></label>
                            <input type="text" value="" name="type" onkeyup="validateContactField(this)" required class="input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Votre email<span class="required">*</span></label>
                            <input type="email" value="" name="email" onkeyup="validateContactField(this)" required class="input-text">
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Votre Téléphone<span class="required">*</span></label>
                            <input type="text" value="" name="phone" onkeyup="validateContactField(this)" required class="input-text">
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="form-row form-row-wide form-text">
                        <label>Votre message<span class="required"></span></label>
                        <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message" onkeyup="validateContactField(this)" required/></textarea>
                    </p>
                    <p class="form-row form-row-wide">
                        <p class="error">Veuillez cocher le captcha</p>
                        <div class="g-recaptcha" data-sitekey="6Lcg7RgUAAAAAIXNTiNB6acIXLELw_4uX1tNd1h0"></div>
                    </p>
                    {{ csrf_field() }}
                    <p class="form-row">
                        <button class="button-submit" style="margin-top: 42px;">Envoyer</button>
                    </p>
                </div>
            </form>
            <div class="col-md-3 contact-detail">
                <h5 class="title-contact">Contact Detail</h5>
                <div class="contacts-info ">
                    <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <h4 class="title-info">Email</h4>
                    <div class="info-detail"> Support1@allo.com</div>
                </div>
                <div class="contacts-info ">
                    <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <h4 class="title-info">Phone</h4>
                    <div class="info-detail">0123-465-789-111</div>
                </div>
                <div class="contacts-info ">
                    <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <h4 class="title-info">Mail Office</h4>
                    <div class="info-detail">Sed ut perspiciatis unde omnis Street Name</div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection