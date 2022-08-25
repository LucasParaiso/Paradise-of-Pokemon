<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mb-5">
        <li class="page-item" style="cursor: pointer;">
            <a class="page-link" aria-label="Previous" onclick="redirect(<?php
                    if ($_GET['offset'] - 1 < 0) {
                        echo 0;
                    } else {
                        echo $_GET['offset'] - 1;
                    }
                    ?>)">
                <span aria-hidden="true">&laquo;
                </span>
            </a>
        </li>
        <?php
        $pages = 10;
        for ($i = 0; $i < $pages; $i++) { ?>
            <li class="page-item" style="cursor: pointer;">
                <a class="page-link" onclick="redirect(<?= $i ?>)"><?= $i + 1 ?></a>
            </li>
        <?php } ?>
        <li class="page-item" style="cursor: pointer;">
            <a class="page-link" onclick="redirect(<?php
                if ($_GET['offset'] >= $pages - 1) {
                    echo $pages - 1;
                } else {
                    echo $_GET['offset'] + 1;
                }
                ?>)" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>