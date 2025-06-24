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


// document.querySelectorAll('button').forEach(varName => {
//     varName.onclick = function() {
//         document.querySelector('.changed').innerHTML = `
//                 <p> Inner HTML </p>

//                 `;

//         img = document.querySelector("img");
//         img.src = "https://hips.hearstapps.com/hmg-prod/images/cristiano-ronaldo-of-portugal-during-the-uefa-nations-news-photo-1748359673.pjpeg?crop=0.610xw:0.917xh;0.317xw,0.0829xh&resize=640:*";


//     };
// });