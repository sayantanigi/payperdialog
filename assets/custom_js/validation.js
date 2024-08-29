
var geocodingClient = mapboxSdk({ accessToken: 'pk.eyJ1IjoibWVkaWFhZGdyb3VwIiwiYSI6ImNrdDV4bTBsaDBjeGQydm5yYTA2Y3N2dGgifQ.NlUz5RoCsa4hZvVwY3GxCg' });
function autocompleteSuggestionMapBoxAPI(inputParams, callback) {
    geocodingClient.geocoding.forwardGeocode({
        query: inputParams,
        // countries: ['In'],
        autocomplete: true,
        limit: 5,
    })
        .send()
        .then(response => {
            const match = response.body;
            callback(match);
        });
}

function autocompleteInputBox(inp) {
    var currentFocus;
    inp.addEventListener("input", function (e) {
        var a, b, i, val = this.value;
        closeAllLists();
        if (!val) {
            return false;
        }
        currentFocus = -1;
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        this.parentNode.appendChild(a);

        // suggestion list MapBox api called with callback
        autocompleteSuggestionMapBoxAPI($('#location').val(), function (results) {
            results.features.forEach(function (key) {
                b = document.createElement("DIV");
                b.innerHTML = "<strong>" + key.place_name.substr(0, val.length) + "</strong>";
                b.innerHTML += key.place_name.substr(val.length);
                b.innerHTML += "<input type='hidden' data-lat='" + key.geometry.coordinates[1] + "' data-lng='" + key.geometry.coordinates[0] + "'  value='" + key.place_name + "'>";
                b.addEventListener("click", function (e) {
                    let lat = $(this).find('input').attr('data-lat');
                    $('#search_lat').val(lat);
                    let long = $(this).find('input').attr('data-lng');
                    $('#search_lon').val(long);
                    inp.value = $(this).find('input').val();
                    $(inp).attr('data-lat', lat);
                    $(inp).attr('data-lng', long);
                    closeAllLists();
                });
                a.appendChild(b);
            });
        })
    });

    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function (e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            currentFocus++;
            addActive(x);
        } else if (e.keyCode == 38) { //up
            currentFocus--;
            addActive(x);
        } else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) {
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }

    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}

autocompleteInputBox(document.getElementById("location"));
function reset_location() {
    $('#location').val('');
}

function only_number(event) {
    var x = event.which || event.keyCode;
    if ((x >= 48) && (x <= 57) || x == 8 | x == 9 || x == 13) {
        return;
    } else {
        event.preventDefault();
    }
}

function only_alphabets(event) {
    var x = event.which || event.keyCode;
    if ((x >= 65) && (x <= 90) || (x >= 97) && (x <= 122) || (x == 32)) {
        return;
    } else {
        event.preventDefault();
    }
}

function only_specialAlphabets(event) {
    var x = event.which || event.keyCode;
    if ((x >= 65) && (x <= 90) || (x >= 97) && (x <= 122) || (x == 32) || (x == 45) || (x == 39)) {
        return;
    } else {
        event.preventDefault();
    }
}

function get_subcategory(val) {
    var base_url = $("#base_url").val();
    var id = val;
    $.ajax({
        type: "post",
        cache: false,
        url: base_url + "Welcome/get_subcategory",
        data: {
            id: id
        },
        beforeSend: function () { },
        success: function (returndata) {
            $('#subcategory_id').html(returndata);
        }
    });
}

function change_password() {
    var base_url = $("#base_url").val();
    var cur_password = $('#cur-password').val();
    if (cur_password == "") {
        $("#err_current").fadeIn().html("Required").css('color', 'red');
        setTimeout(function () { $("#err_current").html("&nbsp;"); }, 3000);
        $("#cur-password").focus();
        return false;
    }
    var new_password = $('#new-password').val();
    if (new_password == '') {
        $("#err_new").fadeIn().html("Required").css('color', 'red');;
        setTimeout(function () { $("#err_new").html("&nbsp;"); }, 5000)
        $("#new-password").focus();
        return false;
    }
    else if (new_password.length < 6) {
        $("#err_new").fadeIn().html("please enter at least 6 character").css('color', 'red');;
        setTimeout(function () { $("#err_new").html("&nbsp;"); }, 5000)
        $("#new-password").focus();
        return false;
    }
    var confirm_password = $('#conf-password').val();
    if (confirm_password == '') {
        $("#err_confirm").fadeIn().html("Required").css('color', 'red');;
        setTimeout(function () { $("#err_confirm").html("&nbsp;"); }, 5000)
        $("#conf-password").focus();
        return false;
    }
    if (new_password != confirm_password) {
        $('#matchPass1').html('password does not match').css('color', 'red');
        return null
    }

    $.ajax({
        url: base_url + 'user/dashboard/update_password',
        type: 'POST',
        data: { cur_password: cur_password, new_password: new_password, confirm_password: confirm_password },
        success: function (data) {
            if (data == 1) {
                location.reload();
            } else {
                $("#err_current").fadeIn().html("current password doest not match").css('color', 'red');
                setTimeout(function () { $("#err_current").html("&nbsp;"); }, 3000);
                $("#cur-password").focus();
                return false;
            }
        }
    });
}