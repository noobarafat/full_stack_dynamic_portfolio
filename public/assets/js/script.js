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


document.querySelectorAll('button').forEach(varName => {
    varName.onclick = function() {
        document.querySelector('.changed').innerHTML = `
                <p> Inner HTML </p>

                `;

        img = document.querySelector("img");
        img.src = "https://www.famousbirthdays.com/headshots/tareq-salameh-1.jpg";


    };
});