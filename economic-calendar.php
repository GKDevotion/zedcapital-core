<?php
$seoArr = [
    "title" => "Economic Calendar | Track Market Events & Trading Impact – Zed Academy",
    "description" => "Stay updated with Zed Academy’s Economic Calendar. Track key financial events, economic data releases and market-impacting news to plan trades effectively.",
    "keyword" => "economic calendar, market events, forex economic calendar, stock market economic calendar, trading events calendar, forex and stock market economic calendar, track economic data releases for trading, Zed Academy economic calendar for traders, upcoming financial events impacting markets, plan trades using economic calendar insights, global economic indicators calendar for investors, economic calendar with time zones and impact levels"
];
include_once ('elements/header.php');
?>

<style>
    .page-title-h2-tag{
        margin-top: 120px;
        padding: 40px 0;
    }

    .section-title h1 {
        text-transform: capitalize;
    }
</style>
<div class="container">

    <div class="row page-title-h2-tag">
        <div class="col-md-12 text-center section-title">
            <h1 class="text-red">Global Economic Calendar</h1>
            <h5>Track key financial events shaping global markets in real time.</h5>
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