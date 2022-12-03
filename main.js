// Авторизация и регистрация
const LogInButton = document.getElementById("LogInButton");
document.getElementById("enter").onclick = buttonWasClicked;
document.getElementById("registration").onclick = buttonWasClicked;

async function buttonWasClicked (event){ 
    event.preventDefault(); // перехват действия браузера по-умолчани
    event.stopPropagation(); // остановка продвижения события
    let target = event.target;
    let isEnter = target.name=="enter"?true:false;                
    let formData = new FormData();
    formData.append("login", document.getElementById("login").value);
    formData.append("password", document.getElementById("password").value);
    formData.append("isEnter", isEnter);
    let response = await fetch("registration.php",
    {
        method: "POST",
        body: formData
    });
    let result = await response.json();
    if (result.login) {  
        document.getElementById("login_name").textContent = "Добро пожаловать " + result.login + "!";
        document.getElementById("login_name").hidden = false;
        LogInButton.textContent = "Выйти";
        localStorage.setItem("сurrentUser", result.login);
        alert("Вы вошли под именем " + result.login);
    }
    if (result.error) {
        alert(result.error);
        console.log(result.error);
    }  
}

window.onload = () => {
    let user = localStorage.getItem("сurrentUser");
    if(user == null || user == "empty"){
        return;
    }
    document.getElementById("login_name").textContent = "Добро пожаловать " + user + "!";
    document.getElementById("login_name").hidden = false;
    LogInButton.textContent = "Выйти"
}

// Кнопка logIn 

LogInButton.addEventListener("click", ()=>{
    let login = localStorage.getItem("сurrentUser");
        if(login == null || login == "empty") {
            $("#formLoginModal").modal("show");
        }else{
            let login_name = document.getElementById('login_name');
            localStorage.setItem("сurrentUser", "empty");
            login_name.hidden = true;
            login_name.textContent = "";
            LogInButton.textContent = "Войти"
        }
    
})

