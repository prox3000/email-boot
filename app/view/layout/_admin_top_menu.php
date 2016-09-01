<script>
    $(function(){
        if (window.AG_onLoad != undefined) {
            var div = $("<div/>").addClass('--fix-- bg-red fg-white padding20 subheader-secondary text-center').html("Support the project! Please switch off your adblocker.").insertAfter('header');
        }
    });
</script>


<div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="/admin/base" class="element"><span class="icon-grid-view"></span> BASE <sup>1.0</sup></a>
        <span class="element-divider"></span>

        <a class="element1 pull-menu" href="#"></a>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle"  href="#">Задачи</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="/admin/task/index">Список</a></li>
                    <li><a href="/admin/task/add">Создать</a></li>
                </ul>
            </li>
        </ul>
        <div class="no-tablet-portrait no-phone">
            <a   href="/admin/out/"><div class="element place-right" title="Out"><span class="icon-star"></span> </div></a>
        </div>
    </div>
</div>