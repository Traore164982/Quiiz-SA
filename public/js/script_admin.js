const avatar = document.getElementById('avatar');
const cree_rep = document.getElementById('cree_rep');
const selected = document.getElementById('selected');
const ajout = document.getElementById('ajout');
let i = 1;
var tra = [];
const left = document.getElementById('left');
const right = document.getElementById('right');
const nombre = document.getElementById('nombre');

function create() {
    var div = document.createElement('div');
    var label = document.createElement('label');
    label.className = 'lab';
    var inputText = document.createElement('input');
    inputText.setAttribute('name', 'Text[]')
    var inputCheck = document.createElement('input');
    var img = document.createElement('img');

    if (selected.value == "Checkbox") {
        label.innerText = `Réponse ${i}`;
        inputText.setAttribute('type', 'text');
        inputText.setAttribute('id', `rep${i}`);
        inputCheck.setAttribute('type', 'checkbox');
        inputCheck.setAttribute('name', 'checkbox[]');
        inputCheck.setAttribute('id', 'check');
        img.setAttribute('src', 'img/Icônes/ic-supprimer.png');
        div.appendChild(label);
        div.appendChild(inputText);
        div.appendChild(inputCheck);
        div.appendChild(img);
        ajout.appendChild(div);
    }
    if (selected.value == "Radio") {
        label.innerText = `Réponse ${i}`;
        inputText.setAttribute('type', 'text');
        inputText.setAttribute('id', `rep.${i}`);
        inputCheck.setAttribute('id', 'check');
        inputCheck.setAttribute('type', 'radio');
        inputCheck.setAttribute('name', 'radio[]');
        inputCheck.setAttribute('name', 'select');
        img.setAttribute('src', 'img/Icônes/ic-supprimer.png');
        div.appendChild(label);
        div.appendChild(inputText);
        div.appendChild(inputCheck);
        div.appendChild(img);
        ajout.appendChild(div);
    }
    if (selected.value == "Text") {
        label.innerText = `Réponse ${i}`;
        inputText.setAttribute('type', 'text');
        inputText.setAttribute('id', `rep.${i}`);
        div.appendChild(label);
        div.appendChild(inputText);
        ajout.appendChild(div);
        cree_rep.style.visibility = "hidden";
    }
    img.addEventListener('click', () => {
        img.parentElement.remove();
        recharge();
    });

    i++;
}

cree_rep.addEventListener('click', () => {
    create();
    var list = ajout.querySelectorAll('input');
    tra = list;
});



selected.addEventListener('change', () => {
    selected.setAttribute('style', 'border: 4px solid green');
    cree_rep.style.visibility = "visible";

});


function change() {
    ajout.innerHTML = "";
    i = 1;
}
function leftt() {

    if (nombre.value > 1) {
        nombre.value--;
        nombre.innerHTML = nombre.value;
    }
}
function rightt() {
    if (nombre.value >= 1) {
        nombre.value++;
        nombre.innerHTML = nombre.value;
    }

}
function changeNum() {
    var test = parseInt(nombre.value);
    if (nombre.value == "") {
        var small = document.getElementById('Er')
        small.innerHTML = "Veuillez remplir le champ sinon 1";
        small.style.visibility = "visible";
        small.style.fontWeight = "bold";
        nombre.value = 1;
    }
    if (nombre.value < 1) {
        var small = document.getElementById('Er')
        small.innerHTML = `${nombre.value} Incorrect Just Positif`;
        small.style.visibility = "visible";
        nombre.value = 1;
    } if (isNaN(nombre.value)) {
        var small = document.getElementById('Er')
        small.innerHTML = "Veuillez saisir un nombre";
        small.style.visibility = "visible";
        nombre.value = 1;
    }

}
function recharge() {
    var tra = document.querySelectorAll('.lab');
    console.log(tra);
    i = 1;
    tra.forEach(element => {
        element.innerText = `Réponse ${i++}`;
    });
}