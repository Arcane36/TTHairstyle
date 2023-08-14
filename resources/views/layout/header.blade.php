<header class="fixed">
    <div class="container">

        <nav class="menu">        
            <a href="#top">
                <img class="menu__logo" src={{ URL::asset("img/logo.svg") }} width="289" height="171" aria-label="Hlavní logo webu" alt="Hlavní logo" title="Hlavní logo">
            </a>
            
            <input class="menu__toggle" id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__items">
                <li class="menu__subsection"><a href="#o-mne" class="menu__text">O mně</a></li>
                <li class="menu__subsection"><a href="#kosmetika" class="menu__text">Kosmetika</a></li>
                <li class="menu__subsection"><a href="#cenik" class="menu__text">Ceník</a></li>
                <li class="menu__subsection"><a href="#faq" class="menu__text">FAQ</a></li>
                <li class="menu__subsection"><a href="#fotky" class="menu__text">Fotky</a></li>            
                <li class="menu__subsection"><a href="#kontakt" class="menu__text">Kontakt</a></li>
            </ul>
        </nav>    
    </div>
</header>