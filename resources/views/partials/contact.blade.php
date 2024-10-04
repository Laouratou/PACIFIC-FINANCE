<section class="faq-form-section pt-100 pb-80" style="background-color: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <div class="auto-container">
        <!-- Titre de la section -->
        <div class="sec-title text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #007bff;">Contactez-nous</h2>
        </div>



        <div class="form-inner">
            <form id="contactForm" method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                @csrf
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
                <div class="row clearfix">
               {{-- <h2 style=" font-weight: bold; color: #007bff;">Informations sur le demandeur</h2> --}}
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
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="identity_document" class="form-label">Document d'identité :</label>
                        <div class="drop-area" style="border: 2px dashed #007bff; padding: 20px; text-align: center; border-radius: 10px; background-color: #e9f4ff;">
                            <button type="button" class="button select-files" style="border-radius: 5px; background-color: #007bff; color: white; border: none; padding: 10px 20px; font-size: 1rem;">Déposer le fichier ici</button>
                            <input type="file" name="identity_document" id="identity_document" style="display:none;" accept="image/*" required>
                            <div class="file-name" id="identityFileName" style="margin-top: 10px; color: #333;"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label for="supporting_document" class="form-label">Autres documents justificatifs :</label>
                        <div class="drop-area" style="border: 2px dashed #007bff; padding: 20px; text-align: center; border-radius: 10px; background-color: #e9f4ff;">
                            <button type="button" class="button select-files" style="border-radius: 5px; background-color: #007bff; color: white; border: none; padding: 10px 20px; font-size: 1rem;">Déposer le fichier ici</button>
                            <input type="file" name="supporting_document" id="supporting_document" style="display:none;" accept="image/*">
                            <div class="file-name" id="supportingFileName" style="margin-top: 10px; color: #333;"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary" style="border-radius: 8px;">Soumettre ma demande</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<br>
<br>