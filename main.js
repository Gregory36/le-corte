window.onload = function(){
    new Auth();
}

// Кнопка logIn 

const LogInButton = document.getElementById("LogInButton");

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

