<div id="topbar" class="open">
    <div class="overflow-hidden">
        <div class="side-header">
            Full Stack Web Development
            <a id="toggle-topbar-button"><i class="fa-solid fa-caret-down"></i></a>
        </div>
        <div>
            <img class="img" src="{{ asset('images/mesquared.jpeg') }}"></img>
        </div>
        <div class="side-text">
            <div>D'arcy Stubbins</div>
            <div>{{ env('MY_NUMBER', '') }}</div>
            <div>{{ env('MY_EMAIL', '') }}</div>
        </div>
        <br>
        <div class="side-text">
            <p>Find some exampes of my work or contact me below:</p>
            <a href="mailto:darcystubbins.dev.99@gmail.com"><i class="fa-solid fa-envelope icon"></i></a>
            <a href="https://github.com/darcy-stubbins"><i class="fa-brands fa-github icon"></i></a>
            <a href="https://www.linkedin.com/in/darcy-stubbins/"><i class="fa-brands fa-linkedin icon"></i></a>
        </div>
    </div>
</div>
