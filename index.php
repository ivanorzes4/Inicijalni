<?php
// TSD-4RT | I.K. | 13.10.2026.
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CYBERGUARD | Informacijska sigurnost</title>

    <meta name="description"
          content="CYBERGUARD pruža profesionalne usluge informacijske sigurnosti, sigurnosne provjere web stranica, procjenu ranjivosti i edukaciju.">

    <meta name="keywords"
          content="informacijska sigurnost, cybersecurity, sigurnost web stranice, zaštita podataka, procjena ranjivosti">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>


<header class="header">

    <div class="container nav-container">

        <a href="#pocetna" class="logo">
            <span class="logo-symbol">◈</span>
            <span>CYBER<span class="blue">GUARD</span></span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Otvori izbornik">
            ☰
        </button>

        <nav class="navigation" id="navigation">

            <a href="#pocetna">Početna</a>
            <a href="#o-nama">O nama</a>
            <a href="#usluge">Usluge</a>
            <a href="#cjenik">Cjenik</a>
            <a href="#clanci">Članci</a>
            <a href="#kontakt">Kontakt</a>

            <a href="#kontakt" class="nav-button">
                Provjeri sigurnost
            </a>

        </nav>

    </div>

</header>


<main>

<title><?php echo $naslovStranice; ?></title>

<section class="hero" id="pocetna">

    <div class="hero-grid">

        <div class="hero-content">

            <div class="badge">
                <span class="status-dot"></span>
                Vaša sigurnost. Naša odgovornost.
            </div>

            <h1>
                Digitalni svijet je sigurniji
                <span>kada ste spremni.</span>
            </h1>

            <p>
                Pomažemo tvrtkama i pojedincima zaštititi njihove
                web stranice, podatke i digitalne sustave od
                sigurnosnih prijetnji.
            </p>

            <div class="hero-buttons">

                <a href="#usluge" class="btn btn-primary">
                    Pogledajte usluge →
                </a>

                <a href="#kontakt" class="btn btn-outline">
                    Kontaktirajte nas
                </a>

            </div>

            <div class="hero-trust">

                <div>
                    <strong>24/7</strong>
                    <span>Sigurnosno razmišljanje</span>
                </div>

                <div>
                    <strong>100%</strong>
                    <span>Posvećenost klijentima</span>
                </div>

                <div>
                    <strong>✓</strong>
                    <span>Profesionalan pristup</span>
                </div>

            </div>

        </div>


        <div class="security-card">

            <div class="card-top">
                <span>SECURITY STATUS</span>
                <span class="online">● ONLINE</span>
            </div>

            <div class="shield">
                🛡
            </div>

            <h3>
                Sigurnost vašeg sustava
            </h3>

            <p>
                Znate li koliko je vaša web stranica
                otporna na napade?
            </p>

            <div class="security-lines">

                <div>
                    <span>SSL zaštita</span>
                    <strong class="green">SIGURNO</strong>
                </div>

                <div>
                    <span>Sigurnosne postavke</span>
                    <strong class="green">AKTIVNO</strong>
                </div>

                <div>
                    <span>Ranjivosti</span>
                    <strong class="yellow">PROVJERI</strong>
                </div>

            </div>

            <a href="#kontakt" class="card-button">
                Pokreni sigurnosnu provjeru
            </a>

        </div>

    </div>

</section>


<!-- ================= STATS ================= -->

<section class="stats">

    <div class="container stats-grid">

        <div>
            <strong>01</strong>
            <span>Analiziramo</span>
            <p>Pronalazimo potencijalne sigurnosne probleme.</p>
        </div>

        <div>
            <strong>02</strong>
            <span>Objašnjavamo</span>
            <p>Jednostavno objašnjavamo što problem znači.</p>
        </div>

        <div>
            <strong>03</strong>
            <span>Štitimo</span>
            <p>Pomažemo vam napraviti sigurniji sustav.</p>
        </div>

        <div>
            <strong>04</strong>
            <span>Pratimo</span>
            <p>Informiramo vas o novim prijetnjama.</p>
        </div>

    </div>

</section>


<!-- ================= O NAMA ================= -->

<section class="section" id="o-nama">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                TKO SMO
            </span>

            <h2>
                Iza sigurnosti stoje
                <span>stvarni ljudi.</span>
            </h2>

            <p>
                Vjerujemo da informacijska sigurnost ne mora biti
                komplicirana. Naš cilj je složene sigurnosne probleme
                objasniti jednostavno i pomoći vam donijeti prave odluke.
            </p>

        </div>


        <div class="about-grid">

            <div class="about-text">

                <h3>
                    Profesionalni, pristupačni i povjerljivi.
                </h3>

                <p>
                    CYBERGUARD je tim stručnjaka usmjeren na
                    informacijsku sigurnost i zaštitu digitalnog
                    poslovanja.
                </p>

                <p>
                    Radimo s ljudima koji su svakodnevno povezani
                    s tehnologijom, ali ne žele trošiti vrijeme na
                    razumijevanje svakog tehničkog detalja.
                </p>

                <div class="check-list">

                    <div>
                        <span>✓</span>
                        Jasna komunikacija
                    </div>

                    <div>
                        <span>✓</span>
                        Povjerljivost podataka
                    </div>

                    <div>
                        <span>✓</span>
                        Profesionalan pristup
                    </div>

                    <div>
                        <span>✓</span>
                        Praktična sigurnosna rješenja
                    </div>

                </div>

            </div>


            <div class="team-grid">

                <article class="person-card">

                    <div class="person-image">
                        <img src="images/osnivac-1.jpg"
                             alt="Osnivač tvrtke">
                    </div>

                    <div class="person-info">

                        <h3>Ime Prezime</h3>

                        <span>Osnivač / CEO</span>

                        <p>
                            Informacijska sigurnost,
                            strategija i razvoj poslovanja.
                        </p>

                    </div>

                </article>


                <article class="person-card">

                    <div class="person-image">
                        <img src="images/osnivac-2.jpg"
                             alt="Stručnjak za informacijsku sigurnost">
                    </div>

                    <div class="person-info">

                        <h3>Ime Prezime</h3>

                        <span>Security Specialist</span>

                        <p>
                            Sigurnosne procjene,
                            analiza ranjivosti i savjetovanje.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>


<!-- ================= USLUGE ================= -->

<section class="section dark-section" id="usluge">

    <div class="container">

        <div class="section-heading center">

            <span class="section-label">
                NAŠE USLUGE
            </span>

            <h2>
                Sigurnost od početka
                <span>do zaštite.</span>
            </h2>

            <p>
                Od osnovne provjere web stranice do ozbiljne
                procjene sigurnosti vašeg poslovanja.
            </p>

        </div>


        <div class="services-grid">

            <article class="service-card">

                <div class="service-icon">
                    ◈
                </div>

                <h3>
                    Sigurnosna provjera web stranice
                </h3>

                <p>
                    Provjeravamo osnovne sigurnosne postavke
                    vaše web stranice i tražimo potencijalne
                    probleme.
                </p>

                <a href="#kontakt">
                    Saznaj više →
                </a>

            </article>


            <article class="service-card">

                <div class="service-icon">
                    ◉
                </div>

                <h3>
                    Procjena ranjivosti
                </h3>

                <p>
                    Identificiramo ranjivosti koje bi napadač
                    mogao iskoristiti i pripremamo preporuke
                    za njihovo uklanjanje.
                </p>

                <a href="#kontakt">
                    Saznaj više →
                </a>

            </article>


            <article class="service-card">

                <div class="service-icon">
                    ◆
                </div>

                <h3>
                    Sigurnosno savjetovanje
                </h3>

                <p>
                    Pomažemo vam razumjeti rizike i odabrati
                    odgovarajuće sigurnosne mjere za vaše
                    poslovanje.
                </p>

                <a href="#kontakt">
                    Saznaj više →
                </a>

            </article>


            <article class="service-card">

                <div class="service-icon">
                    ◇
                </div>

                <h3>
                    Edukacija zaposlenika
                </h3>

                <p>
                    Učimo zaposlenike kako prepoznati phishing,
                    socijalni inženjering i druge česte napade.
                </p>

                <a href="#kontakt">
                    Saznaj više →
                </a>

            </article>


            <article class="service-card">

                <div class="service-icon">
                    ⚡
                </div>

                <h3>
                    Incident response
                </h3>

                <p>
                    Pomažemo organizacijama razumjeti i
                    riješiti posljedice sigurnosnog incidenta.
                </p>

                <a href="#kontakt">
                    Saznaj više →
                </a>

            </article>


            <article class="service-card">

                <div class="service-icon">
                    ✓
                </div>

                <h3>
                    Kontinuirani nadzor
                </h3>

                <p>
                    Pratimo nove sigurnosne prijetnje i
                    obavještavamo vas o važnim promjenama.
                </p>

                <a href="#kontakt">
                    Saznaj više →
                </a>

            </article>

        </div>

    </div>

</section>


<!-- ================= CJENIK ================= -->

<section class="section" id="cjenik">

    <div class="container">

        <div class="section-heading center">

            <span class="section-label">
                CJENIK
            </span>

            <h2>
                Jednostavne cijene.
                <span>Bez iznenađenja.</span>
            </h2>

            <p>
                Odaberite paket koji odgovara vašim potrebama
                ili nas kontaktirajte za ponudu prilagođenu vašem poslovanju.
            </p>

        </div>


        <div class="pricing-grid">

            <article class="price-card">

                <span class="price-label">
                    START
                </span>

                <h3>
                    Osnovna provjera
                </h3>

                <p>
                    Za male web stranice i osnovnu provjeru.
                </p>

                <div class="price">
                    99 €
                </div>

                <ul>
                    <li>✓ Osnovna sigurnosna analiza</li>
                    <li>✓ Provjera konfiguracije</li>
                    <li>✓ Izvještaj</li>
                    <li>✓ Preporuke</li>
                </ul>

                <a href="#kontakt" class="btn btn-outline">
                    Odaberi paket
                </a>

            </article>


            <article class="price-card featured">

                <div class="popular">
                    NAJPOPULARNIJE
                </div>

                <span class="price-label">
                    BUSINESS
                </span>

                <h3>
                    Procjena sigurnosti
                </h3>

                <p>
                    Detaljnija analiza za poslovne korisnike.
                </p>

                <div class="price">
                    199 €
                </div>

                <ul>
                    <li>✓ Detaljna analiza</li>
                    <li>✓ Procjena ranjivosti</li>
                    <li>✓ Prioriteti rizika</li>
                    <li>✓ Detaljan izvještaj</li>
                    <li>✓ Konzultacije</li>
                </ul>

                <a href="#kontakt" class="btn btn-primary">
                    Odaberi paket
                </a>

            </article>


            <article class="price-card">

                <span class="price-label">
                    CUSTOM
                </span>

                <h3>
                    Enterprise
                </h3>

                <p>
                    Za tvrtke kojima je potrebno prilagođeno rješenje.
                </p>

                <div class="price">
                    Po dogovoru
                </div>

                <ul>
                    <li>✓ Prilagođena analiza</li>
                    <li>✓ Sigurnosno savjetovanje</li>
                    <li>✓ Edukacija</li>
                    <li>✓ Dugoročna suradnja</li>
                </ul>

                <a href="#kontakt" class="btn btn-outline">
                    Kontaktirajte nas
                </a>

            </article>

        </div>

    </div>

</section>


<!-- ================= SECURITY ALERT ================= -->

<section class="alert-section">

    <div class="container alert-box">

        <div class="alert-icon">
            !
        </div>

        <div>

            <span>
                SIGURNOSNO UPOZORENJE
            </span>

            <h2>
                Novi sigurnosni rizici pojavljuju se svakodnevno.
            </h2>

            <p>
                Pratite naše sigurnosne obavijesti i saznajte
                kako se zaštititi.
            </p>

        </div>

        <a href="#clanci" class="btn btn-primary">
            Pogledaj obavijesti
        </a>

    </div>

</section>


<!-- ================= ČLANCI ================= -->

<section class="section" id="clanci">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                BLOG
            </span>

            <h2>
                Znanje je jedan od
                <span>najboljih oblika zaštite.</span>
            </h2>

            <p>
                Naši stručnjaci jednostavno objašnjavaju
                aktualne sigurnosne probleme i načine zaštite.
            </p>

        </div>


        <div class="articles-grid">

            <article class="article-card">

                <img src="images/clanak-1.jpg"
                     alt="Phishing napad">

                <div class="article-content">

                    <span class="article-category">
                        SIGURNOST
                    </span>

                    <h3>
                        Kako prepoznati phishing napad?
                    </h3>

                    <p>
                        Nekoliko jednostavnih znakova može vam
                        pomoći prepoznati sumnjivu poruku prije
                        nego što bude prekasno.
                    </p>

                    <a href="#clanak">
                        Pročitaj članak →
                    </a>

                </div>

            </article>


            <article class="article-card">

                <img src="images/clanak-2.jpg"
                     alt="Sigurne lozinke">

                <div class="article-content">

                    <span class="article-category">
                        ZAŠTITA
                    </span>

                    <h3>
                        Je li vaša lozinka dovoljno sigurna?
                    </h3>

                    <p>
                        Dobre lozinke i višefaktorska autentifikacija
                        temelj su zaštite vaših računa.
                    </p>

                    <a href="#clanak">
                        Pročitaj članak →
                    </a>

                </div>

            </article>


            <article class="article-card">

                <img src="images/clanak-3.jpg"
                     alt="Hakerski napad">

                <div class="article-content">

                    <span class="article-category">
                        INCIDENTI
                    </span>

                    <h3>
                        Što napraviti nakon hakerskog napada?
                    </h3>

                    <p>
                        Prvi koraci nakon sigurnosnog incidenta
                        mogu biti ključni za smanjenje štete.
                    </p>

                    <a href="#clanak">
                        Pročitaj članak →
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- ================= ARTICLE DETAIL ================= -->

<section class="section article-detail" id="clanak">

    <div class="container article-container">

        <span class="section-label">
            SIGURNOSNI VODIČ
        </span>

        <h2>
            Kako prepoznati phishing napad?
        </h2>

        <p class="article-intro">
            Phishing je jedan od najčešćih načina na koji napadači
            pokušavaju doći do korisničkih podataka.
        </p>

        <img src="images/clanak-1.jpg"
             alt="Ilustracija phishing napada"
             class="article-main-image">

        <div class="article-body">

            <h3>
                Što je phishing?
            </h3>

            <p>
                Phishing je oblik socijalnog inženjeringa u kojem
                napadač pokušava navesti korisnika da otkrije
                osjetljive podatke, otvori zlonamjernu poveznicu
                ili preuzme datoteku.
            </p>

            <h3>
                Na što treba obratiti pažnju?
            </h3>

            <p>
                Obratite pažnju na neobične adrese pošiljatelja,
                hitne zahtjeve, pravopisne pogreške, sumnjive
                poveznice i poruke koje od vas traže lozinku
                ili druge osjetljive podatke.
            </p>

            <h3>
                Kako se zaštititi?
            </h3>

            <ul>
                <li>Ne otvarajte sumnjive poveznice.</li>
                <li>Provjerite adresu pošiljatelja.</li>
                <li>Koristite višefaktorsku autentifikaciju.</li>
                <li>Ne dijelite lozinke putem e-maila.</li>
                <li>Redovito ažurirajte uređaje i aplikacije.</li>
            </ul>

        </div>

        <div class="article-cta">

            <h3>
                Želite provjeriti sigurnost svog sustava?
            </h3>

            <p>
                Kontaktirajte naš tim i dogovorite sigurnosnu procjenu.
            </p>

            <a href="#kontakt" class="btn btn-primary">
                Zatražite provjeru
            </a>

        </div>

    </div>

</section>


<!-- ================= NEWSLETTER ================= -->

<section class="newsletter">

    <div class="container newsletter-box">

        <div>

            <span class="section-label">
                NEWSLETTER
            </span>

            <h2>
                Budite korak ispred napadača.
            </h2>

            <p>
                Primajte kratke sigurnosne obavijesti,
                savjete i informacije o važnim prijetnjama.
            </p>

        </div>


        <form class="newsletter-form" id="newsletterForm">

            <label for="newsletterEmail">
                Vaš e-mail
            </label>

            <div class="newsletter-input">

                <input
                    type="email"
                    id="newsletterEmail"
                    placeholder="vas@email.com"
                    required
                >

                <button type="submit">
                    Pretplati me
                </button>

            </div>

            <small>
                Od newslettera se možete odjaviti u bilo kojem trenutku.
            </small>

            <div id="newsletterMessage"></div>

        </form>

    </div>

</section>


<!-- ================= KONTAKT ================= -->

<section class="section dark-section" id="kontakt">

    <div class="container">

        <div class="section-heading center">

            <span class="section-label">
                KONTAKT
            </span>

            <h2>
                Razgovarajmo o vašoj
                <span>sigurnosti.</span>
            </h2>

            <p>
                Pošaljite nam upit. Odgovorit ćemo vam
                u najkraćem mogućem roku.
            </p>

        </div>


        <div class="contact-grid">

            <div class="contact-info">

                <h3>
                    Kontakt informacije
                </h3>

                <div class="contact-item">

                    <span>✉</span>

                    <div>
                        <strong>E-mail</strong>
                        <a href="mailto:info@cyberguard.hr">
                            info@cyberguard.hr
                        </a>
                    </div>

                </div>


                <div class="contact-item">

                    <span>☎</span>

                    <div>
                        <strong>Telefon</strong>
                        <a href="tel:+385991234567">
                            +385 99 123 4567
                        </a>
                    </div>

                </div>


                <div class="contact-item">

                    <span>⌖</span>

                    <div>
                        <strong>Lokacija</strong>
                        <p>
                            Ulica primjer 1<br>
                            10000 Zagreb, Hrvatska
                        </p>
                    </div>

                </div>


                <div class="contact-item">

                    <span>◉</span>

                    <div>
                        <strong>OIB</strong>
                        <p>
                            12345678901
                        </p>
                    </div>

                </div>


                <div class="socials">

                    <a href="#" aria-label="LinkedIn">
                        LinkedIn
                    </a>

                    <a href="#" aria-label="Instagram">
                        Instagram
                    </a>

                    <a href="#" aria-label="Facebook">
                        Facebook
                    </a>

                </div>

            </div>


            <form class="contact-form" id="contactForm">

                <div class="form-row">

                    <div class="form-group">

                        <label for="name">
                            Ime i prezime *
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Vaše ime i prezime"
                            minlength="2"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="email">
                            E-mail *
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="vas@email.com"
                            required
                        >

                    </div>

                </div>


                <div class="form-group">

                    <label for="oib">
                        OIB
                    </label>

                    <input
                        type="text"
                        id="oib"
                        name="oib"
                        placeholder="11 znamenki"
                        maxlength="11"
                        pattern="[0-9]{11}"
                    >

                    <small>
                        OIB mora sadržavati 11 znamenki.
                    </small>

                </div>


                <div class="form-group">

                    <label for="service">
                        Usluga
                    </label>

                    <select id="service" name="service">

                        <option value="">
                            Odaberite uslugu
                        </option>

                        <option>
                            Sigurnosna provjera web stranice
                        </option>

                        <option>
                            Procjena ranjivosti
                        </option>

                        <option>
                            Sigurnosno savjetovanje
                        </option>

                        <option>
                            Edukacija zaposlenika
                        </option>

                        <option>
                            Drugo
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="message">
                        Poruka *
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        minlength="10"
                        placeholder="Opišite kako vam možemo pomoći..."
                        required
                    ></textarea>

                </div>


                <label class="checkbox">

                    <input type="checkbox" required>

                    <span>
                        Slažem se s obradom podataka u svrhu
                        odgovora na moj upit i prihvaćam
                        <a href="#privatnost">
                            politiku privatnosti
                        </a>.
                    </span>

                </label>


                <button type="submit" class="btn btn-primary full-width">
                    Pošalji upit →
                </button>

                <div id="contactMessage"></div>

            </form>

        </div>

    </div>

</section>



<section class="map-section">

    <div class="container">

        <div class="map-placeholder">

            <div class="map-content">

                <div class="map-pin">
                    ⌖
                </div>

                <h3>
                    Pronađite nas
                </h3>

                <p>
                    Ulica primjer 1, Zagreb
                </p>

                