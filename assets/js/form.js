$(document).ready(function () {
var client={};
var produit=[];

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $(".btn_client").click(function (e) { 
        e.preventDefault();
        client={
            "nom":$(".name_client").val(),
            "email":$(".email_client").val(),
            "adresse":$(".adresse_client").val(),
        }

    });

    $(".btn_produit").click(function (e) { 
        e.preventDefault();
        console.log("client ", client);
console.log("valeur ", $(".f_name_client").val());
        $(".f_name_client").val(client["nom"]);
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

$(".add_product").click(function (e) { 
    e.preventDefault();
    console.log("add data");
});