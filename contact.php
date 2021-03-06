<?php
/*
Template Name: Мой шаблон страницы
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YP landing page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
</head>
    <body>
        <div class="header">
            <a href="/index.php">
                <div class="logo_sign_in">
                    <img src="images/logo/YP_kolor.svg" alt="logo">
                </div>
            </a>
        </div>


        <div id ="block_form_page_1">
            <form action="mail.php" enctype="multipart/form-data" method="POST">
                <div class="name_block_ambasador_sign_in">
                    <div class="slogan_sign_in">
                        <h1>
                            Zostań Ambasadorem w <strong>Young Professionals!</strong>
                        </h1>
                    </div>
                    <div class="name_block_form_text">
                        <p>
                            Poszukujemy ambasadorów na największych uczelniach w Polsce. Jeśli chcesz dołączyć 
                            do naszego zespołu, wypełnij poniższy formularz i daj się poznać.
                        </p>
                    </div>
                </div>
                <div class="name_and_numbers">
                    <div class="name_block_form">
                        <h2>
                            FORMULARZ
                        </h2>
                    </div>
                    <div class="color_numbers">
                        <div class="sign_in_number_1">
                            <img src="images/logo/sign_in_number_1.svg" alt="logo">
                        </div>
                        <div class="sign_in_number_2">
                            <img src="images/logo/sign_in_number_2.svg" alt="logo">
                        </div>
                    </div>
                </div>
                <div class = "form_all"
                    <div class="form_part_left">
                        <div class="name_form_first">
                            <h3>
                                Imię
                            </h3>
                        </div>
                        <input type="text" name="user_name" placeholder="Imię" class="n_input" required />
                        <div class="name_form">
                            <h3>
                                Nazwisko
                            </h3>
                        </div>
                        <input type="text" name="user_surname" placeholder="Nazwisko" class="n_input" required />
                        <div class="name_form">
                            <h3>
                                Numer telefonu
                            </h3>
                        </div>
                        <input type="text" name="user_phone" placeholder="Numer telefonu" class="n_input" required />
                        <div class="name_form">
                            <h3>
                                E-mail
                            </h3>
                        </div>
                        <input type="text" name="user_email" placeholder="E-mail" class="n_input" required />
                    </div>
                    <div class="form_part_right">
                        <div class="name_form_right">
                            <h3>
                                Nazwa konta na instagramie
                            </h3>
                        </div>
                        <input type="text" name="user_nikcname" placeholder="Nazwa konta na instagramie" class="n_input_right" required />
                        <div class="name_form_right">
                            <h3>
                                Skąd dowiedziałe/aś się o rekrutacji?
                            </h3>
                        </div>


                        <div class="radio_button">
                            <div class="pretty p-icon p-round p-jelly">
                                <input type="checkbox" name="instagram" value="Instagram"/>
                                <div class="state ">
                                    <i class="icon mdi mdi-check" style="background-color: #FFB84B; margin-top: 6px;"></i>
                                    <label style="margin-left: 10px;">Instagram</label>
                                </div>
                            </div>
                            <div class="pretty p-icon p-round p-jelly">
                                <input type="checkbox" name="facebook" value="Facebook"/>
                                <div class="state ">
                                    <i class="icon mdi mdi-check" style="background-color: #FFB84B; margin-top: 6px;"></i>
                                    <label style="margin-left: 10px;">Facebook</label>
                                </div>
                            </div>
                            <div class="pretty p-icon p-round p-jelly">
                                <input type="checkbox" name="linkedin" value="Linkedin"/>
                                <div class="state ">
                                    <i class="icon mdi mdi-check" style="background-color: #FFB84B; margin-top: 6px;"></i>
                                    <label style="margin-left: 10px;">Linkedin</label>
                                </div>
                            </div>
                        <div class="pretty p-icon p-round p-jelly">
                            <input type="checkbox" name="friends" value="Od znajomych"/>
                            <div class="state ">
                                <i class="icon mdi mdi-check" style="background-color: #FFB84B; margin-top: 6px;"></i>
                                <label style="margin-left: 10px;">Od znajomych</label>
                            </div>
                            </div>
                            <div class="pretty p-icon p-round p-jelly">
                                <input type="checkbox" name="another" value="Inna odpowiedź"/>
                                <div class="state ">
                                    <i class="icon mdi mdi-check" style="background-color: #FFB84B; margin-top: 6px;"></i>
                                    <label style="margin-left: 10px;">Inna odpowiedź</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_next">
                        <a onclick = "hideDiv()">DALEJ</a>
                    </div>
                    </div>
                </div>


                <div id ="block_form_page_2">
                
                    <div class="name_block_ambasador_sign_in_page_3">
                        <div class="slogan_sign_in_page_3">
                            <h1>
                                Zostań Ambasadorem w <strong>Young Professionals!</strong>
                            </h1>
                        </div>
                        <div class="name_block_form_text_page3">
                            <p>
                                Poszukujemy ambasadorów na największych uczelniach w Polsce. Jeśli chcesz dołączyć 
                                do naszego zespołu, wypełnij poniższy formularz i daj się poznać.
                            </p>
                        </div>
                    </div>
                    <div class="name_and_numbers_sigh_in">
                        <div class="name_block_form_page_2">
                            <h2>
                                FORMULARZ
                            </h2>
                        </div>
                        <div class="color_numbers_2page">
                            <div class="sign_in_number_1">
                                <img src="images/logo/sign_in_number_1_white.svg" alt="logo">
                            </div>
                            <div class="sign_in_number_2">
                                <img src="images/logo/sign_in_number_2_yellow.svg" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="school_and_input">
                        <div class="school">
                            <h3>
                                Uczelnia, na której studiujesz
                            </h3>
                        </div>
                        <input type="text" name="school" placeholder="Uczelnia, na której studiujesz" class="school_form" required />
                    </div>
                    <div class="about_cand_textare_name1">
                        <div class="organization">
                            <h3>
                                Działasz w organizacjach studenckich? Jeśli tak, czym się tam zajmujesz?
                            </h3>
                        </div>
                        <textarea rows="4" cols="50" type = "text" name="organization" placeholder= "..." class="organization_textarea" required></textarea>
                    </div>
                    <div class="about_cand_textare_name2">
                        <div class="about_candidat">
                            <h3>
                                Opowiedz nam o sobie. Dlaczego właśnie Ty musisz zostać naszym ambasadorem?
                            </h3>
                        </div>
                        <textarea rows="4" cols="50" type = "text" name="about_candidat" placeholder= "..." class="about_candidat_textarea" required></textarea>
                    </div>
                    <div class="cv_text_button">

                        <div class="cv_text">
                            <h3>
                                Prześlij nam swoje CV!
                            </h3>
                            <button id="files" onclick="document.getElementById('file-uploader').click(); return false;">Przeglądaj</button>
                            <input id="file-uploader" name="user_file" type="file" style="visibility: hidden;">
                            <p id="feedback">
                                CV
                            </p>
                        </div>
                    <div class="btn_send">
                        <div class="akceptetion">
                            <input type="checkbox" class = "check_b" name ="agree">
                            <span class="che"> Zgoda na przetwarzanie <a href="privacy_policy.php" style="text-decoration: none;"><em>danych osobowych</em></a></span>
                        </div>
                        <button type = "submit" class= "btn btn-primary">
                            <span class="Outsourcing1">WYŚLIJ</span>
                        </button>
                    </div>
            </form>
        </div>
        <script src= "js/hide.js"></script>
    </body>
</html>
