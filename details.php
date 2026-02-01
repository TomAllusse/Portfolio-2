<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails - Mon Portfolio</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/styleDetails.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "src/layout/navbar.php";
    ?>
    <section class="section-competences">
        <h4 class="tag">Compétences</h4>
        <h1>Compétences <span>Acquise</span></h1>
        <div class="cards">
            <!-- Développement web et d'application -->
            <div class="card">
                <div class="icon">💻</div>
                <h2>Développement web et d'application</h2>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>HTML</span>
                        <span>🌕🌕🌕🌕🌑</span>
                    </div>
                    <div class="bar"><div style="width: 80%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>CSS</span>
                        <span>🌕🌕🌕🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 60%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>Javascript</span>
                        <span>🌕🌕🌗🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 50%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>PHP</span>
                        <span>🌕🌕🌕🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 60%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>C++</span>
                        <span>🌕🌕🌗🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 50%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>C#</span>
                        <span>🌕🌕🌗🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 50%;"></div></div>
                </div>
                <div class="competence">
                    <div class="competence-ligne">
                        <span>Python</span>
                        <span>🌕🌕🌑🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 40%;"></div></div>
                </div>
                <div class="competence">
                    <div class="competence-ligne">
                        <span>Base de données</span>
                        <span>🌕🌕🌕🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 60%;"></div></div>
                </div>
            </div>

            <!-- Logiciels -->
            <div class="card">
                <div class="icon">🛠️</div>
                <h2>Logiciels</h2>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>Microsoft Teams</span>
                        <span>🌕🌕🌕🌕🌗</span>
                    </div>
                    <div class="bar"><div style="width: 90%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>Git, Github</span>
                        <span>🌕🌕🌕🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 60%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>GitLab</span>
                        <span>🌕🌕🌕🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 60%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>Visual Studio</span>
                        <span>🌕🌕🌕🌕🌑</span>
                    </div>
                    <div class="bar"><div style="width: 80%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>Xampp</span>
                        <span>🌕🌕🌕🌗🌑</span>
                    </div>
                    <div class="bar"><div style="width: 70%;"></div></div>
                </div>

                <div class="competence">
                    <div class="competence-ligne">
                        <span>Netbeans</span>
                        <span>🌕🌕🌑🌑🌑</span>
                    </div>
                    <div class="bar"><div style="width: 40%;"></div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-formations">
        <h4 class="tag">Formation</h4>
        <h1>Mon <span>parcours</span></h1>
        <div class="formations">

            <!-- BAC -->
            <div class="formation-div gauche">
                <div class="card2 green">
                    <h2 class="year">2020 - 2021</h2>
                    <h2 class="status green-s">Completed</h2>
                    <h3>Baccalauréat Sciences et technologies de l'industrie et du développement durable</h3>
                    <h3>Systèmes d'Information et Numérique</h3>
                    <p class="school">Lycée Joseph-Marie Carriat</p>
                    <p>Formation en sciences et technologies de l'industrie et du développement durable enseignement spécifique systèmes d'information et numérique</p>
                </div>
            </div>

            <!-- Icon -->
            <div class="icon2">
                🎓
            </div>

            <!-- BUT -->
            <div class="formation-div droite">
                <div class="card2 blue">
                    <h2 class="year">2021 - 2022</h2>
                    <h2 class="status blue-s">Réorientaion</h2>
                    <h3>BUT INFORMATIQUE</h3>
                    <p class="school">IUT LYON1</p>
                    <p>1ère année de formation en informatique</p>

                    <ul class="points">
                        <li>HTML, CSS, JavaScript</li>
                        <li>React, SQL's databases, APIs</li>
                        <li>Project management and best practices</li>
                        <li>Solo projects, team projects, and internships</li>
                    </ul>
                </div>
            </div>

            <!-- Icon -->
            <div class="icon2">
                🧭
            </div>

            <!-- BTS -->
            <div class="formation-div gauche">
                <div class="card2 green">
                    <h2 class="year">2022 - 2024</h2>
                    <h2 class="status green-s">Completed</h2>
                    <h3>BTS Services Informatiques aux Organisations</h3>
                    <h3>option B Solutions Logicielles et Applications Métiers</h3>
                    <p class="school">Lycée Joseph-Marie Carriat</p>
                    <p>Formation en développement d'applications et solutions logicielles</p>
                </div>
            </div>

            <!-- Icon -->
            <div class="icon2">
                🎓
            </div>

            <!-- Bachelor -->
            <div class="formation-div droite">
                <div class="card2 blue">
                    <h2 class="year">2025 - 2027</h2>
                    <h2 class="status purple-s">En cours</h2>
                    <h3>Bachelor informatique et développement</h3>
                    <p class="school">Grande école d'informatique, Lyon IPSSI</p>
                    <p>Formation en 2ème année informatique, cybersécurité et IA</p>
                </div>
            </div>

            <!-- Icon -->
            <div class="icon2">
                ⏳
            </div>

            <!-- Final objective card -->
            <div class="formation-end">
                <div class="final-card">
                    <h2 class="year">2027 - 2029</h2>
                    <h2 class="status yellow-s">Objectif</h2>
                    <h3>Mastère BigData, dev. & Intelligence Artificielle</h3>
                    <p class="school">Grande école d'informatique, Lyon IPSSI</p>
                </div>
            </div>

        </div>
    </section>
    <section class="section-liens">
        <div class="gauche">
            <h4 class="tag gauche">Link</h4>
            <div>
                <div class="lien-item">
                    <span class="github"></span>
                    <a href="https://github.com/TomAllusse?tab=repositories">GITHUB</a>
                </div>
                <div class="lien-item">
                    <span class="drive"></span>
                    <a href="https://drive.google.com/drive/folders/1McIeOFuTbcx_78pIz6PhcBp5hyykGLx8">Drive</a>
                </div>
                <div class="lien-item">
                    <span class="linkedIn"></span>
                    <a href="https://www.linkedin.com/in/tom-allusse-ba4490261/">LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="droite">
            <h4 class="tag gauche">Fichier</h4>
            <div>
                <div class="lien-item">
                    <span class="pdf"></span>
                    <a href="src/pdf/Allusse-Tom-cv.pdf"><span></span>CV</a>
                </div>
                <div class="lien-item">
                    <span class="pdf"></span>
                    <a href="src/pdf/lettre-motivation.pdf"><span></span>lettre de motivation</a>
                </div>
            </div>
        </div>
    </section>
    <?php
        include_once "src/layout/footer.php";
    ?>
    <script src="src/js/app.js"></script>
</body>
</html>