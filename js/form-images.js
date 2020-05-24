// ----- ADMIN - PREVIEW IMAGES FORM ----- //

// Code inspiré de @GuilPejon
// Lien: https://stackoverflow.com/questions/39439760/how-to-preview-multiple-images-before-upload

$(function () {
    // Fonction pour afficher plusieurs fichiers d'images
    var imagesPreview = function (input, afficherImages) {

        if (input.files) {
            var nbImages = input.files.length;

            for (i = 0; i < nbImages; i++) {
                var reader = new FileReader();

                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(afficherImages);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    // Utilisation fonction dans div vide
    $('#ajouter-images').on('change', function () {
        imagesPreview(this, 'div.liste-images');
    });

});