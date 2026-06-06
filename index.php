<!DOCTYPE html>
//Portofoliu Web Dinamic
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonia Șchiopu | Portofoliu Ultra Modern</title>
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background: #0d1117; 
            color: #94a3b8;
            box-sizing: border-box;
            min-height: 100vh;
            border-top: 24px solid #005f54;
            border-right: 24px solid #005f54;
            border-bottom: 24px solid #005f54;
            border-left: 24px solid #005f54;
            overflow: hidden;
        }

        .split-layout {
            display: flex;
            height: calc(100vh - 48px);
            box-sizing: border-box;
        }

        .left-hero {
            width: 400px;
            min-width: 400px;
            background: #11141a;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
            box-sizing: border-box;
            border-right: 1px solid #21262d;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 10;
            overflow: hidden;
        }

        .hero-main {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 20px;
            width: 100%;
            margin-bottom: 20px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #008f7a;
            object-fit: cover;
            box-shadow: 0 0 25px rgba(0, 143, 122, 0.15);
            margin: 0 auto;
            display: block;
        }

        .hero-main h1 {
            font-family: 'Georgia', serif;
            font-size: 2.2rem;
            margin: 0;
            color: #ffffff;
            letter-spacing: 2px;
            font-weight: 400;
            line-height: 1.2;
        }

        .hero-main p {
            margin: 0;
            color: #008f7a;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .hero-footer {
            display: flex;
            flex-direction: column;
            gap: 16px;
            background: #0d1117;
            padding: 24px;
            border: 1px solid #21262d;
            box-sizing: border-box;
            width: 100%;
            margin-top: auto;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            font-size: 0.88rem;
            border-bottom: 1px solid #21262d;
            padding-bottom: 8px;
            gap: 10px;
        }
        .info-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .info-row strong {
            color: #ffffff;
            white-space: nowrap;
        }
        .info-row span {
            text-align: right;
            word-break: break-all;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }
        .social-links a {
            color: #008f7a;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: bold;
            border-bottom: 1px dashed #008f7a;
            transition: color 0.2s;
        }
        .social-links a:hover {
            color: #00bfa5;
            border-bottom-style: solid;
        }

        .right-scroll {
            flex: 1;
            margin-left: 400px;
            height: 100%;
            overflow-y: auto;
            padding: 60px 80px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .section-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .section-headline {
            font-family: 'Georgia', serif;
            color: #ffffff;
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: bold;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .section-headline::before {
            content: '';
            display: inline-block;
            width: 4px;
            height: 16px;
            background: #008f7a;
            box-shadow: 0 0 8px #008f7a;
        }

        .cyber-panel {
            background: #11141a;
            border: 1px solid #21262d;
            padding: 30px;
            font-size: 1.05rem;
            line-height: 1.75;
            color: #cbd5e1;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
        }
        .cyber-panel:hover {
            border-color: #00bfa5;
            background: #161b22;
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 191, 165, 0.1);
        }

        .timeline {
            position: relative;
            border-left: 2px solid #21262d;
            padding-left: 30px;
            margin-left: 5px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .timeline-item {
            position: relative;
        }
        .timeline-dot {
            position: absolute;
            left: -37px;
            top: 6px;
            width: 12px;
            height: 12px;
            background: #008f7a;
            border-radius: 50%;
            box-shadow: 0 0 10px #008f7a;
        }
        .timeline-title {
            font-family: 'Georgia', serif;
            font-weight: 600;
            font-size: 1.15rem;
            color: #ffffff;
            margin: 0;
        }
        .timeline-date {
            color: #00bfa5;
            font-size: 0.88rem;
            margin: 4px 0 10px 0;
            font-style: italic;
        }
        .timeline-desc {
            font-size: 0.95rem;
            color: #94a3b8;
            line-height: 1.6;
        }

        .skills-grid-bento {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .skills-group {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            border-bottom: 1px dashed #21262d;
            padding-bottom: 15px;
        }
        .skills-group:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .skills-group h3 {
            margin: 0;
            min-width: 120px;
            font-size: 0.9rem;
            text-transform: uppercase;
            color: #008f7a;
            letter-spacing: 1.5px;
            padding-top: 6px;
        }
        .tags-cluster {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            flex: 1;
        }
        .tech-tag {
            background: #0d1117;
            border: 1px solid #21262d;
            color: #ffffff;
            padding: 6px 14px;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            transition: all 0.2s ease;
        }
        .tech-tag:hover {
            border-color: #00bfa5;
            background: #1f262f;
            box-shadow: 0 0 10px rgba(0, 191, 165, 0.15);
        }

        .cyber-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .cyber-list-item {
            font-size: 1rem;
            line-height: 1.65;
        }
        .cyber-list-title {
            font-family: 'Georgia', serif;
            color: #ffffff;
            font-size: 1.1rem;
            margin-bottom: 2px;
            display: block;
        }

        .toggle-projects-bar {
            font-family: 'Georgia', serif;
            background: #11141a;
            color: #ffffff;
            border: 1px solid #21262d;
            border-left: 4px solid #008f7a;
            width: 100%;
            padding: 22px;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            text-align: center;
            transition: all 0.25s ease;
        }
        .toggle-projects-bar:hover {
            background: #161b22;
            border-color: #00bfa5;
            box-shadow: 0 4px 20px rgba(0, 191, 165, 0.15);
        }
        .toggle-projects-bar::after {
            content: ' ▼';
            font-size: 0.8rem;
            color: #008f7a;
        }
        .toggle-projects-bar.active::after {
            content: ' ▲';
        }

        .projects-toggle-container {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.6s ease-out, opacity 0.5s ease-out;
            opacity: 0;
        }
        .projects-toggle-container.show {
            max-height: 3000px; 
            opacity: 1;
            margin-top: 40px;
        }

        .search-box {
            width: 100%;
            padding: 16px;
            border: 1px solid #21262d;
            font-size: 1rem;
            margin-bottom: 35px;
            box-sizing: border-box;
            background: #11141a;
            color: #c9d1d9;
        }
        .search-box:focus {
            outline: none;
            border-color: #00bfa5;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            background: #11141a;
            border-left: 4px solid #008f7a; 
            border-top: 1px solid #21262d;
            border-right: 1px solid #21262d;
            border-bottom: 1px solid #21262d;
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-sizing: border-box;
            width: calc(33.333% - 14px); 
            min-width: 240px;
            transition: all 0.25s;
        }
        .card:hover {
            transform: translateY(-4px);
            background: #161b22;
            border-color: #00bfa5;
            box-shadow: 0 8px 25px rgba(0, 191, 165, 0.15);
        }
        .card h4 {
            font-family: 'Georgia', serif;
            margin: 0 0 12px 0;
            color: #008f7a;
            font-size: 1.2rem;
            font-weight: normal;
        }
        .card p {
            font-size: 0.94rem;
            color: #c9d1d9;
            line-height: 1.5;
            margin: 0 0 20px 0;
            text-align: justify;
        }
        .meta {
            font-size: 0.85rem;
            margin-bottom: 20px;
            opacity: 0.8;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        .badge {
            background: #161b22;
            color: #008f7a;
            border: 1px solid #21262d;
            padding: 4px 12px;
            font-weight: bold;
            font-size: 0.8rem;
        }
        .btn {
            display: block;
            background: #008f7a;
            color: #fff;
            padding: 12px;
            text-decoration: none;
            font-size: 0.85rem;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.2s;
        }
        .btn:hover {
            background: #00bfa5;
        }
        .loading { color: #c9d1d9; font-style: italic; text-align: center; margin: 20px 0; opacity: 0.8; }
        .btn-load { display: block; width: 180px; margin: 25px auto 0; background: transparent; border: 1px solid #008f7a; color: #008f7a; padding: 12px; cursor: pointer; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; transition: 0.2s; }
        .btn-load:hover { background: #008f7a; color: #fff; box-shadow: 0 0 10px rgba(0, 143, 122, 0.3); }

        @media (max-width: 1200px) {
            .card { width: calc(50% - 10px); }
        }
        @media (max-width: 992px) {
            body { overflow: auto; }
            .split-layout { flex-direction: column; height: auto; }
            .left-hero { width: 100%; min-width: 100%; position: relative; height: auto; padding: 40px; border-right: none; border-bottom: 1px solid #21262d; overflow-y: visible; }
            .right-scroll { margin-left: 0; padding: 40px; height: auto; overflow: visible; }
            .bento-skills { grid-template-columns: 1fr; }
            .card { width: 100%; }
        }
        @media (max-width: 768px) {
            .card { width: 100%; }
            body { border-width: 12px; }
            .left-hero, .right-scroll { padding: 25px; }
            .hero-main h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <div class="split-layout">
        
        <aside class="left-hero">
            <div class="hero-main">
                <img src="profil.jpg" alt="Antonia Șchiopu" class="profile-img" onerror="this.src='https://via.placeholder.com/150'">
                <div>
                    <h1>ANTONIA<br>ȘCHIOPU</h1>
                    <p style="margin-top: 15px;">Studentă la Ingineria Calculatoarelor</p>
                </div>
            </div>

            <div class="hero-footer">
                <div class="info-row"><strong>Locație:</strong> <span>Sibiu, România</span></div>
                <div class="info-row"><strong>Naționalitate:</strong> <span>Română</span></div>
                <div class="info-row"><strong>Data Nașterii:</strong> <span>01.02.2005</span></div>
                <div class="info-row"><strong>Permis:</strong> <span>Categoria B</span></div>
                <div class="info-row"><strong>E-mail:</strong> <span>schiopuantonia3@gmail.com</span></div>
                <div class="info-row"><strong>Telefon:</strong> <span>0746 934 081</span></div>
                <div class="info-row" style="border:none; padding:0;">
                    <strong>Rețele:</strong>
                    <div class="social-links">
                        <a href="https://linkedin.com" target="_blank">LinkedIn</a>
                        <a href="https://github.com/AntoniaSchiopu1" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
        </aside>

        <main class="right-scroll">
            <div class="section-container">
                <h2 class="section-headline">Despre mine</h2>
                <div class="cyber-panel">
                    Studentă în anul II la Ingineria Calculatoarelor (ULBS), axată pe însușirea fundamentelor de programare, ale algoritmicii, electronicii și matematicii. Dețin cunoștințe de C++, Java, Python și electrică. Îmi doresc obținerea unui stagiu de practică, cu posibilitatea de prelungire într-un internship, pentru a contribui activ în cadrul unei echipe și pentru a-mi construi o bază solidă în domeniu.
                </div>
            </div>

            <div class="section-container">
                <h2 class="section-headline">Educație</h2>
                <div class="cyber-panel">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-title">Universitatea „Lucian Blaga” din Sibiu (Facultatea de Inginerie)</div>
                            <div class="timeline-date">octombrie 2024 - Prezent</div>
                            <div class="timeline-desc">Specializarea: Calculatoare. Studiu focalizat pe algoritmică avansată, structuri logice, circuite electrice și arhitectura calculatoarelor.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-title">Facultatea de Științe Socio-Umane</div>
                            <div class="timeline-date">octombrie 2024 - Prezent</div>
                            <div class="timeline-desc">Departamentul pentru Pregătirea Personalului Didactic, Program de formare psihopedagogică, Nivel 1.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-title">Liceul Teoretic „Onisifor Ghibu”, Sibiu</div>
                            <div class="timeline-date">septembrie 2020 - iulie 2024</div>
                            <div class="timeline-desc">Profilul: Matematică-Informatică, Intensiv Informatică. Absolvit cu focus pe programare procedurală, structuri de date de bază și dobândirea atestatului profesional.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-title">Școala Gimnazială 'Badea Cîrțan' Cîrțișoara</div>
                            <div class="timeline-date">2010 - 2020</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-container">
                <h2 class="section-headline">Competențe</h2>
                <div class="cyber-panel">
                    <div class="skills-grid-bento">
                        <div class="skills-group">
                            <h3>Limbaje</h3>
                            <div class="tags-cluster">
                                <div class="tech-tag">C++</div>
                                <div class="tech-tag">Java</div>
                                <div class="tech-tag">Python</div>
                                <div class="tech-tag">C#</div>
                                <div class="tech-tag">HTML / CSS</div>
                            </div>
                        </div>
                        <div class="skills-group">
                            <h3>Tehnologii</h3>
                            <div class="tags-cluster">
                                <div class="tech-tag">HTML5</div>
                                <div class="tech-tag">CSS3</div>
                                <div class="tech-tag">.NET Framework</div>
                                <div class="tech-tag">WinForms</div>
                            </div>
                        </div>
                        <div class="skills-group">
                            <h3>Instrumente</h3>
                            <div class="tags-cluster">
                                <div class="tech-tag">Visual Studio</div>
                                <div class="tech-tag">VS Code</div>
                                <div class="tech-tag">IntelliJ</div>
                                <div class="tech-tag">Git</div>
                                <div class="tech-tag">GitHub</div>
                            </div>
                        </div>
                        <div class="skills-group">
                            <h3>Lingvistice</h3>
                            <div class="tags-cluster">
                                <div class="tech-tag">Engleză (B1)</div>
                                <div class="tech-tag">Franceză (B1)</div>
                                <div class="tech-tag">Digitale (ECDL)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-container">
                <h2 class="section-headline">Activitate & Valori</h2>
                <div class="cyber-panel">
                    <div class="cyber-list">
                        <div class="cyber-list-item">
                            <span class="cyber-list-title">Dansuri populare</span>
                            Practicate pe parcursul a 9 ani, activitate colectivă de înaltă coordonare care mi-a definit disciplina, rigurozitatea și spiritul de cooperare în echipă.
                        </div>
                        <div class="cyber-list-item">
                            <span class="cyber-list-title">Sport și drumeții</span>
                            Antrenamentele fizice și drumețiile montane îmi consolidează anduranța, rezistența la stres și capacitatea de concentrare pe termene lungi.
                        </div>
                        <div class="cyber-list-item">
                            <span class="cyber-list-title">Călătorii</span>
                            Explorarea spațiilor noi îmi dezvoltă adaptabilitatea rapidă și abilitatea de a analiza situațiile complexe din perspective diferite.
                        </div>
                        <div style="margin-top:15px; border-top: 1px dashed #21262d; padding-top:15px; font-size:0.95rem; opacity:0.85;">
                            <strong>Calități cheie:</strong> Orientare algoritmică spre rezolvarea problemelor logice, punctualitate, spirit de inițiativă colectivă și capacitate avansată de auto-învățare accelerată.
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button class="toggle-projects-bar" id="toggleProjectsBtn">Explorează Portofoliu Proiecte GitHub</button>
                <div class="projects-toggle-container" id="projectsContainer">
                    <input type="text" id="search" class="search-box" placeholder="Filtrează proiectele după nume sau limbaj de programare...">
                    <div id="loading" class="loading">Se încarcă proiectele din sistem...</div>
                    <div id="grid" class="grid"></div>
                    <button id="loadMore" class="btn-load" style="display: none;">Încarcă mai multe</button>
                </div>
            </div>
        </main>

    </div>

    <script>
        let proiecte = [];
        let afisateAcum = 0;
        const portie = 6; 

        const grid = document.getElementById('grid');
        const loading = document.getElementById('loading');
        const searchInput = document.getElementById('search');
        const loadMoreBtn = document.getElementById('loadMore');
        const toggleBtn = document.getElementById('toggleProjectsBtn');
        const container = document.getElementById('projectsContainer');
        const rightScroll = document.querySelector('.right-scroll');

        toggleBtn.addEventListener('click', () => {
            toggleBtn.classList.toggle('active');
            container.classList.toggle('show');
            if (container.classList.contains('show')) {
                container.style.maxHeight = container.scrollHeight + "px";
                setTimeout(() => {
                    rightScroll.scrollTo({
                        top: toggleBtn.offsetTop - 40,
                        behavior: 'smooth'
                    });
                }, 100);
            } else {
                container.style.maxHeight = null;
            }
        });

        function updateProjectsHeight() {
            if (container.classList.contains('show')) {
                container.style.maxHeight = container.scrollHeight + "px";
            }
        }

        function incarcaProiecteDeRezerva() {
            proiecte = [
                {name: 'Paradigme', description: 'Aplicație de gestionare și management pentru studenți dezvoltată în IntelliJ IDEA, axată pe studiul și implementarea diferitelor paradigme de programare.', language: 'Java', stargazers_count: 0, forks_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/Paradigme'},
                {name: 'ProiectColivie', description: 'Aplicație grafică 3D/2D dezvoltată în C++ utilizând biblioteca OpenGL pentru randarea și simularea vizuală a unui mediu interactiv.', language: 'C++', stargazers_count: 0, forks_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/ProiectColivie'},
                {name: 'AppMoara', description: 'Implementarea digitală a jocului clasic de societate "Moara" (Nine Men\'s Morris), realizată în C# cu logica completă a regulilor de joc.', language: 'C#', stargazers_count: 0, forks_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/AppMoara'},
                {name: 'Atestat_Liceu', description: 'Mini-joc interactiv dezvoltat în C#, realizat ca proiect pentru examenul de certificare a competențelor profesionale la informatică.', language: 'C#', stargazers_count: 0, forks_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/Atestat_Liceu'},
                {name: 'CV', description: 'Portofoliu web dinamic realizat în PHP cu integrare GitHub API și bază de date.', language: 'PHP', stargazers_count: 0, forks_count: 0, html_url: 'https://github.com/AntoniaSchiopu1/CV'}
            ];
            loading.style.display = 'none';
            randare(true);
        }

        async function fetchProiecte() {
            try {
                const res = await fetch('api.php');
                if (!res.ok) {
                    incarcaProiecteDeRezerva();
                    return;
                }
                proiecte = await res.json();
                loading.style.display = 'none';
                if (!proiecte || proiecte.length === 0) {
                    incarcaProiecteDeRezerva();
                } else {
                    randare(true);
                }
            } catch (err) {
                incarcaProiecteDeRezerva();
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
                            <span style="font-size:0.85rem; margin-left:8px;">★ ${p.stargazers_count}</span>
                            <span style="font-size:0.85rem; margin-left:8px;">⑂ ${p.forks_count}</span>
                        </div>
                        <a href="${p.html_url}" target="_blank" class="btn">Vezi Cod Sursă</a>
                    </div>
                `;
                grid.appendChild(card);
            });

            afisateAcum += deAfisat.length;
            loadMoreBtn.style.display = (afisateAcum < filtrate.length) ? 'block' : 'none';
            setTimeout(updateProjectsHeight, 50);
        }

        searchInput.addEventListener('input', () => randare(true));
        loadMoreBtn.addEventListener('click', () => randare(false));

        fetchProiecte();
    </script>
</body>
</html>

