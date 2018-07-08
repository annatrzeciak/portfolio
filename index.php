<?php include 'header.php';
?>
<header id='home' class="d-flex justify-content-center align-items-center">
    <?php include 'menu.php';


 ?>
    </div>
    <div class="header-content">
        <h1><span class="text-gradient">Anna</span><br><span>Trzeciak</span></h1>
        <h4>Front-end Developer</h4>
        <a href="/Anna _Trzeciak_CV.pdf" class="btn btn-gradient mt-5" download><span>Pobierz CV</span></a>
    </div>
</header>
<section id='about' class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class=" d-flex justify-content-end col-lg-5 text-right flex-column">
                <h2>Anna Trzeciak</h2>
                <span class="text-purpure text-uppercase font-bold">Front-end Developer</span>
                <p class="description">Ukończyłam studia matematyczne, które nauczyły mnie logicznego myślenia przydatnego w pracy programisty. Jestem osobą dokładną, zaangażowaną w powierzone zadania. Staram się pisać poprawny kod HTML5/CSS3/JavaScript zgodnie z najlepszymi praktykami i dbam, aby moje strony były reponsywne i czytelne na różnych przeglądarkach internetowych.</p>
            </div>
            <div class="col-lg-7  skills d-flex justify-content-end  text-right flex-column">
                <div class="row">
                    
                <div class="col-md-6">

                <div class="skill">
                    <p class="text-center">HTML5 + CSS3 (80%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 78%, #ff0072 82%, #ff0072 100%);">
                    </div>
                </div>
                <div class="skill">
                    <p class="text-center">Bootstrap 3/4 (80%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 78%, #ff0072 82%, #ff0072 100%);">

                    </div>
                </div>

                <div class="skill">
                    <p class="text-center">GIT (60%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 58%, #ff0072 62%, #ff0072 100%);">
                    </div>
                </div>
                <div class="skill">
                    <p class="text-center">PHP + MYSQL (20%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 18%, #ff0072 22%, #ff0072 100%);">

                    </div>
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="skill">
                    <p class="text-center">JavaScript ES6 (60%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 58%, #ff0072 62%, #ff0072 100%);">

                    </div>
                </div>

                <div class="skill">
                    <p class="text-center">Angular 4 (40%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 38%, #ff0072 42%, #ff0072 100%);">
                    </div>
                </div>

                <div class="skill">
                    <p class="text-center">jQuery (20%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 18%, #ff0072 22%, #ff0072 100%);">

                    </div>
                </div>
                <div class="skill">
                    <p class="text-center">Photoshop (20%)</p>
                    <div class="graph" style="background-image: linear-gradient(45deg, #a21af0 0%, #a21af0 18%, #ff0072 22%, #ff0072 100%);">
                    </div>
                        </div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id='portfolio' class="portfolio-section page-section">
    <div class="container">
        <h3 class="section-title">Portfolio</h3>
        <p class="text-center">Ostatnie projekty, które realizowałam.</p>
        <div class="portfolio-items ">
            <div class="row project">
                <div class="col-lg-6 project-description ">
                    <h4>Movies App</h4>
                    <p class="tags"><span class="tag">App</span><span class="tag">Angular</span><span class="tag">Rest api</span><span class="tag">pagination</span><span class="tag">bootstrap</span></p>
                    <p>Aplikacja typu SPA napisana w Angularze, która pobiera dane z REST API. Dodatkowo paginacja wyników przy użyciu ngx-pagination, wygląd strony stworzony przy użyciu Bootstrap 4.</p>
                    <a target="_blank" class="m-2" title="Strona z Movies App" href="https://bs-recruitment-task.firebaseapp.com/movies" id="link-view"><i class="far fa-eye"></i> </a>
                    <a target="_blank" class=" m-2" title="Zobacz Movies App na github" href="https://github.com/annatrzeciak/bs-recruitment-task" id="link-github"><i class="fab fa-github"></i> </a>

                </div>
                <div class="col-lg-6 project-image">
                    <img src="/images/movies-app.png" alt="Movies app  - mockup" title="Movies app  - mockup projektu" class="img-fluid">

                </div>

            </div>
            <div class="row project">
                <div class="col-lg-6 project-image">
                    <img src="/images/fresh-life.png" alt="Strona na podstawie pliku PSD - zdjęcie" title="Strona na podstawie pliku PSD - screen projektu" class="img-fluid">
                </div>
                <div class="col-lg-6 project-description">
                    <h4>PSD to HTML</h4>
                    <p class="tags"><span class="tag">Bootstrap</span><span class="tag">single page</span><span class="tag">rwd</span><span class="tag">psd to html</span></p>
                    <p>Strona stworzona na podstawie pliku PSD</p>

                    <a target="_blank" class="m-2" title="Zobacz stronę na żywo" href="https://annatrzeciak.github.io/psd-to-html-project/" id="link-view"><i class="far fa-eye"></i> </a>
                    <a target="_blank" class=" m-2" title="Repozytorium strony" href="https://github.com/annatrzeciak/psd-to-html-project" id="link-github"><i class="fab fa-github"></i> </a>


                </div>

            </div>
            <div class="row project">
                <div class="col-lg-6 project-description">
                    <h4>Aplikacja To do list</h4>
                    <p class="tags"><span class="tag">bootstrap</span><span class="tag">app</span><span class="tag">rwd</span><span class="tag">Local storage</span><span class="tag">jquery</span></p>
                    <p>Aplikacja do planowania zadań, napisana przy użyciu jQuery. Dodane taski pobierane z local storage. Zadania przyporządkowane do 5 kategorii.</p>

                    <a target="_blank" class="m-2" title="Przetestuje aplikację to do list" href="https://annatrzeciak.github.io/ToDoList/" id="link-view"><i class="far fa-eye"></i> </a>
                    <a target="_blank" class=" m-2" title="Repozytorium na github" href="https://github.com/annatrzeciak/ToDoList" id="link-github"><i class="fab fa-github"></i> </a>


                </div>
                <div class="col-lg-6 project-image">
                    <img src="/images/to-do-list.png" alt="Aplikacja To do list - mockup" title="Aplikacja To do list - mockup przedstawiający projekt" class="img-fluid">
                </div>

            </div>
            <div class="row project">
                <div class="col-lg-6 project-image">
                    <img src="/images/one-page-bootstrap.png" alt="Single Page - Bootstrap  - zdjęcie" title="Single Page - Bootstrap  - screen projektu" class="img-fluid">
                </div>
                <div class="col-lg-6 project-description">
                    <h4>Wizytówka firmy</h4>
                    <p class="tags"><span class="tag">Bootstrap</span><span class="tag">single page</span><span class="tag">rwd</span><span class="tag">smooth scrolling</span></p>
                    <p>Strona internetowa przedstawiająca firmę napisana przy użyciu Bootstrapa. Przewijanie między sekcjami przy użyciu smooth scrolling. Dodatkowo zaimplementowany slick slider.</p>

                    <a target="_blank" class="m-2" title="Zobacz przykładową wizytówkę firmy" href="https://annatrzeciak.github.io/onePageBootstrap/" id="link-view"><i class="far fa-eye"></i> </a>
                    <a target="_blank" class=" m-2" title="Repozytorium strony na github" href="https://github.com/annatrzeciak/onePageBootstrap" id="link-github"><i class="fab fa-github"></i> </a>


                </div>

            </div>
            <!-- <div class="row project">
                <div class="col-lg-6 project-description">

                </div>
                <div class="col-lg-6 project-image">

                </div>

              </div>
              <div class="row project">
                <div class="col-lg-6 project-image">

                </div>
                <div class="col-lg-6 project-description">

                </div>

              </div> -->



        </div>
    </div>
    </div>
</section>
<section id='contact' class="page-section">
    <div class="container">
        <h3 class="section-title">Kontakt</h3>
        <p class="text-center">Jesteś zainteresowany współpracą? Napisz do mnie :)</p>
        <div class="row contact-content">
            <div class="col-lg-6 text-center">
                <form method="post" action="sendMessage.php">
                    <?php
          if(isset($_SESSION['sent_ok'])) {
            echo "<div class='ok_info'>".$_SESSION['sent_ok']."</div>";
            unset($_SESSION['sent_ok']);
          }
          if(isset($_SESSION['sent_error'])) {
            echo "<div class='error_info'>".$_SESSION['sent_error']."</div>";
            unset($_SESSION['sent_error']);
          }
          ?>
                        <input name='email' type="email" class="form-control" placeholder="Adres e-mail" title="Podaj adres email" value="<?php
              if(isset($_SESSION['form_email'])) {
                echo $_SESSION['form_email'];
                unset($_SESSION['form_email']);
              }?>">
                        <?php
            if(isset($_SESSION['email_error'])) {
              echo "<div class='error_info'>".$_SESSION['email_error']."</div>";
              unset($_SESSION['email_error']);
            }
            ?>
                            <input name='name' type="text" placeholder="Imię i nazwisko " class="form-control" title="Wpisz imię, nazwisko lub nick" value="<?php
              if(isset($_SESSION['form_name'])) {
                echo $_SESSION['form_name'];
                unset($_SESSION['form_name']);
              }?>">
                            <?php
            if(isset($_SESSION['name_error'])) {
              echo "<div class='error_info'>".$_SESSION['name_error']."</div>";
              unset($_SESSION['name_error']);
            }
            ?>
                                <textarea placeholder='Wiadomość' class="form-control" name="message" id="" cols="30" rows="10" title="Wpisz treść wiadomości którą chcesz przesłać"><?php
              if(isset($_SESSION['form_message'])) {
                echo $_SESSION['form_message'];
                unset($_SESSION['form_message']);
              }?></textarea>
                                <?php
            if(isset($_SESSION['message_error'])) {
              echo "<div class='error_info'>".$_SESSION['message_error']."</div>";
              unset($_SESSION['message_error']);
            }
            ?>
                                    <div class="row">
                                        <div class="col-sm-7 recaptcha">
                                            <div class="g-recaptcha" data-sitekey="6LcWaWIUAAAAAC2VRcJMFD0gUvE5e5Yc838HXlcb"></div>

                                            <?php
if(isset($_SESSION['bot_error'])) {
  echo "<div class='error_info'>".$_SESSION['bot_error']."</div>";
  unset($_SESSION['bot_error']);
}
?>
                                        </div>
                                        <div class="col-sm-5 text-right submit-button">
                                            <input type="submit" class="btn btn-gradient" value="Wyślij">
                                        </div>
                                    </div>
                </form>
            </div>
            <div class="col-lg-5 offset-lg-1 text-center">

                <h3 class="mt-5"><strong><span class="logo">code way</span><br>Anna Trzeciak</strong></h3>
                
                <h5 class="mb-5">NIP: 826-214-96-06</h5>
                
                <h5>798 590 569</h5>
                <h5 ><a title="Wyślij maila do code way Anna Trzeciak" class="mx-2" href='mailto:a.trzeciak@code-way.com'><i class="fas fa-envelope"></i></a>
                    <a title="Linkedin - Anna Trzeciak" class="mx-2" href='https://www.linkedin.com/in/annatrzeciak3/'>
<i class="fab fa-linkedin-in"></i>
</a>
                    <a title="Github - Anna Trzeciak" class="mx-2" href='https://github.com/annatrzeciak'>
  <i class="fab fa-github"></i>
</a>

                </h5>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
