<div class="dashboard__contenido">
    <div class="dashboard__stats">
        <h3 class="dashboard__titules">General quantities</h3>

        <div class="dashboard__stats-info">
            <div class="dashboard__stats-name">Techs: <span class="dashboard__stats-number"><?= count($techs) ?></span></div>
            <div class="dashboard__stats-name">Proyects: <span class="dashboard__stats-number"><?= count($proyects) ?></span></div>
            <div class="dashboard__stats-name">Career: <span class="dashboard__stats-number"><?= count($careers) ?></span></div>
        </div>
    </div>

    <div class="dashboard__stats">
        <h3 class="dashboard__titules">Techs</h3>

        <div class="dashboard__stats-info">
            <div class="dashboard__stats-name">FrontEnd:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($techs, function ($tech) {
                        return $tech->tipo == 1;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>

            <div class="dashboard__stats-name">BackEnd:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($techs, function ($tech) {
                        return $tech->tipo == 2;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>

            <div class="dashboard__stats-name">Dev Tools:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($techs, function ($tech) {
                        return $tech->tipo == 3;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>
        </div>

        <a href="/dashboard/techs/create" class="btnGeneral_admin create">Create</a>
    </div>

    <div class="dashboard__stats">
        <h3 class="dashboard__titules">Proyects</h3>

        <div class="dashboard__stats-info">
            <div class="dashboard__stats-name">Complete Web Development:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($proyects, function ($proyect) {
                        return $proyect->tipo == 1;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>
            <div class="dashboard__stats-name">React:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($proyects, function ($proyect) {
                        return $proyect->tipo == 2;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>
        </div>

        <a href="/dashboard/proyects/create" class="btnGeneral_admin create">Create</a>
    </div>

    <div class="dashboard__stats">
        <h3 class="dashboard__titules">Career</h3>

        <div class="dashboard__stats-info">
            <div class="dashboard__stats-name">Experience:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($careers, function ($career) {
                        return $career->tipo == 1;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>
            <div class="dashboard__stats-name">Studies:
                <span class="dashboard__stats-number">
                    <?php
                    $result = array_filter($careers, function ($career) {
                        return $career->tipo == 2;
                    });

                    echo count($result);
                    ?>
                </span>
            </div>
        </div>

        <a href="/dashboard/careers/create" class="btnGeneral_admin create">Create</a>
    </div>
</div>