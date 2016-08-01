/**
 * Created by ahudon on 2016-06-27.
 */

function pseudoDejaUtilise() {
    var pseudo = $("#pseudo").val();
    var icon = $("#validPseudo");
    if (typeof pseudo == "undefined" || pseudo == "")
    {
        icon.removeClass();
    }
    else {
        $.ajax({
            url: "http://localhost/verif/controleur/inscription/verifPseudo.php",
            type: "get",
            data: "pseudo=" + pseudo,
            dataType: "text",
            success: function (response, status, http) {
                icon.removeClass();
                if (response == "true") {
                    icon.addClass("green large check circle icon");
                }
                else if (response == "false") {
                    icon.addClass("red large remove circle icon");
                }
            },
            error: function (http, status, error) {
                icon.removeClass();
            }
        })
    }

}

$('.ui.form')
    .form({
        fields: {
            pseudo: {
                identifier: 'pseudo',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Vous devez entrer un pseudo'
                    },
                    {
                        type   : 'regExp[/^[a-z]+$/i]',
                        prompt : 'Le pseudo ne doit contenir que des lettres'
                    }
                ]
            },
            pass: {
                identifier: 'pass',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Vous devez entrer un mot de passe'
                    }
                ]
            },
            pass2: {
                identifier: 'pass2',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Vous devez confirmer votre mot de passe'
                    },
                    {
                        type: 'match[pass]',
                        prompt: 'Les deux mots de passe ne correspondent pas'
                    }
                ]
            }
        }
    })
;