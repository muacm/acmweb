<?php require_once "include/header.php"; ?>

<div class="ui large feed" id="feed">
    <h4 class="ui header">Recent Activity</h4>
</div>

<script>
$(document).ready(function() {
    updateActivity()
})

function makeEvent(event) {
    const mail_link = $("<a/>", {
        href: `mailto:${event.email}?cc=acm%2Dregistration%40mscs%2Emu%2Eedu&Subject=ACM%20Programming%20Competition`,
        target: "_top",
        html: event.cname
    })
    const school_link = $("<a/>", {
        href: `/admin/comp/school?schoolid=${event.schoolid}`,
        html: event.sname
    })

    const m = moment(event.rdate)

    return $("<div/>", {
        "class": "event"
    }).append($("<div/>", {
        "class": "content"
    }).append($("<div/>", {
        "class": "summary"
    }).append(mail_link, " from ", school_link, ` registered ${event.teams.length} teams.`).append($(
        "<div/>", {
            "class": "date"
        }).html(m.fromNow()))))

}

function updateActivity() {
    $(".event").remove()
    // TODO: Switch to fetch promise call
    $.ajax('/admin/comp/api/recentactivity', {
        success: function(data) {
            var jsonData = JSON.parse(data)
            if (jsonData.length == 0) {
                error("No Results!")
                return
            }
            for (const event of jsonData) {
                $("#feed").append(makeEvent(event))
            }
        },
        error: function() {
            error("An Error Has Occurred!")
        }
    })
}
</script>