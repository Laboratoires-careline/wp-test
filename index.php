<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laboratoires Careline</title>
<meta name="description" content="Les Laboratoires Careline conçoivent, fabriquent et distribuent des produits paramédicaux de confort et de rééducation pour les professionnels de santé, les établissements médicaux et les particuliers.">

<!-- Favicon -->
<link rel="icon" type="image/png" href="favicon.png">

<!-- Canonical : remplace par ton nom de domaine définitif (OVH) -->
<link rel="canonical" href="https://www.laboratoires-careline.fr/">

<!-- Open Graph / partage social : adapte le domaine ci-dessous -->
<meta property="og:title" content="Laboratoires Careline">
<meta property="og:description" content="Conception, fabrication et distribution de dispositifs paramédicaux pour les professionnels de santé, établissements médicaux et particuliers.">
<meta property="og:image" content="https://www.laboratoires-careline.fr/banniere.png">
<meta property="og:url" content="https://www.laboratoires-careline.fr/">
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta name="theme-color" content="#65BD71">

<!-- Polices en local (RGPD) : plus aucune requête vers fonts.googleapis.com -->
<link href="fonts/fonts.css" rel="stylesheet">

<style>
  :root{
    /* Identité Careline — vert pomme & blanc */
    --green-50:#F4FAF2;
    --green-100:#E6F4E2;
    --green-200:#CCE8C4;
    --green-300:#ABD89F;
    --green-400:#94CE90;
    --green-500:#65BD71;   /* vert pomme — couleur principale */
    --green-600:#4EA65E;
    --green-700:#32764F;   /* vert profond — titres, fonds sombres */
    --green-800:#245740;
    --green-900:#193D2D;

    --white:#FFFFFF;
    --ink:#1C3327;
    --ink-soft:#5A6B60;
    --line:rgba(28,51,39,0.10);

    --radius-lg:28px;
    --radius-md:20px;
    --radius-sm:14px;
    --maxw:1180px;
    --shadow-sm:0 1px 2px rgba(28,51,39,0.04), 0 4px 16px rgba(28,51,39,0.05);
    --shadow-md:0 2px 6px rgba(28,51,39,0.06), 0 12px 32px rgba(28,51,39,0.08);
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    background:var(--white);
    color:var(--ink);
    font-family:'Source Sans 3', sans-serif;
    font-size:17px;
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  h1,h2,h3{
    font-family:'Montserrat', sans-serif;
    color:var(--ink);
    margin:0;
    line-height:1.15;
  }
  a{color:inherit;}
  img{display:block;max-width:100%;height:auto;}
  .wrap{max-width:var(--maxw);margin:0 auto;padding:0 32px;}

  .kicker{
    font-size:13px;font-weight:700;letter-spacing:0.09em;text-transform:uppercase;
    color:var(--green-600);margin:0 0 12px;
  }

  /* Lien d'évitement (accessibilité clavier) */
  .skip-link{
    position:absolute;left:-999px;top:auto;
    background:var(--green-700);color:#fff;
    padding:10px 18px;border-radius:8px;
    font-family:'Source Sans 3',sans-serif;font-weight:600;
    z-index:100;
  }
  .skip-link:focus{left:16px;top:16px;}

  :focus-visible{
    outline:3px solid var(--green-500);
    outline-offset:3px;
    border-radius:4px;
  }

  /* ---------- Header ---------- */
  header{
    position:sticky;top:0;z-index:50;
    background:rgba(255,255,255,0.88);
    backdrop-filter:blur(10px);
    border-bottom:1px solid var(--line);
  }
  header .wrap{
    display:flex;align-items:center;justify-content:space-between;
    padding-top:14px;padding-bottom:14px;
  }
  .brand{display:flex;align-items:center;}
  .brand .logo-lockup{height:46px;width:auto;display:block;}
  nav{display:flex;align-items:center;gap:32px;}
  nav a{
    font-weight:600;font-size:15px;text-decoration:none;color:var(--ink);
    opacity:0.72;transition:opacity .15s ease, color .15s ease;
  }
  nav a:hover{opacity:1;color:var(--green-700);}
  .btn{
    display:inline-block;
    font-family:'Source Sans 3', sans-serif;
    font-weight:600;font-size:15px;
    padding:12px 26px;border-radius:100px;
    text-decoration:none;
    border:1px solid transparent;
    cursor:pointer;
    white-space:nowrap;
    transition:background .18s ease, border-color .18s ease, transform .18s ease;
  }
  .btn-primary{background:var(--green-500);color:#fff;box-shadow:0 4px 14px rgba(101,189,113,0.30);}
  .btn-primary:hover{background:var(--green-600);transform:translateY(-1px);}
  .btn-ghost{background:transparent;color:var(--green-700);border-color:var(--green-300);}
  .btn-ghost:hover{background:var(--green-50);border-color:var(--green-500);}
  .nav-toggle{display:none;}
  #nav-check{display:none;}

  /* ---------- Hero ---------- */
  .hero{
    padding:100px 0 120px;
    background:
      radial-gradient(900px 520px at 88% 8%, var(--green-100) 0%, rgba(230,244,226,0) 62%),
      linear-gradient(180deg, var(--green-50) 0%, var(--white) 72%);
  }
  .hero .wrap{
    display:grid;grid-template-columns:1.08fr 0.92fr;gap:64px;align-items:center;
  }
  .eyebrow{
    display:inline-flex;align-items:center;gap:9px;
    font-size:13px;font-weight:600;letter-spacing:0.07em;text-transform:uppercase;
    color:var(--green-700);
    background:var(--green-100);
    padding:7px 16px;border-radius:100px;
    margin:0 0 24px;
  }
  .eyebrow::before{
    content:'';width:7px;height:7px;border-radius:50%;background:var(--green-500);
  }
  .hero h1{
    font-size:clamp(36px,4.6vw,56px);
    font-weight:800;
    letter-spacing:-0.02em;
    max-width:15ch;
  }
  .hero h1 em{font-style:normal;color:var(--green-600);}
  .hero p.lead{
    margin-top:22px;max-width:46ch;
    font-size:19px;color:var(--ink-soft);
  }
  .hero .cta-row{display:flex;gap:14px;margin-top:36px;flex-wrap:wrap;}

  /* Visuel hero : formes organiques vertes */
  .shape-field{position:relative;aspect-ratio:1/0.95;}
  .blob{position:absolute;}
  .blob.b1{
    width:76%;height:76%;top:6%;right:2%;
    background:linear-gradient(145deg, var(--green-300), var(--green-500));
    border-radius:56% 44% 48% 52% / 50% 46% 54% 50%;
  }
  .blob.b2{
    width:46%;height:46%;left:0;bottom:12%;
    background:linear-gradient(145deg, var(--green-400), var(--green-600));
    border-radius:50% 50% 46% 54% / 54% 50% 50% 46%;
    opacity:0.92;
  }
  .blob.b3{
    width:26%;height:26%;left:30%;top:2%;
    background:var(--green-200);
    border-radius:50%;
  }
  .blob.b4{
    width:15%;height:15%;right:6%;bottom:8%;
    background:var(--green-700);
    border-radius:50%;
    opacity:0.85;
  }
  .blob.b5{
    width:9%;height:9%;left:24%;bottom:4%;
    background:var(--green-500);
    border-radius:50%;
  }

  /* ---------- Sections generic ---------- */
  section{padding:92px 0;}
  .section-head{max-width:58ch;margin-bottom:52px;}
  .section-head h2{font-size:clamp(27px,3vw,36px);font-weight:700;letter-spacing:-0.01em;}
  .section-head p{margin-top:14px;color:var(--ink-soft);font-size:17px;}

  /* ---------- À propos ---------- */
  .about{background:var(--green-50);}
  .about .wrap{
    display:grid;grid-template-columns:0.88fr 1.12fr;gap:64px;align-items:center;
  }
  .about-visual{
    background:var(--white);
    border:1px solid var(--line);
    border-radius:var(--radius-lg);
    padding:46px;
    box-shadow:var(--shadow-sm);
  }
  .about-visual .ring{
    width:100%;aspect-ratio:1;border-radius:50%;
    background:conic-gradient(from 210deg,
      var(--green-300) 0 25%,
      var(--green-500) 25% 52%,
      var(--green-600) 52% 76%,
      var(--green-700) 76% 100%);
    display:flex;align-items:center;justify-content:center;
    padding:16px;
  }
  .about-visual .ring-core{
    width:100%;height:100%;border-radius:50%;background:var(--white);
    display:flex;align-items:center;justify-content:center;
    text-align:center;padding:14px;
  }
  .about-visual .ring-core strong{
    font-family:'Montserrat',sans-serif;font-size:15px;color:var(--green-700);
    display:block;max-width:13ch;line-height:1.35;font-weight:700;
  }
  .about-copy h2{font-size:clamp(27px,3vw,36px);font-weight:700;letter-spacing:-0.01em;}
  .about-copy p{margin-top:20px;color:var(--ink-soft);font-size:17px;max-width:52ch;}
  .about-copy p.kicker{margin-top:0;}
  .about-stats{
    display:flex;gap:44px;margin-top:36px;flex-wrap:wrap;
    padding-top:28px;border-top:1px solid var(--line);
  }
  .about-stats div strong{
    display:block;font-family:'Montserrat',sans-serif;
    font-size:30px;font-weight:800;color:var(--green-600);line-height:1;
  }
  .about-stats div span{font-size:14px;color:var(--ink-soft);display:block;margin-top:6px;}

  /* ---------- Produits ---------- */
  .gammes{background:var(--white);}
  .gammes-grid{
    display:grid;grid-template-columns:repeat(auto-fit,minmax(248px,1fr));
    gap:20px;
  }
  .gamme-card{
    background:var(--white);
    border:1px solid var(--line);
    border-radius:var(--radius-md);
    padding:30px 26px;
    min-height:216px;
    display:flex;flex-direction:column;justify-content:space-between;
    transition:transform .2s ease, box-shadow .2s ease, border-color .2s ease;
  }
  .gamme-card:hover{
    transform:translateY(-4px);
    box-shadow:var(--shadow-md);
    border-color:var(--green-300);
  }
  .gamme-card h3{font-size:19px;font-weight:700;color:var(--ink);}
  .gamme-card p{margin-top:11px;font-size:15px;line-height:1.55;color:var(--ink-soft);}
  .gamme-card .mark{
    width:46px;height:46px;border-radius:var(--radius-sm);
    display:flex;align-items:center;justify-content:center;
  }
  .gamme-card .mark svg{
    width:23px;height:23px;stroke:currentColor;fill:none;
    stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;
  }
  /* Dégradé d'intensité sur les pastilles, du plus clair au plus profond */
  .gamme-card:nth-child(1) .mark{background:var(--green-100);color:var(--green-600);}
  .gamme-card:nth-child(2) .mark{background:var(--green-200);color:var(--green-700);}
  .gamme-card:nth-child(3) .mark{background:var(--green-300);color:var(--green-800);}
  .gamme-card:nth-child(4) .mark{background:var(--green-500);color:#fff;}
  .gamme-card:nth-child(5) .mark{background:var(--green-700);color:#fff;}

  /* ---------- Engagements ---------- */
  .engagements{
    background:var(--green-800);
    color:#fff;
    background-image:radial-gradient(700px 380px at 12% 0%, rgba(101,189,113,0.22) 0%, rgba(101,189,113,0) 60%);
  }
  .engagements .kicker{color:var(--green-300);}
  .engagements .section-head h2{color:#fff;}
  .engagements .section-head p{color:rgba(255,255,255,0.68);}
  .eng-list{
    display:grid;grid-template-columns:repeat(auto-fit,minmax(196px,1fr));
    gap:34px;
  }
  .eng-item h3{
    font-size:18px;font-weight:700;color:#fff;
    padding-bottom:14px;margin-bottom:12px;
    border-bottom:2px solid var(--green-500);
  }
  .eng-item p{font-size:15px;color:rgba(255,255,255,0.70);}

  /* ---------- Implantations ---------- */
  .sites{background:var(--green-50);}
  .sites-grid{
    display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;
  }
  .site-card{
    background:var(--white);
    border:1px solid var(--line);
    border-radius:var(--radius-md);
    padding:32px 30px;
    box-shadow:var(--shadow-sm);
  }
  .site-card .city{
    font-family:'Montserrat',sans-serif;font-size:13px;font-weight:700;
    letter-spacing:0.09em;text-transform:uppercase;color:var(--green-600);
    margin:0;
  }
  .site-card h3{font-size:21px;font-weight:700;margin-top:8px;}
  .site-card p{margin:12px 0 0;font-size:15px;color:var(--ink-soft);}

  /* ---------- Contact ---------- */
  .contact{
    background:linear-gradient(135deg, var(--green-600) 0%, var(--green-500) 55%, var(--green-400) 100%);
    color:#fff;text-align:center;
  }
  .contact h2{font-size:clamp(28px,3.4vw,40px);font-weight:800;color:#fff;max-width:20ch;margin:0 auto;letter-spacing:-0.01em;}
  .contact p{margin-top:16px;font-size:18px;color:rgba(255,255,255,0.92);}
  .contact .btn-primary{
    background:#fff;color:var(--green-700);margin-top:32px;
    font-size:16px;padding:15px 32px;
    box-shadow:0 8px 24px rgba(25,61,45,0.18);
  }
  .contact .btn-primary:hover{background:var(--green-50);}

  /* ---------- Footer ---------- */
  footer{background:var(--white);border-top:1px solid var(--line);}
  footer .wrap{
    padding:32px;display:flex;align-items:center;justify-content:space-between;
    gap:20px;flex-wrap:wrap;
  }
  footer .fmark{display:flex;align-items:center;gap:12px;}
  footer .fmark .logo-mark{height:34px;width:auto;display:block;flex:none;}
  footer .fmark span{font-size:14px;color:var(--ink-soft);}
  footer .flinks{display:flex;gap:22px;flex-wrap:wrap;}
  footer .flinks a{font-size:14px;color:var(--ink-soft);text-decoration:none;}
  footer .flinks a:hover{color:var(--green-700);}

  /* ---------- Responsive ---------- */
  @media (max-width:860px){
    .hero .wrap{grid-template-columns:1fr;gap:48px;}
    .hero{padding:60px 0 80px;}
    .shape-field{max-width:320px;margin:0 auto;}
    .about .wrap{grid-template-columns:1fr;gap:40px;}
    .about-visual{max-width:300px;margin:0 auto;padding:34px;}
    .about-stats{gap:30px;}
    section{padding:64px 0;}
    .wrap{padding:0 22px;}
    nav{
      position:absolute;top:100%;left:0;right:0;
      background:var(--white);
      flex-direction:column;align-items:flex-start;
      padding:20px 22px 26px;gap:18px;
      border-bottom:1px solid var(--line);
      box-shadow:var(--shadow-sm);
      display:none;
    }
    #nav-check:checked ~ nav{display:flex;}
    .nav-toggle{
      display:inline-flex;align-items:center;justify-content:center;
      width:42px;height:42px;border-radius:50%;
      border:1px solid var(--green-300);
      cursor:pointer;
    }
    .nav-toggle span, .nav-toggle span::before, .nav-toggle span::after{
      content:'';display:block;width:18px;height:2px;background:var(--green-700);
      position:relative;border-radius:2px;
    }
    .nav-toggle span::before{position:absolute;top:-6px;}
    .nav-toggle span::after{position:absolute;top:6px;}
    .header-actions{display:flex;align-items:center;gap:8px;}
    .header-actions .btn-primary{padding:10px 16px;font-size:14px;white-space:nowrap;}
    .brand .logo-lockup{height:34px;}
  }
  @media (min-width:861px){
    .nav-toggle{display:none;}
  }

  @media (prefers-reduced-motion: reduce){
    html{scroll-behavior:auto;}
    *{transition:none !important;}
  }
</style>
</head>
<body>

<a href="#top" class="skip-link">Aller au contenu principal</a>

<header>
  <div class="wrap">
    <a class="brand" href="#top" aria-label="Laboratoires Careline — accueil">
      <svg class="logo-lockup" viewBox="0 0 268 62" role="img" aria-label="Laboratoires Careline">
        <defs>
          <linearGradient id="cl-cloud" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#ABD89F"/>
            <stop offset="55%" stop-color="#7FC77E"/>
            <stop offset="100%" stop-color="#4EA65E"/>
          </linearGradient>
        </defs>
        <!-- Symbole : nuage + cœur -->
        <g transform="translate(2,4)">
          <g fill="url(#cl-cloud)">
            <circle cx="29" cy="21" r="13"/>
            <circle cx="17" cy="28" r="10"/>
            <circle cx="41" cy="28" r="10"/>
            <rect x="7" y="27" width="44" height="11" rx="5.5"/>
          </g>
          <path d="M29 37s-9.5-6-9.5-12c0-3.6 3-5.4 5.4-5.4 2.1 0 3.5 1.2 4.1 2.4.6-1.2 2-2.4 4.1-2.4 2.4 0 5.4 1.8 5.4 5.4C38.5 31 29 37 29 37Z" fill="#fff"/>
          <!-- Étincelles -->
          <path d="M12 6c.6 2.2 1.2 2.8 3.2 3.4-2 .6-2.6 1.2-3.2 3.4-.6-2.2-1.2-2.8-3.2-3.4C10.8 8.8 11.4 8.2 12 6Z" fill="#7FC77E"/>
          <path d="M47 3c.5 1.8 1 2.3 2.6 2.8-1.6.5-2.1 1-2.6 2.8-.5-1.8-1-2.3-2.6-2.8C46 5.3 46.5 4.8 47 3Z" fill="#94CE90"/>
          <path d="M53 13c.4 1.4.8 1.8 2.1 2.2-1.3.4-1.7.8-2.1 2.2-.4-1.4-.8-1.8-2.1-2.2 1.3-.4 1.7-.8 2.1-2.2Z" fill="#ABD89F"/>
          <!-- Courbes de sol -->
          <path d="M8 45c8-4 34-4 43 0" stroke="#4EA65E" stroke-width="2.2" fill="none" stroke-linecap="round"/>
          <path d="M13 50c7-3 25-3 33 0" stroke="#7FC77E" stroke-width="2" fill="none" stroke-linecap="round"/>
        </g>
        <!-- Typographie -->
        <text x="70" y="24" font-family="Montserrat, sans-serif" font-size="12.5" font-weight="700"
              letter-spacing="3.1" fill="#4EA65E">LABORATOIRES</text>
        <text x="69" y="50" font-family="Montserrat, sans-serif" font-size="27" font-weight="800"
              letter-spacing="-0.6" fill="#256B47">Careline</text>
      </svg>
    </a>
    <input type="checkbox" id="nav-check">
    <div class="header-actions">
      <a class="btn btn-primary" href="#contact">Nous contacter</a>
      <label class="nav-toggle" for="nav-check" aria-label="Ouvrir le menu" role="button" aria-expanded="false"><span></span></label>
    </div>
    <nav>
      <a href="#apropos">L'entreprise</a>
      <a href="#gammes">Nos produits</a>
      <a href="#engagements">Nos engagements</a>
      <a href="#sites">Nos sites</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<main id="top">

  <section class="hero">
    <div class="wrap">
      <div class="hero-copy">
        <p class="eyebrow">Dispositifs paramédicaux</p>
        <h1>Des dispositifs de confort et de rééducation <em>conçus pour durer</em>.</h1>
        <p class="lead">Les Laboratoires Careline conçoivent, fabriquent et distribuent des produits paramédicaux pour les professionnels de santé, les établissements médicaux et les particuliers.</p>
        <div class="cta-row">
          <a class="btn btn-primary" href="#gammes">Découvrir nos produits</a>
          <a class="btn btn-ghost" href="#apropos">L'entreprise</a>
        </div>
      </div>
      <div class="shape-field" aria-hidden="true">
        <div class="blob b1"></div>
        <div class="blob b2"></div>
        <div class="blob b3"></div>
        <div class="blob b4"></div>
        <div class="blob b5"></div>
      </div>
    </div>
  </section>

  <section class="about" id="apropos">
    <div class="wrap">
      <div class="about-visual">
        <div class="ring">
          <div class="ring-core"><strong>Conception, fabrication, distribution</strong></div>
        </div>
      </div>
      <div class="about-copy">
        <p class="kicker">Notre entreprise</p>
        <h2>Une maîtrise complète, de l'idée au service après-vente</h2>
        <p>Notre bureau d'études met au point de nouveaux dispositifs de confort et de rééducation, produits ensuite dans notre atelier et commercialisés auprès d'un réseau de distributeurs spécialisés.</p>
        <p>Un service après-vente dédié assure la réparation et le suivi qualité de chaque produit, pour un accompagnement dans la durée.</p>
        <div class="about-stats">
          <div><strong>2</strong><span>sites en France</span></div>
          <div><strong>9</strong><span>services métiers</span></div>
          <div><strong>36</strong><span>collaborateurs</span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="gammes" id="gammes">
    <div class="wrap">
      <div class="section-head">
        <p class="kicker">Nos produits</p>
        <h2>Cinq familles de dispositifs</h2>
        <p>Conçues pour les professionnels de santé, les établissements médicaux et les particuliers.</p>
      </div>
      <div class="gammes-grid">
        <div class="gamme-card">
          <div class="mark" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 4v10m0 0-3.5 6m3.5-6 3.5 6M6 9h12"/><circle cx="12" cy="4" r="1.6"/></svg>
          </div>
          <div><h3>Aides à la mobilité</h3><p>Cannes, déambulateurs et fauteuils pour accompagner les déplacements au quotidien.</p></div>
        </div>
        <div class="gamme-card">
          <div class="mark" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 21s-7-4.6-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 5.4-7 10-7 10Z"/></svg>
          </div>
          <div><h3>Orthèses et maintien</h3><p>Genouillères, ceintures lombaires et attelles pour le soutien et la contention.</p></div>
        </div>
        <div class="gamme-card">
          <div class="mark" aria-hidden="true">
            <svg viewBox="0 0 24 24"><rect x="3" y="8" width="18" height="10" rx="3"/><path d="M7 8V6.5A1.5 1.5 0 0 1 8.5 5h7A1.5 1.5 0 0 1 17 6.5V8"/></svg>
          </div>
          <div><h3>Confort et positionnement</h3><p>Coussins, cales et matelas pour prévenir les points d'appui prolongés.</p></div>
        </div>
        <div class="gamme-card">
          <div class="mark" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M3 12h3l2.5-6 3 12 2.5-6H21"/></svg>
          </div>
          <div><h3>Rééducation fonctionnelle</h3><p>Matériel de kinésithérapie pour accompagner la rééducation et le renforcement.</p></div>
        </div>
        <div class="gamme-card">
          <div class="mark" aria-hidden="true">
            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="4"/><path d="M12 8v8M8 12h8"/></svg>
          </div>
          <div><h3>Petit matériel médical</h3><p>Accessoires et consommables pour les professionnels de santé et les établissements.</p></div>
        </div>
      </div>
    </div>
  </section>

  <section class="engagements" id="engagements">
    <div class="wrap">
      <div class="section-head">
        <p class="kicker">Nos engagements</p>
        <h2>Les principes qui encadrent chaque produit</h2>
        <p>De sa conception dans notre bureau d'études jusqu'à son suivi après-vente.</p>
      </div>
      <div class="eng-list">
        <div class="eng-item">
          <h3>Conformité</h3>
          <p>Des dispositifs conçus et fabriqués selon les normes en vigueur.</p>
        </div>
        <div class="eng-item">
          <h3>Qualité</h3>
          <p>Un service après-vente dédié à la réparation et au suivi de chaque produit.</p>
        </div>
        <div class="eng-item">
          <h3>Expertise</h3>
          <p>Un bureau d'études dédié à l'amélioration continue de nos dispositifs.</p>
        </div>
        <div class="eng-item">
          <h3>Réactivité</h3>
          <p>Une logistique dédiée à l'expédition et au traitement des retours.</p>
        </div>
        <div class="eng-item">
          <h3>Proximité</h3>
          <p>Un réseau de distributeurs spécialisés à travers le pays.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="sites" id="sites">
    <div class="wrap">
      <div class="section-head">
        <p class="kicker">Nos implantations</p>
        <h2>Deux sites, une même exigence</h2>
      </div>
      <div class="sites-grid">
        <div class="site-card">
          <p class="city">Lyon</p>
          <h3>Siège social et production</h3>
          <p>Le siège regroupe la direction, le bureau d'études, l'atelier de production et les services administratifs.</p>
        </div>
        <div class="site-card">
          <p class="city">Tours</p>
          <h3>Logistique et service après-vente</h3>
          <p>Le site assure le stockage, l'expédition des produits ainsi que le traitement des retours et des réparations.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="wrap">
      <h2>Une question sur nos produits ?</h2>
      <p>Notre équipe vous répond directement par e-mail.</p>
      <a class="btn btn-primary" href="mailto:contact@laboratoires-careline.fr">contact@laboratoires-careline.fr</a>
    </div>
  </section>

</main>

<footer>
  <div class="wrap">
    <div class="fmark">
      <svg class="logo-mark" viewBox="0 0 58 56" role="img" aria-label="Laboratoires Careline">
        <defs>
          <linearGradient id="cl-cloud-f" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#ABD89F"/>
            <stop offset="55%" stop-color="#7FC77E"/>
            <stop offset="100%" stop-color="#4EA65E"/>
          </linearGradient>
        </defs>
        <g fill="url(#cl-cloud-f)">
          <circle cx="29" cy="21" r="13"/>
          <circle cx="17" cy="28" r="10"/>
          <circle cx="41" cy="28" r="10"/>
          <rect x="7" y="27" width="44" height="11" rx="5.5"/>
        </g>
        <path d="M29 37s-9.5-6-9.5-12c0-3.6 3-5.4 5.4-5.4 2.1 0 3.5 1.2 4.1 2.4.6-1.2 2-2.4 4.1-2.4 2.4 0 5.4 1.8 5.4 5.4C38.5 31 29 37 29 37Z" fill="#fff"/>
        <path d="M12 6c.6 2.2 1.2 2.8 3.2 3.4-2 .6-2.6 1.2-3.2 3.4-.6-2.2-1.2-2.8-3.2-3.4C10.8 8.8 11.4 8.2 12 6Z" fill="#7FC77E"/>
        <path d="M47 3c.5 1.8 1 2.3 2.6 2.8-1.6.5-2.1 1-2.6 2.8-.5-1.8-1-2.3-2.6-2.8C46 5.3 46.5 4.8 47 3Z" fill="#94CE90"/>
        <path d="M8 45c8-4 34-4 43 0" stroke="#4EA65E" stroke-width="2.2" fill="none" stroke-linecap="round"/>
        <path d="M13 50c7-3 25-3 33 0" stroke="#7FC77E" stroke-width="2" fill="none" stroke-linecap="round"/>
      </svg>
      <span>© 2026 Laboratoires Careline. Tous droits réservés.</span>
    </div>
    <div class="flinks">
      <a href="#apropos">L'entreprise</a>
      <a href="#gammes">Nos produits</a>
      <a href="#sites">Nos sites</a>
      <a href="#contact">Contact</a>
      <a href="mentions-legales.html">Mentions légales</a>
      <a href="politique-confidentialite.html">Politique de confidentialité</a>
    </div>
  </div>
</footer>

</body>
</html>
