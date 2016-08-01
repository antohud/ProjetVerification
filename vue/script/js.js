function supprimerProjet() {
	if (confirm('Cette action est définitive, êtes-vous sûr de vouloir continuer?')) {
		window.location.href = "../controleur/projet/supprimerProjet.php";
	}
}

function showProjet(id) {
	if (id == "") {
		document.getElementById("info_projet").innerHTML = "";
		return;
	}
	else {
		xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("info_projet").innerHTML = xmlhttp.responseText;
            }
        };
        
        xmlhttp.open("GET", "information.php?id="+id, true);
        xmlhttp.send();
	}
}

function supprimerUser() {
  if (confirm('Cette action est définitive, êtes-vous sûr de vouloir continuer?')) {
    $('form').submit();
  }
}

function afficher_premier(id) {
	$('.premier-projet').addClass('active');
	showProjet(id);
}

$('.tabular.menu .item').tab();

menu = {};

// ready event
menu.ready = function() {

  // selector cache
  var
    $menuItem = $('.menu a.item, .menu .link.item'),
    // alias
    handler = {
      activate: function() {
        $(this)
        .addClass('active')
        .closest('.ui.menu')
        .find('.item')
        .not($(this))
        .removeClass('active');
      }
    }
  ;

  $menuItem
    .on('click', handler.activate)
  ;

};


// attach ready event
$(document).ready(menu.ready);

function test_modal() {
    $('.ui.basic.modal')
  .modal('setting', {
    closable  : false,
    onDeny    : function(){
    	return;
    },
    onApprove : function() {
      window.location.href = "../controleur/projet/supprimerProjet.php";
    }
  }).modal('show');
}

function showModal() {
	$('.ui.modal')
  .modal('show')
;
}

