navbar = document.getElementsByClassName("navbar");

// for (i = 0; i < navbar[0].children.length; i++)
//     navbar[0].children[i].addEventListener('Click', function(event) {
//         console.log(event.target.innerText);
//     });


document.querySelectorAll('a').forEach(varName => {
    varName.onclick = function() {
        alert(this.innerHTML)
    }
});