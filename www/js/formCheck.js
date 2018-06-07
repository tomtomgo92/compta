console.log('here');

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMontant(form)
{
    var montant = /^([0-9]+)$/;
    if(montant.test(champ.value)){
        form.submit();
    }else{
        surligne()
    }
}


function verifForm(form)
{
   var pseudoOk = verifPseudo(form.pseudo);
   var mailOk = verifMail(form.email);
   
   if(pseudoOk && mailOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}