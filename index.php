<!DOCTYPE html>
<html>
<head>
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <!-- Шрифты -->

    <meta charset="UTF-8">
    <link rel="icon" href="source/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Винный бутик LE CORTE</title>
</head>
<body>
    <div class="background_start">
        <div class="container">
            <header>
                <nav id="nav_top">
                    <p>Новокузнечный переулок 4/1</p>
                    <p>8 (812) 123-45-67</p>
                </nav>
                <nav id="nav_bottom">
                    <div><a href="#1">Каталог</a></div>
                    <div id="border"><a href="#2">Доставка</a></div>
                    <div id="border"><a href="#3">Коллекции</a></div>
                    <div><button id="LogInButton">Войти</button></div>
                </nav>
                <button id="button_right_description"><div id="description_button"></div></button>
            </header>
            <div class="welcome_description">
                <h1 hidden="true" id="login_name">Привет</h1>
            </div>
            <div class="button_main">
                <button>ВИННАЯ КАРТА</button>
                <button>ДЕГУСТАЦИЯ</button>
            </div>
        </div>
    </div>
    <div class="background_color_black">
        <div class="container">
            <div class="describe_border">
                <h2>Лучший вкус, это вкус долголетнего вина</h2>
                <div id="line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac. Mauris dictumst risus pulvinar blandit elit. Vestibulum quam ultrices nascetur et viverra suscipit. Proin vitae aliquet leo aliquam amet rutrum. Lectus auctor purus ultrices enim ultrices. Augue fringilla tellus tortor orci ultrices sed. Viverra cras sapien, pellentesque viverra malesuada. Tellus dolor, eget vitae dignissim molestie eget sit duis. Vitae dui vel pretium euismod diam. Pellentesque amet, lacus, amet, quis risus. Pellentesque scelerisque nunc, orci aliquam quis.</p>
                <div id="image"></div>
            </div>
         </div>
    </div>
    <div class="background_color_white">
        <div class="container">
            <div id="white_line"></div>
                <div class="wine_section">
                    <div class="section_left">
                        <h3>Новинки коллекций</h3>
                        <h1>Март 1980<br>Урожай Марселя</h1>
                        <div id="gray_line"></div>
                        <p id="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac. </p>
                        <div class="table">
                            <div class="stroke" id="id_for_bottom_border">
                                <h3>1980</h3>
                                <div id="diff_div">
                                    <h2>Colli Euganei Bianco Ca' Lustra 1980</h2>
                                    <p>Красочная бутылка вина из Марселя</p>
                                </div>
                            </div>
                            <div class="stroke" id="id_for_bottom_border">
                                <h3>1980</h3>
                                <div id="diff_div">
                                    <h2>Colli Euganei Bianco Ca' Lustra 1980</h2>
                                    <p>Красочная бутылка вина из Марселя</p>
                                </div>
                            </div>
                            <div class="stroke">
                                <h3>1980</h3>
                                <div id="diff_div">
                                    <h2>Colli Euganei Bianco Ca' Lustra 1980</h2>
                                    <p>Красочная бутылка вина из Марселя</p>
                                </div>
                            </div>
                        </div>
                        <p id="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac. </p>
                        <button>УЗНАТЬ ПОДРОБНЕЕ</button>
                    </div>
                    <div class="section_right">
                        <!-- <div id="big_image"></div>
                        <div class="div_for_two_image">
                            <div id="small_image_1"></div>
                            <div id="small_image_2"></div>
                        </div> -->
                    </div>
                </div>
            <div id="white_line"></div>
         </div>
    </div>
   
    <footer>
      
    </footer>

    <div class="modal fade" id="formLoginModal" role="dialog" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Логин:</label>
                            <input type="text" class="form-control" id="login" name="login" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Пароль:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="buttonLogInpr" name="enter" id="enter">Вход</button>
                            <button type="submit" class="buttonRegpr" name="registration" id="registration">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="main.js"></script>
</body>
</html>