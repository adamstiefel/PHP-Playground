
    function hello() {
        alert("Welcome to the website!")
    }


    let counter = 0
    function count() {
        
        counter++;
        document.getElementById("count").innerHTML = counter;
    }


    function hello2() {
        const hello2 = document.getElementById("hello2");
        if (hello2.innerHTML == "Hello!") {
            hello2.innerHTML = "Goodbye";
        }
         else {
            hello2.innerHTML = "Hello!";
         }
    }

   

    nameInput = document.querySelector("#Username");
    emailInput = document.querySelector("#Email");
    nameInput.required = true;
    emailInput.required = true;

   

    function displayOutput() {
        nameInput = document.querySelector("#Username");
        emailInput = document.querySelector("#email");

        document.querySelector("#displayOutput").innerHTML = "Hello, " + nameInput.value + "!";
        document.querySelector("#displayOutput2").innerHTML = "Your email is: " + emailInput.value;

        return false;

    }


    

    
    function changeColor() {
        document.querySelector("#h1Color").style.color = "blue";
    }

    function changeColor2() {
        document.querySelector("#h1Color").style.color = "red";
    }

    function changeColor3() {
        document.querySelector("#h1Color").style.color = "black";
    }

   function img2() {
       const img2 = document.querySelector("#selectImg");
       if(img2.src === "http://localhost:8888/adamgit.io/images/c3IrOeU%20-%20Imgur.jpg") {
              img2.src = "http://localhost:8888/adamgit.io/images/header.png";
         }
            else {
                img2.src = "images/c3IrOeU - Imgur.jpg";
   }
}




function addTask() {
    const taskInput = document.querySelector("#taskInput").value;
    
    const li = document.createElement("li");
    li.innerHTML = taskInput;

    document.querySelector("#taskList").append(li);

    document.querySelector("#taskInput").value = "";



    return false;
    
}

