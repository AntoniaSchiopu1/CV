<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonia Schiopu | Portofoliu</title>
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background: #f4f6f9; 
            color: #333;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 320px;
            background: #005f54; 
            color: #ffffff;
            padding: 40px 20px;
            box-sizing: border-box;
        }
        .profile-container {
            text-align: center;
            margin-bottom: 35px;
        }
        .profile-img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid #ffffff;
            object-fit: cover;
        }
        .sidebar h2 {
            font-size: 1.4rem;
            text-transform: uppercase;
            border-bottom: 2px solid #ffffff33;
            padding-bottom: 5px;
            margin-top: 35px;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }
        .sidebar h3 {
            font-size: 1.05rem;
            margin: 15px 0 5px 0;
            font-weight: 500;
        }
        .sidebar p, .sidebar a {
            color: #e0f2f1;
            font-size: 0.95rem;
            line-height: 1.5;
            margin: 5px 0;
            text-decoration: none;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .progress-bar-bg {
            background: rgba(255, 255, 255, 0.2);
            height: 6px;
            width: 100%;
            margin-bottom: 15px;
            border-radius: 3px;
            overflow: hidden;
        }
        .progress-bar-fill {
            background: #ffffff;
            height: 100%;
        }
        .tech-list {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #e0f2f1;
            margin-top: 15px;
        }
        .main-content {
            flex: 1;
            background: #ffffff;
            padding: 50px 40px;
            box-sizing: border-box;
        }
        .main-content h1 {
            font-size: 3.2rem;
            margin: 0 0 35px 0;
            color: #111;
            letter-spacing: 1px;
            font-weight: 500;
        }
        .section-tag {
            background: #005f54;
            color: #fff;
            display: inline-block;
            padding: 5px 14px;
            font-weight: bold;
            font-size: 0.9rem;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .section-text {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #222;
            margin-bottom: 40px;
            text-align: justify;
        }
        .edu-item {
            margin-bottom: 20px;
        }
        .edu-title {
            font-weight: bold;
            font-size: 1.1rem;
            color: #111;
        }
        .edu-date {
            color: #777;
            font-size: 0.9rem;
            margin: 2px 0;
        }
        .list-item {
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .list-title {
            font-weight: bold;
            color: #111;
        }
        .search-box {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            margin-bottom: 25px;
            box-sizing: border-box;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 10px;
        }
        .card {
            background: #fafafa;
            border-left: 5px solid #005f54; 
            border-top: 1px solid #eee;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            border-radius: 4px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        .card h4 {
            margin: 0 0 10px 0;
            color: #005f54;
            font-size: 1.25rem;
        }
        .card p {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.4;
            margin: 0 0 15px 0;
        }
        .meta {
            font-size: 0.85rem;
            color: #777;
            margin-bottom: 15px;
        }
        .badge {
            background: #e0f2f1;
            color: #005f54;
            padding: 3px 10px;
            border-radius: 10px;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            background: #005f54;
            color: #fff;
            padding: 9px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.85rem;
            text-align: center;
            font-weight: bold;
        }
        .btn:hover {
            background: #004d40;
        }
        .loading { color: #666; font-style: italic; text-align: center; margin: 20px 0; }
        .btn-load { display: block; width: 160px; margin: 30px auto 0; background: #fff; border: 1px solid #005f54; color: #005f54; padding: 10px; border-radius: 4px; cursor: pointer; font-weight: bold; transition: 0.2s; }
        .btn-load:hover { background: #005f54; color: #fff; }
        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; text-align: center; }
            .main-content { padding: 30px 20px; }
            .main-content h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="profile-container">
            <img src="profil.jpg" alt="Antonia Schiopu" class="profile-img" onerror="this.src='https://via.placeholder.com/150'">
        </div>
        
        <h2>Informatii Personale</h2>
        <p><strong>Locatie:</strong> Sibiu, Romania</p>
        <p><strong>Nationalitate:</strong> Romana</p>

        <h2>Link-uri</h2>
        <p><a href="https://linkedin.com" target="_blank">LinkedIn</a></p>
        <p><a href="https://github.com/AntoniaSchiopu1" target="_blank">GitHub</a></p>

        <h2>Competente tehnice</h2>
        <h3>C++</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 100%;"></div></div>
        <h3>Java</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 35%;"></div></div>
        <h3>Python</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 35%;"></div></div>
        <h3>C#</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 35%;"></div></div>
        <h3>HTML</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 65%;"></div></div>

        <div class="tech-list">
            <strong>Tehnologii web si Framework-uri:</strong><br>
            HTML5, CSS3 (le studiez in prezent la facultate), .NET Framework, WinForms<br><br>
            <strong>Instrumente si OS:</strong><br>
            Visual Studio 2022, Visual Code, IntelliJ, Git, GitHub
        </div>

        <h2>Competente</h2>
        <h3>Engleza - B1</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 70%;"></div></div>
        <h3>Franceza - B1</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 70%;"></div></div>
        <h3>Digitale (ECDL)</h3>
        <div class="progress-bar-bg"><div class="progress-bar-fill" style="width: 100%;"></div></div>
    </aside>

    <main class="main-content">
        <h1>ANTONIA SCHIOPU</h1>

        <div class="section-tag">Rezumat</div>
        <div class="section-text">
            Studenta in anul II la Ingineria Calculatoarelor (ULBS), axata pe insusirea fundamentelor de programare, ale algoritmicii, electronicii si matematicii. Detin cunostinte de C++, Java, Python si electrica. Imi doresc obtinerea unui stagiu de practica, cu posibilitatea de prelungire intr-un internship, pentru a contribui activ in cadrul unei echipe si pentru a-mi construi o baza solida in domeniu.
        </div>

        <div class="section-tag">Educatie</div>
        <div class="section-text">
            <div class="edu-item">
                <div class="edu-title">Universitatea Lucian Blaga, Sibiu (Facultatea de Inginerie)</div>
                <div class="edu-date">octombrie 2024 - Prezent</div>
                <div>Specializarea: Calculatoare</div>
            </div>

            <div class="edu-item">
                <div class="edu-title">Facultatea de Stiinte Socio-Umane</div>
                <div class="edu-date">octombrie 2024 - Prezent</div>
                <div>Departamentul pentru Pregatirea Personalului Didactic, Program de formare psihopedagogica, Nivel 1</div>
            </div>

            <div class="edu-item">
                <div class="edu-title">Liceul Teoretic Onisifor Ghibu, Sibiu</div>
                <div class="edu-date">septembrie 2020 - iulie 2024</div>
                <div>Profilul: Matematica-Informatica, Intensiv Informatica</div>
            </div>

            <div class="edu-item">
                <div class="edu-title">Scoala Gimnaziala 'Badea Cirtan' Cirtisoara</div>
                <div class="edu-date">2010 - 2020</div>
            </div>
        </div>

        <div class="section-tag">Hobby-uri</div>
        <div class="section-text">
            <div class="list-item">
                <span class="list-title">Dansuri populare:</span> Practicate timp de 9 ani, activitate care mi-a dezvoltat disciplina, spiritul de echipa si respectul pentru traditii.
            </div>
            <div class="list-item">
                <span class="list-title">Sport si viata activa:</span> Antrenamente la sala si drumetii in aer liber, activitati care ma ajuta sa imi mentin perseverenta si concentrarea.
            </div>
            <div class="list-item">
                <span class="list-title">Calatorii:</span> Pasionata de explorarea locurilor noi si descoperirea unor perspective diferite, lucru care imi hraneste curiozitatea si adaptabilitatea.
            </div>
        </div>

        <div class="section-tag">Aptitudini</div>
        <div class="section-text">
            <div class="list-item">Disciplina si consecventa</div>
            <div class="list-item">Gandire logica si analitica</div>
            <div class="list-item">Spirit de colaborare si lucru in echipa</div>
            <div class="list-item">Adaptabilitate si capacitate de invatare rapida</div>
            <div class="list-item">Orientare spre rezolvarea problemelor</div>
            <div class="list-item">Organizare si gestionarea timpului</div>
        </div>

        <div class="section-tag">Proiecte GitHub</div>
        <br><br>
        
        <input type="text" id="search" class="search-box" placeholder="Filtreaza proiectele dupa nume sau limbaj de programare...">

        <div id="loading" class="loading">Se incarca proiectele din sistem...</div>

        <div id="grid" class="grid"></div>

        <button id="loadMore" class="btn-load" style="display: none;">Incarca mai multe</button>
    </main>

    <script>
        let proiecte = [];
        let afisateAcum = 0;
        const portie = 6; 

        const grid = document.getElementById('grid');
        const loading = document.getElementById('loading');
        const searchInput = document.getElementById('search');
        const loadMoreBtn = document.getElementById('loadMore');

        async function fetchProiecte() {
            try {
                const res = await fetch('api.php');
                proiecte = await res.json();
            } catch (err) {
                console.log("Eroare incarcare live. Se comuta pe incarcare directa.");
            } finally {
                loading.style.display = 'none';
                if (!proiecte || proiecte.length === 0) {
                    proiecte = [
                        {name: 'Paradigme', description: 'Aplicatie de gestionare si management pentru studenti dezvoltata in IntelliJ IDEA, axata pe studiul si implementarea diferitelor paradigme de programare.', language: 'Java', stargazers_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/Paradigme'},
                        {name: 'ProiectColivie', description: 'Aplicatie grafica 3D/2D dezvoltata in C++ utilizand biblioteca OpenGL pentru randarea si simularea vizuala a unui mediu interactiv.', language: 'C++', stargazers_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/ProiectColivie'},
                        {name: 'AppMoara', description: 'Implementarea digitala a jocului clasic de societate "Moara" (Nine Men\'s Morris), realizata in C# cu logica completa a regulilor de joc.', language: 'C#', stargazers_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/AppMoara'},
                        {name: 'Atestat_Liceu', description: 'Mini-joc interactiv dezvoltat in C#, realizat ca proiect pentru examenul de certificare a competentelor profesionale la informatica.', language: 'C#', stargazers_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/Atestat_Liceu'},
                        {name: 'Portofoliu-Dinamic', description: 'Proiectul de semestru curent: portofoliu web dinamic integrat securizat cu GitHub API si proxy in PHP.', language: 'PHP', stargazers_count: 0, html_url: 'https://github.com/AntoniaSchiopu1'}
                    ];
                }
                randare(true);
            }
        }

        function randare(reset = false) {
            if(reset) {
                grid.innerHTML = '';
                afisateAcum = 0;
            }

            const filtru = searchInput.value.toLowerCase();
            const filtrate = proiecte.filter(p => 
                p.name.toLowerCase().includes(filtru) || 
                (p.language && p.language.toLowerCase().includes(filtru))
            );

            const deAfisat = filtrate.slice(afisateAcum, afisateAcum + portie);

            deAfisat.forEach(p => {
                const card = document.createElement('div');
                card.className = 'card';
                card.innerHTML = `
                    <div>
                        <h4>${p.name}</h4>
                        <p>${p.description}</p>
                    </div>
                    <div>
                        <div class="meta">
                            <span class="badge">${p.language}</span>
                            <span style="margin-left:12px;">Stele: ${p.stargazers_count}</span>
                        </div>
                        <a href="${p.html_url}" target="_blank" class="btn">Vezi Cod Sursa</a>
                    </div>
                `;
                grid.appendChild(card);
            });

            afisateAcum += deAfisat.length;
            loadMoreBtn.style.display = (afisateAcum < filtrate.length) ? 'block' : 'none';
        }

        searchInput.addEventListener('input', () => randare(true));
        loadMoreBtn.addEventListener('click', () => randare(false));

        fetchProiecte();
    </script>
</body>
</html>