<?php
include_once ('elements/header.php');
?>

<style>
    .page-title-h2-tag{
        margin-top: 120px;
        color: var(--zed-primary);
        padding: 40px 0;
    }

    .section-title h1 {
        text-transform: capitalize;
    }
</style>
<div class="container">

    <div class="row page-title-h2-tag">
        <div class="col-md-12 text-center section-title mt-30 mb-30">
            <h1 class="">How to use Economic Calendar</h1>
        </div>
    </div>

    <div class="row mt-30 mb-50">
        <div class="col-md-12 text-center">
            <div id="economicCalendarWidget"></div>
            <script async type="text/javascript" data-type="calendar-widget" src="https://www.tradays.com/c/js/widgets/calendar/widget.js?v=13">
            {"width":"100%","height":"700px","mode":"1","lang":"en"}
            </script>
        </div>
    </div>
</div>


<?php
include_once ('elements/footer.php');
?>