document.querySelector(".show_all").addEventListener("click", () => {

    fetch(`http://192.168.33.10/api/students`)
    .then((response)=>{
        response.json()
        .then((data)=>{
          
            document.querySelector(".show_all_students").innerHTML = '';
             // Création de la <table> en HTML
            let tableElement = document.createElement("table");
            tableElement.classList.add("table");
            document.querySelector(".show_all_students").appendChild(tableElement);
            // Création de notre <thead> en HTML
            let theadElement = document.createElement("thead");
            tableElement.appendChild(theadElement);
             // Création de notre premier <tr> en HTML
            let trElement1 = document.createElement("tr");
            theadElement.appendChild(trElement1);
            // Création de nos <th> en HTML
            let thElement1 = document.createElement("th");
            let thElement2 = document.createElement("th");
            let thElement3 = document.createElement("th");
            let thElement4 = document.createElement("th");
            let thElement5 = document.createElement("th");
             // Insertion de données dans nos <th>
            thElement1.innerHTML = "Prénom";
            thElement2.innerHTML = "Nom";
            thElement3.innerHTML = "Age";
            thElement4.innerHTML = "Telephone";
            thElement5.innerHTML = "Adresse Mail";
            // 
            trElement1.appendChild(thElement1);
            trElement1.appendChild(thElement2);
            trElement1.appendChild(thElement3);
            trElement1.appendChild(thElement4);
            trElement1.appendChild(thElement5);
            // Création de notre <tbody> et ajout à notre <table>
            let tbodyElement = document.createElement("tbody");
            tableElement.appendChild(tbodyElement);
            data.description.forEach(element => {
            // Création de notre <tbody> et ajout à notre <table>
            let tbodyElement = document.createElement("tbody");
            tableElement.appendChild(tbodyElement);
             // Création de notre second <tr> et ajout à notre <tbody>
            let trElement2 = document.createElement("tr");
            tbodyElement.appendChild(trElement2);
             // Création de nos <td> en HTML
             let tdElement1 = document.createElement("td");
             let tdElement2 = document.createElement("td");
             let tdElement3 = document.createElement("td");
             let tdElement4 = document.createElement("td");
             let tdElement5 = document.createElement("td");
              // Insertion de données dans nos <td>
            tdElement1.innerHTML = element.firstname;
            tdElement2.innerHTML =element.lastname ;
            tdElement3.innerHTML =element.age;
            tdElement4.innerHTML = "0" + element.phone_number ;
            tdElement5.innerHTML =element.email;
            trElement2.appendChild(tdElement1);
            trElement2.appendChild(tdElement2);
            trElement2.appendChild(tdElement3);
            trElement2.appendChild(tdElement4);
            trElement2.appendChild(tdElement5);
          })
            
        });
    });
});

document.querySelector(".student_detail").addEventListener("click", () => {

    let student_id = document.querySelector("#student_id").value;
    fetch(`http://192.168.33.10/api/students/${student_id}`)
    .then((response)=>{
        response.json()
        .then((data)=>{
           
            document.querySelector("#content_show_student").innerHTML = '';
             // Création de la <table> en HTML
            let tableElement = document.createElement("table");
            tableElement.classList.add("table");
            document.querySelector("#content_show_student").appendChild(tableElement);
            // Création de notre <thead> en HTML
            let theadElement = document.createElement("thead");
            tableElement.appendChild(theadElement);
             // Création de notre premier <tr> en HTML
            let trElement1 = document.createElement("tr");
            theadElement.appendChild(trElement1);
            // Création de nos <th> en HTML
            let thElement1 = document.createElement("th");
            let thElement2 = document.createElement("th");
            let thElement3 = document.createElement("th");
            let thElement4 = document.createElement("th");
            let thElement5 = document.createElement("th");
             // Insertion de données dans nos <th>
            thElement1.innerHTML = "Prénom";
            thElement2.innerHTML = "Nom";
            thElement3.innerHTML = "Age";
            thElement4.innerHTML = "Telephone";
            thElement5.innerHTML = "Adresse Mail";
            // 
            trElement1.appendChild(thElement1);
            trElement1.appendChild(thElement2);
            trElement1.appendChild(thElement3);
            trElement1.appendChild(thElement4);
            trElement1.appendChild(thElement5);
            // Création de notre <tbody> et ajout à notre <table>
            let tbodyElement = document.createElement("tbody");
            tableElement.appendChild(tbodyElement);
             // Création de notre second <tr> et ajout à notre <tbody>
            let trElement2 = document.createElement("tr");
            tbodyElement.appendChild(trElement2);
             // Création de nos <td> en HTML
             let tdElement1 = document.createElement("td");
             let tdElement2 = document.createElement("td");
             let tdElement3 = document.createElement("td");
             let tdElement4 = document.createElement("td");
             let tdElement5 = document.createElement("td");
              // Insertion de données dans nos <td>
            tdElement1.innerHTML =  data.description[0].firstname;
            tdElement2.innerHTML = data.description[0].lastname ;
            tdElement3.innerHTML = data.description[0].age;
            tdElement4.innerHTML =data.description[0].phone_number ;
            tdElement5.innerHTML = data.description[0].email;
            trElement2.appendChild(tdElement1);
            trElement2.appendChild(tdElement2);
            trElement2.appendChild(tdElement3);
            trElement2.appendChild(tdElement4);
            trElement2.appendChild(tdElement5);

        })
    })
});

document.querySelector(".student_update").addEventListener("click", () => {

    let student_id = document.querySelector("#student_detail").value;
    fetch(`http://192.168.33.10/api/students/${student_id}`)
    .then((response)=>{
        response.json()
        .then((data)=>{
           
            document.querySelector("#content_show_student").innerHTML = '';
             // Création du form en HTML
            let formElement = document.createElement("form");
            formElement.classList.add("form");
            formElement.setAttribute("action", `http://192.168.33.10/api/students/${student_id}` );
            formElement.setAttribute("method", "put");
            document.querySelector(".student_update_form").appendChild(formElement);
            // création de l'input firstname
            let firstInput=document.createElement("input");
            firstInput.setAttribute("type", "text");
            firstInput.setAttribute("value", data.description[0].firstname);
            firstInput.setAttribute("name", "firstname");
            formElement.appendChild(firstInput);
            //création de l'input lastname
            let lastInput=document.createElement("input");
            lastInput.setAttribute("type", "text");
            lastInput.setAttribute("value", data.description[0].lastname);
            lastInput.setAttribute("name", "lastname");
            formElement.appendChild(lastInput);
            //création de l'input age
            let ageInput=document.createElement("input");
            ageInput.setAttribute("type", "text");
            ageInput.setAttribute("value", data.description[0].age);
            ageInput.setAttribute("name", "age");
            formElement.appendChild(ageInput);
            //création de l'input phone_number
            let phoneInput=document.createElement("input");
            phoneInput.setAttribute("type", "text");
            phoneInput.setAttribute("value", data.description[0].phone_number);
            phoneInput.setAttribute("name", "phone_number");
            formElement.appendChild(phoneInput);
            //création de l'input email
            let emailInput=document.createElement("input");
            emailInput.setAttribute("type", "text");
            emailInput.setAttribute("value", data.description[0].email);
            emailInput.setAttribute("name", "email");
            formElement.appendChild(emailInput);
           // Création d'un objet FormData
          
           let student= new FormData();
           student.append("coucou","coucou");
           student.append(emailInput.getAttribute("name"), emailInput.value);
           student.append(phoneInput.getAttribute("name"), phoneInput.value);
           student.append(ageInput.getAttribute("name"), ageInput.value);
           student.append(lastInput.getAttribute("name"), lastInput.value);
           student.append(firstInput.getAttribute("name"), firstInput.value);
            // Création et configuration d'une requête HTTP POST vers le fichier post_form.php
            var req = new XMLHttpRequest();
            debugger;
            req.open("PUT", `http://192.168.33.10/api/students/${student_id}` );
            // Envoi de la requête en y incluant l'objet
            req.send(student);
        })
    });
});
