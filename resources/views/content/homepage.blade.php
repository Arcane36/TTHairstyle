@extends('layout.default') @section('content') @include('layout.header')
@include('modules.hero-banner')

<section class="stripe" id="o-mne">
    <div class="container">
        <div class="stack"><div class="typo--h2">O mně</div></div>
        <div class="grid__wrap stack">
            <div class="grid grid--middle grid--space-24 grid--lg-space-56">
                <div class="grid__1-1 grid__lg-1-2">
                    <img class="img img--responsive shadow--two-layered wow
                    animate__animated animate__fadeIn" alt="Kadeřnice Terka" width="507" height="338" loading="lazy"
                    data-wow-delay="0.3s" title="Kadeřnice Terka" alt="Kadeřnice Terka" src="{{ URL::asset("img/terka.webp")}}">
                </div>
                <div class="grid__1-1 grid__lg-1-2">
                    <cite
                        class="typo--b2 stack margin--40 wow animate__animated animate__fadeIn"
                        data-wow-delay="0.3s"
                    >
                        <h3>Tereza Tyrpeklová</h3>
                        <br />
                        <p>
                            Ahoj, jmenuji se Terka a práci v kadeřnictví se
                            věnuji již <strong>více než sedmnáct let.</strong>
                        </p>
                        <p>
                            Tři roky jsem pracovala v zahraničí, ale dnes mě
                            naleznete v Praze na Letné. Neustále sleduji
                            nejnovější trendy.
                        </p>
                        <p class="stack">
                            Srdcem jsem gamerka, takže mimo práci buď pařím nebo
                            mě najdete ve fitku :)
                        </p>

                    </cite>
                    <div class="stack typo--right">
                        <a href="#kontakt" class="button" aria-label="Více informací o kontaktech"> Kontaktovat </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="waves__break"></div>
    <svg class="waves"
        xmlns="https://www.w3.org/2000/svg"
        xmlns:xlink="https://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 "
        preserveAspectRatio="none"
    >
        <defs>
            <path id="gentle-wave"
                d="M-160 44c30 0 
                    58-18 88-18s
                    58 18 88 18 
                    58-18 88-18 
                    58 18 88 18
                    v44h-352z" />
        </defs>
        <g class="">
            <use xlink:href="#gentle-wave" x="46" y="6" fill="#f5f5f7"/>  
        </g>
    </svg>
</section>

<section class="stripe" id="kosmetika">
    <div class="container">
        <div class="stack"><div class="typo--h2">Kosmetika</div></div>
        <div
            class="grid__wrap stack wow animate__animated animate__fadeInRight"
            data-wow-delay="0.3s"
        >
            <div class="grid grid--middle grid--space-8 grid--lg-space-56">
                <div class="grid__1-1 grid__lg-1-4">
                    <img class="img img--responsive shadow--two-layered" width="233" height="233" loading="lazy"
                    alt="Alcina" title="Alcina" src="{{ URL::asset("img/barvy_alcina.webp")}}">
                    <!-- <img class="img img--add1" alt="Alcina" title="Alcina" src="{{ URL::asset("img/alcina2.webp") }}"> -->
                </div>
                <div class="grid__1-1 grid__lg-14-24">
                    <h3 class="stack">Alcina</h3>
                    <div class="stack stack--top-16 typo--b2">
                        <p>
                            Německá značka <b>ALCINA nabízí kompletní sortiment pleťové, vlasové a dekorativní kosmetiky</b>. Dobře ví, že každý z nás je jedinečný, a své přípravky proto vyvíjí s ohledem na individuální potřeby různých typů pleti a vlasů.
                        </p>
                        <p>
                        <b>Vysoká kvalita, bezpečnost a účinnost</b> – to jsou hlavní priority značky. Díky velmi úzké spolupráci vědců a dermatologů má ALCINA cenné zkušenosti v oboru farmacie a kosmetiky. 
                            Vývoji produktů předchází důkladný výzkum ve vlastním Institutu Dr. Wolff. <b>Přípravky splňují ty nejpřísnější farmaceutické normy</b>, prochází náročnými dermatologickými testy a jejich kvalita je ověřována na německých klinikách a univerzitách.
                        </p>
                        <p>
                        ALCINA, jejímž výrobcem je rodinná firma Dr. Kurt Wolff s historií sahající až do roku 1905.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="grid__wrap stack stack--lg-top-72 wow animate__animated animate__fadeInLeft"
            data-wow-delay="0.3s"
        >
            <div class="grid grid--middle grid--right grid--space-8 grid--lg-space-56">
                <div class="grid__1-1 grid__lg-14-24">
                    <h3 class="stack">Malibu C</h3>
                    <div class="stack stack--top-16 typo--b2">
                        <p>
                            Malibu C v roce 1985 jako první přišli na trh s
                            wellness přípravky, které jsou založeny na
                            patentovaných technologiích, vědeckých výzkumech s
                            ohledem na životní prostředí.
                        </p>
                        <p>
                            <b>Produkty jsou 100% vegan</b>, netestované na
                            zvířatech,
                            <b
                                >neobsahující parabeny, sulfáty, konzervanty,
                                umělé parfemace</b
                            >
                            a pomáhají účinně řešit problémy s vlasy a pokožkou.
                        </p>
                    </div>
                </div>
                <div class="grid__1-1 grid__lg-1-4 relative">
                    <img class="img img--responsive shadow--two-layered" width="233" height="174" loading="lazy"
                    alt="Alcina" title="Alcina" src="{{ URL::asset("img/malibu1.webp")}}">
                    <!-- <img class="img img--add1" alt="Alcina" title="Alcina" src="{{ URL::asset("img/malibu2.webp") }}">
                        <img class="img img--add2" alt="Alcina" title="Alcina" src="{{ URL::asset("img/malibu3.webp") }}"> -->
                </div>
            </div>
        </div>
    </div>
    <div class="waves__break"></div>
    <svg class="waves"
        xmlns="https://www.w3.org/2000/svg"
        xmlns:xlink="https://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 "
        preserveAspectRatio="none"
    >
        <defs>
            <path id="gentle-wave"
                d="M-160 44c30 0 
                    58-18 88-18s
                    58 18 88 18 
                    58-18 88-18 
                    58 18 88 18
                    v44h-352z" />
        </defs>
        <g class="">
            <use xlink:href="#gentle-wave" x="17" y="6" fill="#f5f5f7"/>  
        </g>
    </svg>
</section>

<section class="stripe" id="cenik">
    <div class="container">
        <div class="stack typo--center">
            <a
                href="{{ URL::asset('files/cenik.png')}}"
                class="card wow animate__animated animate__bounceIn"
                data-wow-delay="0.5s"
                aria-label="Více informací o ceníku"
            >
                <div class="stack typo--bold typo--b1">Aktuální ceník</div>

                <svg
                    class="stack"
                    height="100%"
                    width="100%"
                    version="1.1"
                    id="Layer_1"
                    xmlns="https://www.w3.org/2000/svg"
                    xmlns:xlink="https://www.w3.org/1999/xlink"
                    viewBox="0 0 309.267 309.267"
                    xml:space="preserve"
                >
                    <g>
                        <path
                            style="fill: #e2574c"
                            d="M38.658,0h164.23l87.049,86.711v203.227c0,10.679-8.659,19.329-19.329,19.329H38.658
                                c-10.67,0-19.329-8.65-19.329-19.329V19.329C19.329,8.65,27.989,0,38.658,0z"
                        />
                        <path
                            style="fill: #b53629"
                            d="M289.658,86.981h-67.372c-10.67,0-19.329-8.659-19.329-19.329V0.193L289.658,86.981z"
                        />
                        <path
                            style="fill: #ffffff"
                            d="M217.434,146.544c3.238,0,4.823-2.822,4.823-5.557c0-2.832-1.653-5.567-4.823-5.567h-18.44
                                c-3.605,0-5.615,2.986-5.615,6.282v45.317c0,4.04,2.3,6.282,5.412,6.282c3.093,0,5.403-2.242,5.403-6.282v-12.438h11.153
                                c3.46,0,5.19-2.832,5.19-5.644c0-2.754-1.73-5.49-5.19-5.49h-11.153v-16.903C204.194,146.544,217.434,146.544,217.434,146.544z
                                M155.107,135.42h-13.492c-3.663,0-6.263,2.513-6.263,6.243v45.395c0,4.629,3.74,6.079,6.417,6.079h14.159
                                c16.758,0,27.824-11.027,27.824-28.047C183.743,147.095,173.325,135.42,155.107,135.42z M155.755,181.946h-8.225v-35.334h7.413
                                c11.221,0,16.101,7.529,16.101,17.918C171.044,174.253,166.25,181.946,155.755,181.946z M106.33,135.42H92.964
                                c-3.779,0-5.886,2.493-5.886,6.282v45.317c0,4.04,2.416,6.282,5.663,6.282s5.663-2.242,5.663-6.282v-13.231h8.379
                                c10.341,0,18.875-7.326,18.875-19.107C125.659,143.152,117.425,135.42,106.33,135.42z M106.108,163.158h-7.703v-17.097h7.703
                                c4.755,0,7.78,3.711,7.78,8.553C113.878,159.447,110.863,163.158,106.108,163.158z"
                        />
                    </g>
                </svg>

                <button class="stack button button--dark-plain">
                    Stáhnout
                </button>
            </a>
        </div>
    </div>
    <div class="waves__break"></div>
    <svg class="waves"
        xmlns="https://www.w3.org/2000/svg"
        xmlns:xlink="https://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 "
        preserveAspectRatio="none"
    >
        <defs>
            <path id="gentle-wave"
                d="M-160 44c30 0 
                    58-18 88-18s
                    58 18 88 18 
                    58-18 88-18 
                    58 18 88 18
                    v44h-352z" />
        </defs>
        <g class="">
            <use xlink:href="#gentle-wave" x="44" y="6" fill="#f5f5f7"/>  
        </g>
    </svg>
</section>

<section class="stripe" id="faq">
    <div class="container">
        <h2 class="stack typo--left">Často kladené dotazy</h2>

        <div class="accordion stack">
            <button class="accordion__toggle">
                Kdy je ideální doba na objednání?
            </button>
            <div class="accordion__content">
                <p>
                    Nejlepší je objednat se telefonicky. Ideálně po dvanácté hodině. V případě kontaktování přes SMS může být delší reakční doba. Pracovní doba je dle objednání.
                </p>
            </div>
        </div>
        <div class="accordion">
            <button class="accordion__toggle">
                Mám si před barvením mýt vlasy?
            </button>
            <div class="accordion__content">
                <p>
                    Jdete-li na melír, barvení nebo odbarvení, mějte vlasy umyté 1-2 dny předem.
                </p>
            </div>
        </div>
    </div>
    <div class="waves__break"></div>
    <svg class="waves"
        xmlns="https://www.w3.org/2000/svg"
        xmlns:xlink="https://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 "
        preserveAspectRatio="none"
    >
        <defs>
            <path id="gentle-wave"
                d="M-160 44c30 0 
                    58-18 88-18s
                    58 18 88 18 
                    58-18 88-18 
                    58 18 88 18
                    v44h-352z" />
        </defs>
        <g class="">
            <use xlink:href="#gentle-wave" x="76" y="6" fill="#f5f5f7"/>  
        </g>
    </svg>
</section>

<section class="stripe" id="fotky">
    <div class="container">
        <h2 class="stack">Fotky</h2>
        <div class="gallery stack">
            <div class="grid__wrap">
                <div class="grid grid--space-24">
                    @foreach (Storage::disk('public2')->files('gallery') as $i)
                    <div class="grid__1-2 grid__md-1-3 grid__lg-1-4">
                        <a
                            data-pswp-width="700"
                            data-pswp-height="1000"
                            href="{{ URL::asset($i) }}"
                            aria-label="Obrázek v galerii"
                            class="grid__height"
                            ><img
                                loading="lazy"
                                src="{{ URL::asset($i) }}"
                                class="wow animate__animated animate__fadeIn shadow--two-layered height--100"
                                data-wow-delay="0.3s"
                                title="Ukázka účesu - Kadeřnictví Perfect, Praha 7 Holešovice"
                                alt="Ukázka účesu - Kadeřnictví Perfect, Praha 7 Holešovice"
                        /></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="waves__break"></div>
    <svg class="waves"
        xmlns="https://www.w3.org/2000/svg"
        xmlns:xlink="https://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 "
        preserveAspectRatio="none"
    >
        <defs>
            <path id="gentle-wave"
                d="M-160 44c30 0 
                    58-18 88-18s
                    58 18 88 18 
                    58-18 88-18 
                    58 18 88 18
                    v44h-352z" />
        </defs>
        <g class="">
            <use xlink:href="#gentle-wave" x="75" y="6" fill="#f5f5f7"/>  
        </g>
    </svg>
</section>

<section class="stripe" id="kontakt">
    <div class="container">
        <h2 class="stack">Kontakt</h2>
        <div class="stack">
            <div class="grid__wrap">
                <div class="grid grid--center grid--space-32">
                    <div class="grid__1-1 grid__md-1-3 grid__xl-2-8 typo--center">
                        <div
                            href="#"
                            class="card card--small wow animate__animated animate__bounceIn"
                            data-wow-delay="0.3s"
                            aria-label="Adresa"
                        >
                            <div class="card__icon">
                                <svg
                                    xmlns="https://www.w3.org/2000/svg"
                                    width="35"
                                    height="50.11"
                                >
                                    <g data-name="Layer 2">
                                        <path
                                            d="M25.68 35a2.5 2.5 0 0 0 3.43-1C32.33 27.75 35 21.33 35 17.5a17.5 17.5 0 0 0-35 0C0 25 10.87 42.47 15.71 49a2.77 2.77 0 0 0 4.49-.06c1.07-1.53 2.44-3.64 3.93-6.08a2.52 2.52 0 0 0-.93-3.49 2.51 2.51 0 0 0-3.34.9c-.67 1.1-1.33 2.16-2 3.16C12.17 35.13 5 22.2 5 17.5a12.5 12.5 0 0 1 25 0c0 2.77-2.32 8.36-5.33 14.18a2.51 2.51 0 0 0 1 3.34z"
                                            style="fill: #111"
                                        />
                                        <path
                                            d="M17.5 14a3.5 3.5 0 1 1-3.5 3.5 3.5 3.5 0 0 1 3.5-3.5m0-5a8.5 8.5 0 1 0 8.5 8.5A8.51 8.51 0 0 0 17.5 9z"
                                            style="fill: #00c569"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="typo--b3 typo--center">
                                <div class="stack typo--b2 typo--bold">
                                    Adresa
                                </div>
                                <div class="stack stack--top-8">
                                    TT Hairstyles
                                </div>
                                <div class="stack stack--top-0">
                                    Kamenická 31
                                </div>
                                <div class="stack stack--top-0">
                                    Praha 7, 170 00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__1-1 grid__md-1-3 grid__xl-2-8 typo--center">
                        <div
                            href="#"
                            class="card card--small wow animate__animated animate__bounceIn"
                            data-wow-delay="0.3s"
                            aria-label="Kontakt"
                        >
                            <div class="card__icon">
                                <svg
                                    xmlns="https://www.w3.org/2000/svg"
                                    width="50"
                                    height="50"
                                >
                                    <defs>
                                        <style>
                                            .cls-2 {
                                                fill: #111;
                                            }
                                        </style>
                                    </defs>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Clock">
                                            <path
                                                d="m26.82 27.62 9-4.89a2.49 2.49 0 0 0 .79-3.44 2.5 2.5 0 0 0-3.44-.8l-9 4.89a2.49 2.49 0 0 0-.8 3.44 2.49 2.49 0 0 0 3.45.8z"
                                                style="fill: #00c569"
                                            />
                                            <path
                                                d="M25 0a25 25 0 1 0 25 25A25 25 0 0 0 25 0zm0 45a20 20 0 1 1 20-20 20 20 0 0 1-20 20z"
                                                class="cls-2"
                                            />
                                            <path
                                                d="M16.82 13.7a2.5 2.5 0 0 0-3.38 3.68l10.37 10a2.5 2.5 0 1 0 3.38-3.68z"
                                                class="cls-2"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="typo--b3 typo--center">
                                <div class="stack typo--b2 typo--bold">
                                    Objednání
                                </div>
                                <div class="stack stack--top-8">
                                    Tereza Tyrpeklová
                                </div>
                                <a
                                    href="tel:+420603877879"
                                    aria-label="Telefonní číslo"
                                    class="stack stack--top-0 color--green typo--bold"
                                >
                                    +420 603 877 879
                                </a>
                                <div class="stack stack--top-8">
                                    Objednání dle domluvy
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="grid__1-1 grid__md-1-3 grid__xl-2-8 typo--center">
                        <div
                            href="#"
                            aria-label="Orientační pracovní časy"
                            class="card card--small wow animate__animated animate__bounceIn"
                            data-wow-delay="0.3s"
                        >
                            <div class="card__icon">
                                <svg
                                    xmlns="https://www.w3.org/2000/svg"
                                    width="50"
                                    height="50"
                                >
                                    <defs>
                                        <style>
                                            .cls-2 {
                                                fill: #111;
                                            }
                                        </style>
                                    </defs>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Clock">
                                            <path
                                                d="m26.82 27.62 9-4.89a2.49 2.49 0 0 0 .79-3.44 2.5 2.5 0 0 0-3.44-.8l-9 4.89a2.49 2.49 0 0 0-.8 3.44 2.49 2.49 0 0 0 3.45.8z"
                                                style="fill: #00c569"
                                            />
                                            <path
                                                d="M25 0a25 25 0 1 0 25 25A25 25 0 0 0 25 0zm0 45a20 20 0 1 1 20-20 20 20 0 0 1-20 20z"
                                                class="cls-2"
                                            />
                                            <path
                                                d="M16.82 13.7a2.5 2.5 0 0 0-3.38 3.68l10.37 10a2.5 2.5 0 1 0 3.38-3.68z"
                                                class="cls-2"
                                            />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="typo--b3 typo--center">
                                <div class="stack typo--b2 typo--bold">
                                    Orientační pracovní časy
                                </div>
                                </a>
                                <div class="stack stack--top-8">
                                    Po: 12:00 - 19:00</br>
                                    Út: 10:00 - 19:00</br>
                                    St: 8:00 - 15:00</br>
                                    Čt: 12:00 - 19:00</br>
                                    Pá: 9:00 - 15:00</br>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="grid__1-1 grid__md-1-3 grid__xl-2-8 typo--center">
                        <div
                            href="#"
                            aria-label="Sociální sítě"
                            class="card card--small wow animate__animated animate__bounceIn"
                            data-wow-delay="0.3s"
                        >
                            <div class="card__icon">
                                <svg
                                    xmlns="https://www.w3.org/2000/svg"
                                    width="44"
                                    height="50"
                                >
                                    <g data-name="Layer 2">
                                        <path
                                            d="m28.41 12.88-3-4-12.72 9.37 3 4 12.72-9.37zM16.58 26.63l-2.77 4.16 12.2 7.45 2.48-4.34-11.91-7.27z"
                                            style="fill: #111"
                                        />
                                        <path
                                            d="M31.5 15A7.5 7.5 0 1 0 24 7.5a7.5 7.5 0 0 0 7.5 7.5zm0-10A2.5 2.5 0 1 1 29 7.5 2.5 2.5 0 0 1 31.5 5zm-23 11a8.5 8.5 0 1 0 8.5 8.5A8.51 8.51 0 0 0 8.5 16zm0 12a3.5 3.5 0 1 1 3.5-3.5A3.5 3.5 0 0 1 8.5 28zm26 3a9.5 9.5 0 1 0 9.5 9.5 9.5 9.5 0 0 0-9.5-9.5zm0 14a4.5 4.5 0 1 1 4.5-4.5 4.51 4.51 0 0 1-4.5 4.5z"
                                            style="fill: #00c569"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="stack typo--b2 typo--bold">
                                Sociální sítě
                            </div>
                            <div class="stack stack--top-8 card__social">
                                <a href="https://wa.me/603877879" aria-label="Whatsapp">
                                    <svg
                                        xmlns="https://www.w3.org/2000/svg"
                                        width="48"
                                        height="48"
                                        fill="none"
                                    >
                                        <path
                                            fill="#25D366"
                                            d="M24 48c13.255 0 24-10.745 24-24S37.255 0 24 0 0 10.745 0 24s10.745 24 24 24Z"
                                        />
                                        <path
                                            fill="#FDFDFD"
                                            fill-rule="evenodd"
                                            d="M24.791 37.353h-.006c-2.388-.001-4.735-.6-6.82-1.738L10.4 37.6l2.025-7.395a14.246 14.246 0 0 1-1.905-7.135c.003-7.868 6.405-14.27 14.27-14.27 3.819.002 7.402 1.488 10.096 4.185a14.185 14.185 0 0 1 4.176 10.097c-.003 7.866-6.402 14.267-14.27 14.27Zm-6.475-4.321.433.257a11.844 11.844 0 0 0 6.037 1.653h.005c6.538 0 11.859-5.32 11.862-11.861a11.79 11.79 0 0 0-3.471-8.392 11.78 11.78 0 0 0-8.386-3.479c-6.543 0-11.864 5.321-11.867 11.861 0 2.241.626 4.424 1.814 6.313l.282.448-1.199 4.378 4.49-1.178Zm13.176-6.878c.25.12.417.201.489.321.089.149.089.863-.208 1.696s-1.722 1.593-2.407 1.695c-.614.092-1.392.13-2.246-.14a20.465 20.465 0 0 1-2.033-.752c-3.343-1.444-5.602-4.684-6.029-5.296-.03-.043-.05-.073-.063-.088l-.002-.004c-.189-.252-1.453-1.94-1.453-3.685 0-1.643.806-2.504 1.178-2.9l.07-.075a1.31 1.31 0 0 1 .95-.446c.238 0 .476.002.684.012.026.002.052.002.08.001.207 0 .467-.002.722.612.099.236.242.586.394.956.307.747.646 1.572.706 1.691.089.179.148.387.03.625l-.05.102c-.09.182-.156.316-.307.493-.06.07-.121.144-.183.22-.123.149-.245.298-.352.405-.179.177-.364.37-.157.727.209.357.924 1.525 1.984 2.47 1.14 1.017 2.13 1.447 2.632 1.664.098.043.178.077.236.106.356.179.564.15.772-.089.208-.238.892-1.041 1.13-1.398.237-.357.475-.297.802-.179.327.12 2.08.982 2.436 1.16l.195.096Z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </a>
                                <!-- <a href="#">
                                    <svg
                                        xmlns="https://www.w3.org/2000/svg"
                                        width="48"
                                        height="48"
                                        fill="none"
                                    >
                                        <path
                                            fill="#3B5998"
                                            d="M0 24C0 10.745 10.745 0 24 0s24 10.745 24 24-10.745 24-24 24S0 37.255 0 24Z"
                                        />
                                        <path
                                            fill="#fff"
                                            d="M26.502 38.111V25.054h3.604l.478-4.5h-4.082l.006-2.252c0-1.173.111-1.802 1.797-1.802h2.253V12h-3.605c-4.33 0-5.854 2.183-5.854 5.854v2.701H18.4v4.5h2.7V38.11H26.5Z"
                                        />
                                    </svg>
                                </a> -->
                                <a href="https://www.instagram.com/tt_hair_styles/" aria-label="Instagram">
                                    <svg
                                        xmlns="https://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        id="Layer_1"
                                        x="0"
                                        y="0"
                                        width="48"
                                        height="48"
                                        style="
                                            enable-background: new 0 0 512 512;
                                        "
                                        version="1.1"
                                        viewBox="0 0 512 512"
                                    >
                                        <style>
                                            .st1 {
                                                fill: #fff;
                                            }
                                        </style>
                                        <linearGradient
                                            id="SVGID_1_"
                                            x1="40.739"
                                            x2="586.222"
                                            y1="470.924"
                                            y2="-74.559"
                                            gradientUnits="userSpaceOnUse"
                                        >
                                            <stop
                                                offset=".001"
                                                style="stop-color: #fbe18a"
                                            />
                                            <stop
                                                offset=".209"
                                                style="stop-color: #fcbb45"
                                            />
                                            <stop
                                                offset=".377"
                                                style="stop-color: #f75274"
                                            />
                                            <stop
                                                offset=".524"
                                                style="stop-color: #d53692"
                                            />
                                            <stop
                                                offset=".739"
                                                style="stop-color: #8f39ce"
                                            />
                                            <stop
                                                offset="1"
                                                style="stop-color: #5b4fe9"
                                            />
                                        </linearGradient>
                                        <circle
                                            cx="255.976"
                                            cy="255.687"
                                            r="252.41"
                                            style="fill: url(#SVGID_1_)"
                                        />
                                        <circle
                                            cx="345.329"
                                            cy="167.778"
                                            r="19.609"
                                            class="st1"
                                        />
                                        <path
                                            d="M258.152 173.315c-45.419 0-82.372 36.952-82.372 82.371s36.953 82.371 82.372 82.371 82.37-36.952 82.37-82.37-36.95-82.372-82.37-82.372zm0 135.136c-29.095 0-52.766-23.67-52.766-52.765 0-29.094 23.671-52.763 52.766-52.763s52.763 23.669 52.763 52.763c0 29.096-23.668 52.765-52.763 52.765z"
                                            class="st1"
                                        />
                                        <path
                                            d="M323.544 422.924H190.007c-55.398 0-100.466-45.067-100.466-100.466V188.915c0-55.399 45.068-100.466 100.466-100.466h133.537c55.399 0 100.472 45.067 100.472 100.466v133.543c0 55.398-45.073 100.466-100.472 100.466zM190.007 119.916c-38.049 0-69 30.95-69 69v133.542c0 38.049 30.951 69 69 69h133.537c38.05 0 69.006-30.951 69.006-69V188.915c0-38.048-30.957-69-69.006-69H190.007z"
                                            class="st1"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="google-maps stack stack--top-48 shadow--two-layered wow animate__animated animate__fadeIn"
            data-wow-delay="0.3s"
            style="border-radius: 10px"
        >
            <iframe
                src="https://www.google.com/maps/embed/v1/place?q=Kamenická+31,+Praha+7-Holešovice,+Česko&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                width="1440"
                height="400"
                style="border: 0; border-radius: 4px"
                allowfullscreen=""
                loading="lazy"
                title="Google mapy do kadeřnictví"
            >
            </iframe>
        </div>
    </div>
</section>

@stop
