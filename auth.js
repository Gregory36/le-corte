function Auth(){

    let login = "";

    let isLoginRequest = false;

    init();

    function init(){   // Метод выполяемый при инициализации
        changeAutorizationBlock(null);

        document.querySelectorAll("form button[type='submit']")
        .forEach(el => {
            el.onclick = ev => {
                const target = ev.target;
                const targetName = target.name;
                isLoginRequest = targetName === 'enter';
            }
        });

    }

    document.querySelector("form").onsubmit = (event) => {   // Клик кнопок войти и зарегистрироваться
        event.preventDefault();
        event.stopPropagation();

        const formDataArray = [];
        formDataArray["login"] =  document.getElementById("login").value;
        formDataArray["password"] =  document.getElementById("password").value;
        formDataArray["isLoginRequest"] =  isLoginRequest;      

        const userContainInBase = checkContainUserDataInBase(formDataArray);

        if (userContainInBase.login) {
            changeAutorizationBlock(userContainInBase.login);
            localStorage.setItem("сurrentUser", userContainInBase.login)
            $("#formLoginModal").modal("hide");
        }

        if (userContainInBase.error) {
            alert(userContainInBase.error);
        }
    };

    function checkContainUserDataInBase(userData){
        let user = new UserBase();
        return user.getAuthentificaton(userData);
    }

    function changeAutorizationBlock(userLogin){
        let login_name = document.getElementById('login_name');
        let LogInButton = document.getElementById("LogInButton");
        if(userLogin != null){
            login_name.hidden = false;
            login_name.textContent = "Добро пожаловать, " + userLogin;
            LogInButton.textContent = "Выйти";
            return;
        }
        let login = localStorage.getItem("сurrentUser");
        if(login == null) return;
        if(login == "empty") {
            return;
        }
        login_name.hidden = false;
        login_name.textContent = "Добро пожаловать, " + login;
        LogInButton.textContent = "Выйти";
    }
}