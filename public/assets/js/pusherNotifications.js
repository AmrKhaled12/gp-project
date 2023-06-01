var notificationsWrapper = $(".notifications-container");
// var notificationsToggle = notificationsWrapper.find("a[data-toggle]");
// var notificationsCountElem = notificationsToggle.find("span[data-count]");
// var notificationsCount = parseInt(notificationsCountElem.data("count"));
// var notifications = notificationsWrapper.find("li.scrollable-container");
var notifications = notificationsWrapper.find("li.dropdown-notifications");

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe("notification");
// Bind a function to a Event (the full Laravel class)
channel.bind("NewNotification", function (data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml =
        `<p class="user__name">` + data.user_creator + `</p>`;
    //     ` <div class="media-body">
    //          <a href="` +
    //     data.user_id +
    //     `">
    //          <h6 class="media-heading text-right">` +
    //     data.user_creator +
    //     `</h6>
    //          <p class="user__name">` +
    //     data.data +
    //     `</p>
    //          <small style="direction: ltr;">
    //             <p class="media-meta text-muted text-right" style="direction: ltr;">` +
    //     data.time +
    //     `</p>
    //          </small>
    //    </div>`;

    notifications.html(newNotificationHtml + existingNotifications);
    // notificationsCount += 1;
    // notificationsCountElem.attr("data-count", notificationsCount);
    // notificationsWrapper.find(".notif-count").text(notificationsCount);
    // notificationsWrapper.show();
});
