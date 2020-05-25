<section id="commander" class="commander">
    <h2><span>Comment commander</span></h2>
    <div class="commander-etapes">
        <ul>
            <li class="slide-top-1"><span>1.</span></li>
            <li>Ajouter les articles désirés au panier.</li>
        </ul>
        <ul>
            <li class="slide-top-2"><span>2.</span></li>
            <li>Consulter votre liste d’achats en cliquant sur l’icône du
                panier et confirmer l’envoi du bon de commande.</li>
        </ul>
        <ul>
            <li class="slide-top-3"><span>3.</span></li>
            <li>Un de nos représentants vous contactera pour procéder
                au paiement par téléphone ou virement Interac.</li>
        </ul>
        <ul>
            <li class="slide-top-4"><span>4.</span></li>
            <li>La marchandise vous sera livrée à domicile dans les
                plus brefs délais.</li>
        </ul>

    </div>
</section>

<section id="livraison" class="livraison">
    <h2><span>Livraison</span></h2>
    <div class="livraison-container">
        <div class="livraison-texte">
            <p>Nous offrons la livraison dans un rayon de 15 km à partir de notre magasin à Bois-des-filion.
                Faites-vous partie du rayon admissible pour la livraison de vos achats? </p>
            <p>Découvrez-le ici en insérant votre code postal.</p>
            <form action="">
                <div class="groupe-champ">
                    <input type="text" id="codepostal" name="codepostal" placeholder="Votre code postal"></div>
                <input class="bouton-form" type="submit" onclick="alert('Vous êtes admissible pour la livraison!')" value="Vérifier">
            </form>
        </div>
        <div class="livraison-image">
            <img class="livraison-image swing-in-bottom-fwd" alt="Boîte de livraison" src="{{asset('../images/couches/boite-300.png')}}" srcset="{{asset('../images/couches/boite-300.png')}} 300w,
                        {{asset('../images/couches/boite-600.png')}} 600w,
                        {{asset('../images/couches/boite-900.png')}} 900w" sizes="(max-width: 1024px) 150px, (max-width: 1200px) 300px, (max-width: 1800px) 400px, 500px">
        </div>
    </div>

</section>