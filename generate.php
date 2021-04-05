<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/css/form.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Information sur le client</h3>
                <div class="form-group">
                    <label class="control-label">Noms</label>
                    <input  maxlength="100" type="text" required="required" class="form-control name_client" placeholder="Nom complet"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="100" type="text" required="required" class="form-control email_client" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input maxlength="100" type="text" required="required" class="form-control adresse_client" placeholder="Adresse" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right btn_client" type="button" >Suivant</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Commandes</h3>
                <div class="form-group">
                    <label class="control-label">Nom du produit</label>
                    <input maxlength="200" type="text" required="required" class="form-control name_produit"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Prix du produit</label>
                    <input maxlength="200" type="text" required="required" class="form-control prix_produit"   />
                </div>
                <div class="form-group">
                    <label class="control-label">Qté du produit</label>
                    <input maxlength="200" type="text" required="required" class="form-control qte_produit"  />
                </div>
                <button class="btn btn-primary   btn-lg pull-right mx-4 add_product"   >Ajouter un produit</button>
                <button class="btn btn-primary nextBtn btn-lg pull-right btn_produit" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <?php  include('facture.php');?>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
</form>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="assets/js/form.js"></script>
</body>
</html>