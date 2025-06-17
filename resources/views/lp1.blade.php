<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <style>
#parent{
    display:flex;
    gap:20px;
    width: 100%;
    flex-direction:row;
    height:100%;
    width: 100%;
    
}

        #first{
            background: white;
            padding:20px;
            text-align:center;
            border: 1px solid red;
            border-radius: 15px;
        cursor:pointer;

            
        }

       #first:hover{
            background-color:gray;
        }

        


    </style>
</head>
<body>
    <div id="parent">

    <div id="first" class="name">
        <H2>Daami Jota</H2>
        <img src="https://t4.ftcdn.net/jpg/04/42/54/79/360_F_442547913_tWYOcGkO06Vbo30KOvrOPte5JqDHVWmR.jpg" alt="">
        <p>Ei jotat dam onek. Kinte gele onk tk lagbe. so tk niye kinte jaba. get it? R tk na thakle kichu korar nai, goriv bole kotha</p>
    </div>
    <div id="first" class="name">
        <H2>Daami Jota</H2>
        <img src="https://t4.ftcdn.net/jpg/04/42/54/79/360_F_442547913_tWYOcGkO06Vbo30KOvrOPte5JqDHVWmR.jpg" alt="">
        <p>Ei jotat dam onek. Kinte gele onk tk lagbe. so tk niye kinte jaba. get it? R tk na thakle kichu korar nai, goriv bole kotha</p>
    </div>
    <div id="first" class="name">
        <H2>Daami Jota</H2>
        <img src="https://t4.ftcdn.net/jpg/04/42/54/79/360_F_442547913_tWYOcGkO06Vbo30KOvrOPte5JqDHVWmR.jpg" alt="">
        <p>Ei jotat dam onek. Kinte gele onk tk lagbe. so tk niye kinte jaba. get it? R tk na thakle kichu korar nai, goriv bole kotha</p>
    </div>
    <div id="first" class="name">
        <H2>Daami Jota</H2>
        <img src="https://t4.ftcdn.net/jpg/04/42/54/79/360_F_442547913_tWYOcGkO06Vbo30KOvrOPte5JqDHVWmR.jpg" alt="">
        <p>Ei jotat dam onek. Kinte gele onk tk lagbe. so tk niye kinte jaba. get it? R tk na thakle kichu korar nai, goriv bole kotha</p>
    </div>
    </div>

    <script>
        document.querySelectorAll(".name").forEach(varName => {
    varName.onclick = function() {
        alert(this.innerHTML)
    }
});
    </script>
    
</body>
</html>