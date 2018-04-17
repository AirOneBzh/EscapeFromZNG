
function MotADeviner(evt)
{


  var cherche=document.getElementById("mot").value;
  var res="lemotlepluschiantdelunivers";

  var code_user=evt.charCode;
  var lettre_user=String.fromCharCode(code_user);

  evt.preventDefault();
  est_Majuscule(evt,code_user);

  if(res[cherche.length]==lettre_user)
  {
    document.getElementById("mot").value=cherche+lettre_user;
  }

  if(res==document.getElementById("mot").value)
  {
    alert("BRAVO !!");
  }
}

////////////////////////////////////////////////////////////////////////////////
var inputMot = document.getElementById('mot');
inputMot.addEventListener('keypress', MotADeviner, false);
////////////////////////////////////////////////////////////////////////////////

function est_Majuscule(mot,lettre)
{
  if (lettre != 0) {
    if (lettre < 97 || lettre > 122) {

      displayWarning(
        "S'il vous plaît veuillez utiliser des miniscules seulement."
          + "\n" + "caractère saisie : " + lettre + "\n"
      );
    }
  }
}


var warningTimeout;
var warningBox= document.createElement("div");
warningBox.className = "warning";

function displayWarning(msg) {
  warningBox.innerHTML = msg;
  inputMot.parentNode.insertBefore(warningBox, inputMot);

  if (warningBox) {
    window.clearTimeout(warningTimeout);
  }

  warningTimeout = window.setTimeout(function() {
    warningBox.parentNode.removeChild(warningBox);
    warningTimeout = -1;
  }, 2000);
}