function UserBase(){
    
    jsonUsers = [];
       
    function getUserBase() {
        const startBase = [
        {
            "id": 0,
            "login": "admin",
            "password": "admin",            
        },
        {
            "id": 1,
            "login": "user",
            "password": "user",            
        },        
        ];
        return JSON.parse(localStorage.getItem('UserBase')) || startBase;    
    }
                
    function setUserBase() {      
        localStorage.setItem('UserBase',JSON.stringify(jsonUsers))
    }

    this.getAuthentificaton = function(data) {

        jsonUsers = getUserBase(); 

        login = data["login"];
        password = data["password"];
        isLoginRequest = data["isLoginRequest"];
                
        if (isLoginRequest) {			
            if (checkUser(login, password)) {
                return {"login" :  login, "error" : null}; 
            }            
            return {"login" : undefined, "error" : "Ошибка авторизации!" };
        }
            
        if (getUser(login)) {			
            return {"login" : undefined,  "error": `Пользователь с логином '${login}' уже существует!`};            
        }
          
        if (setUser(login, password)){            
            return {"login" :  login, "error" : undefined};
        }
        
        //return {"login" : undefined, "error" : "Ошибка авторизации!" };
    }
    
    function checkUser(login, password) {
        let user = getUser(login);        
        return user ? (user.password === password ? user : null) : null;            
    }
    
    function getUser(login) {
        return jsonUsers.find(user => user.login === login);            
    }

    function setUser(login, password) {
        let maxId = jsonUsers.length;
        jsonUsers.push({ "id": maxId, "login": login, "password": password});
        setUserBase();
        return true;
    }    
}