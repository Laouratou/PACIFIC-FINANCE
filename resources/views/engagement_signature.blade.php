@extends('layouts.app')
@include('partials.header')

<section class="about-style-two ">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box mr_110">
                        <div class="sec-title mb_20">
                            <h6 class="title-with-underscore">
                                Entreprises
                                <span class="underscore"></span>
                            </h6>
                        </div>
                        <div class="text-box mb_40">
                            <h2>Engagements par signature.</h2>
                        </div>
                        <p>La Tontine Laba est un système d'épargne collectif qui permet à ses membres de se regrouper pour épargner de manière solidaire. Chaque participant contribue à un fonds commun, et ces contributions sont redistribuées à tour de rôle, offrant ainsi un coup de pouce financier à chaque membre lorsqu'il en a le plus besoin.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box">
                        <div class="image-shape">
                            <figure class="image pt_80 d-none d-lg-block">
                                <img src="assets/images/resource/tontine-explication.jpg" alt="" style="width:400px;height:400px;object-fit:cover;border-radius: 50%;">
                            </figure>
                            <figure class="image pt_115 d-lg-none">
                                <img src="assets/images/resource/tontine-explication.jpg" alt="" class="img-fluid" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<br>
<br>

<!-- process-section -->
<section class="process-section centred ">
    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-3.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title mb_110 pt-5"> 
            <h2>POUR DEVENIR CLIENT PACIFIC FINANCE SA</h2>
        </div>
        <div class="inner-container">
            <div class="processing-block-one">
                <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                <div class="inner-box">
                    <span class="count-text">01 <br />Step</span>
                    <p>RCCM & IFU<br />pour les entreprises</p>
                </div>
            </div>
            <div class="processing-block-one">
                <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="inner-box">
                    <span class="count-text">02 <br />Step</span>
                    <p>03 Photos  <br />d’identité,</p>
                </div>
            </div>
            <div class="processing-block-one">
                <div class="inner-box">
                    <span class="count-text">03 <br />Step</span>
                    <p>Photocopie légalisée d’une carte d’identité officielle en cours de validité <br /></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-section end -->

</div>

<!-- requirements-section -->
<section class="requirements-section centred pt_80 pb_80">
    <div class="auto-container">
        <div class="sec-title mb_70">
            <h2>Avantages</h2>
        </div>
        <div class="row clearfix">
            <!-- Sécurité -->
            <div class="col-lg-4 col-md-6 col-sm-12 requirements-block">
                <div class="requirements-block-one">
                    <div class="inner-box">
                        <h4>Sécurité</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit velit nisl, quis suscipit nulla venenatis vel. Maecenas diam tellus, ultrices et metus hendrerit, condimentum dictum eros.</p>
                    </div>
                </div>
            </div>
            
            <!-- Possibilité de Crédit -->
            <div class="col-lg-4 col-md-6 col-sm-12 requirements-block">
                <div class="requirements-block-one">
                    <div class="inner-box">
                        <h4>Possibilité de Crédit</h4>
                        <p>Curabitur vitae neque eget odio elementum faucibus. In varius sed sem a ullamcorper. Donec quis pulvinar mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
            </div>
            
            <!-- gain de temps -->
            <div class="col-lg-4 col-md-6 col-sm-12 requirements-block">
                <div class="requirements-block-one">
                    <div class="inner-box">
                        <h4>Gain de temps</h4>
                        <p>Praesent consequat rutrum nunc, nec fermentum purus. Nulla facilisi. Integer auctor massa at metus gravida, a sollicitudin lorem tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- requirements-section end -->





<!-- subscribe-section -->
<section class="subscribe-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                <div class="text-box">
                    <h2>Nous contactez pour en savoir plus</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_40">
                    <form id="whatsapp-form">
                        <div class="form-group">
                            <button type="button" class="theme-btn btn-two" id="whatsapp-submit" style="width: auto;">
                                <span style="color: #25D366; margin-right: 8px;">
                                    <i class="fab fa-whatsapp"></i> 
                                </span>
                                Contactez-nous
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->

<script>
    document.getElementById('whatsapp-submit').addEventListener('click', function() {
        var phone = "22661838114"; // Numéro WhatsApp
        var message = "Bonjour, je souhaite être contacté via WhatsApp."; // Message prédéfini
        var whatsappUrl = "https://api.whatsapp.com/send?phone=" + phone + "&text=" + encodeURIComponent(message); // URL modifiée

        // Ouvre WhatsApp dans un nouvel onglet
        window.open(whatsappUrl, '_blank');
    });
</script>

<!-- faq-section -->
<section class="faq-section pt_80 pb_80">
    <div class="auto-container">
        <div class="sec-title centred mb_70">
            <h2>Questions réponses</h2>
        </div>
        <div class="row clearfix">
            <!-- Colonne FAQ à gauche -->
            <div class="col-lg-6 col-md-12 col-sm-12 accordion-column">
                <ul class="accordion-box">
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Quick Response</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Flexible Payment</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                     <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Flexible Payment</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                     <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Flexible Payment</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>What is the Duration</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Colonne Image à droite -->
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <figure class="image d-none d-lg-block">
                    <img src="assets/images/resource/tontine (2).jpg" alt="" style="width:500px;height:500px;object-fit:cover;border-radius: 50%;">
                </figure>
                <figure class="image pt_115 d-lg-none">
                    <img src="assets/images/resource/tontine (2).jpg" alt="" class="img-fluid" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->

 <!-- faq-form-section -->
<section class="faq-form-section pt-100 pb-80" style="background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <div class="auto-container">
        <!-- Titre de la section -->
        <div class="sec-title text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #007bff;">Contactez-nous</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="request_type" class="form-label">Vous souhaitez :</label>
                <select name="request_type" id="request_type" class="form-select custom-select" required>
                    <option value="obtenir_des_renseignements">Obtenir des renseignements</option>
                    <option value="ouvrir_compte_courant">Ouvrir un compte courant</option>
                    <option value="epargner">Épargner</option>
                    <option value="emprunter">Emprunter</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="client_type" class="form-label">Vous êtes :</label>
                <select name="client_type" id="client_type" class="form-select custom-select" required>
                    <option value="particulier_non_salarie">Particulier non salarié</option>
                    <option value="particulier_salarie">Particulier salarié</option>
                    <option value="entreprise">Entreprise</option>
                    <option value="association">Association</option>
                </select>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="product_interest" class="form-label">Quel produit vous intéresse ?</label>
                <select name="product_interest" id="product_interest" class="form-select custom-select" required>
                    <option value="tontine">Tontine</option>
                    <option value="compte_epargne">Compte d'épargne</option>
                    <option value="engagement_signature">Engagement par signature</option>
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="nationality" class="form-label">Votre pays de nationalité :</label>
                <select name="nationality" id="nationality" class="form-select custom-select" required>
                    <option value="burkina_faso">Burkina Faso</option>
                    <option value="autre">Autre nationalité</option>
                </select>
            </div>
        </div>

        <!-- Section Informations sur le demandeur -->
        <div class="sec-title mt-70 text-center">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #007bff;">Informations sur le demandeur</h2>
        </div>
        <div class="form-inner">
            <form method="post" action="faq.html" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="Votre nom" class="form-control" required style="border-radius: 8px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Votre email" class="form-control" required style="border-radius: 8px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <input type="text" name="phone" placeholder="Numéro de téléphone" class="form-control" required style="border-radius: 8px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="city" placeholder="Ville" class="form-control" required style="border-radius: 8px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="neighborhood" placeholder="Quartier" class="form-control" required style="border-radius: 8px;">
                    </div>

                    <!-- Zone de dépôt pour document d'identité -->
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="identity_document" class="form-label">Document d'identité :</label>
                        <div class="drop-area" style="border: 2px dashed #007bff; padding: 20px; text-align: center; border-radius: 10px; background-color: #e9f4ff;">
                            <span class="drop-instructions" style="color: #333; font-weight: 500;"></span>
                            <button type="button" class="button select-files" style="border-radius: 5px; background-color: #007bff; color: white; border: none; padding: 10px 20px; font-size: 1rem; transition: background-color 0.3s;">Déposer le fichier ici</button>
                            <input type="file" name="identity_document[]" id="identity_document" multiple style="display:none;" accept="image/*">
                        </div>
                    </div>

                    <!-- Zone de dépôt pour autres documents justificatifs -->
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="supporting_document" class="form-label">Autres documents justificatifs :</label>
                        <div class="drop-area" style="border: 2px dashed #007bff; padding: 20px; text-align: center; border-radius: 10px; background-color: #e9f4ff;">
                            <span class="drop-instructions" style="color: #333; font-weight: 500;"></span>
                            <button type="button" class="button select-files" style="border-radius: 5px; background-color: #007bff; color: white; border: none; padding: 10px 20px; font-size: 1rem; transition: background-color 0.3s;">Déposer les fichiers ici</button>
                            <input type="file" name="supporting_document[]" id="supporting_document" multiple style="display:none;" accept="image/*">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center">
                        <button type="submit" class="btn btn-primary" style="background-color: #28a745; color: white; border-radius: 8px; padding: 15px 30px; font-size: 1.2rem; transition: background-color 0.3s;">Envoyer le message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
    /* Styles personnalisés pour les dropdowns */
    .form-select.custom-select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f8f9fa;
        font-size: 1rem;
        transition: border-color 0.3s, background-color 0.3s;
    }

    .form-select.custom-select:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        background-color: #fff; /* Changer la couleur de fond au focus */
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
    }

    .drop-area.active {
        border-color: #0056b3; /* Change la couleur de la bordure au survol */
        background-color: #e0f7fa; /* Change la couleur de fond au survol */
    }

    .drop-area {
        transition: background-color 0.3s;
    }

    .message-btn button:hover {
        background-color: #218838; /* Couleur plus foncée au survol */
    }

    /* Styles pour les boutons */
    .button {
        cursor: pointer;
    }
</style>

<script>
    // Script pour gérer le drag and drop et la sélection de fichiers
    document.querySelectorAll('.drop-area').forEach(dropArea => {
        const input = dropArea.querySelector('input[type="file"]');

        // Gestion du drag and drop
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('active');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('active');
        });

        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('active');
            const files = e.dataTransfer.files;
            handleFiles(files);
        });

        // Gestion de la sélection de fichiers via le bouton
        dropArea.querySelector('.select-files').addEventListener('click', () => {
            input.click();
        });

        input.addEventListener('change', (e) => {
            handleFiles(input.files);
        });
    });

    function handleFiles(files) {
        // Vous pouvez gérer les fichiers ici (par exemple, les afficher ou les uploader)
        console.log(files);
    }
</script>


        <!-- faq-form-section end -->




@include('partials.footer')
