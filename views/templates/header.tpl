<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {if empty($APP)}
            <a class="navbar-brand" href="/">Home</a>
        {else}
            <a class="navbar-brand" href="{$APP}">Home</a>
        {/if}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DB
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{$APP}/import">Fill addresses table</a>
                        <a class="dropdown-item" href="{$APP}/remove">Remove addresses table</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>