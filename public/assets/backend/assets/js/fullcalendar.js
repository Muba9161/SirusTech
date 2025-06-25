//FULL CALENDAR (for calendar2)
document.addEventListener("DOMContentLoaded", function () {
    var containerEl = document.getElementById("external-events");
    new FullCalendar.Draggable(containerEl, {
        itemSelector: ".fc-event",
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText.trim(),
                className: eventEl.className + " overflow-hidden ",
            };
        },
    });

    document
        .getElementById("tabW5")
        .addEventListener("click", function () {
            var calendarEl = document.getElementById("calendar2");

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                },
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                selectMirror: true,
                droppable: true, // this allows things to be dropped onto the calendar
                select: function (arg) {
                    var title = prompt("Event Title:");
                    if (title) {
                        calendar.addEvent({
                            title: title,
                            start: arg.start,
                            end: arg.end,
                            allDay: arg.allDay,
                        });
                    }
                    calendar.unselect();
                },
                eventClick: function (arg) {
                    if (
                        confirm("Are you sure you want to delete this event?")
                    ) {
                        arg.event.remove();
                    }
                },
                editable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [
                    {
                        title: "Business Lunch",
                        start: "2025-05-23T13:00:00", // Today + Time
                        constraint: "businessHours",
                    },
                    {
                        title: "Meeting",
                        start: "2025-05-24T11:00:00", // Tomorrow + Time
                        constraint: "availableForMeeting",
                        color: "#f35e90",
                    },
                    {
                        title: "Conference",
                        start: "2025-06-18", // Future date
                        end: "2025-06-20",
                        color: "#e67e22",
                    },
                    {
                        title: "Party",
                        start: "2025-07-29T20:00:00", // Future date
                        color: "#22c865",
                    },
                    // areas where "Meeting" must be dropped
                    {
                        id: "availableForMeeting",
                        start: "2025-05-24T10:00:00",
                        end: "2025-05-24T16:00:00",
                        rendering: "background",
                        color: "#5e72e4",
                    },
                    {
                        id: "availableForMeeting",
                        start: "2025-05-25T10:00:00",
                        end: "2025-05-25T16:00:00",
                        rendering: "background",
                    },
                    // red areas where no events can be dropped
                    {
                        start: "2025-06-01",
                        end: "2025-06-05",
                        overlap: false,
                        rendering: "background",
                        color: "rgba(0,0,0,0.1)",
                    },
                    {
                        start: "2025-05-29",
                        end: "2025-06-01",
                        overlap: false,
                        rendering: "background",
                        color: "rgba(0,0,0,0.1)",
                    },
                ],
            });

            calendar.render();
        });
});

//LIST FULLCALENDAR
document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        height: "auto",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "listDay,listWeek",
        },
        views: {
            listDay: { buttonText: "list day" },
            listWeek: { buttonText: "list week" },
        },
        initialView: "listWeek",
        initialDate: "2025-05-22", // Set to current date
        navLinks: true,
        editable: true,
        dayMaxEvents: true,
        events: [
            {
                title: "All Day Event",
                start: "2025-05-23",
            },
            {
                title: "Long Event",
                start: "2025-05-24",
                end: "2025-05-27",
            },
            {
                id: 999,
                title: "Repeating Event",
                start: "2025-05-25T16:00:00",
            },
            {
                id: 999,
                title: "Repeating Event",
                start: "2025-06-01T16:00:00",
            },
            {
                title: "Conference",
                start: "2025-06-11",
                end: "2025-06-13",
            },
            {
                title: "Meeting",
                start: "2025-05-26T10:30:00",
                end: "2025-05-26T12:30:00",
            },
            {
                title: "Lunch",
                start: "2025-05-26T12:00:00",
            },
            {
                title: "Meeting",
                start: "2025-05-27T14:30:00",
            },
            {
                title: "Happy Hour",
                start: "2025-05-27T17:30:00",
            },
            {
                title: "Dinner",
                start: "2025-05-27T20:00:00",
            },
            {
                title: "Birthday Party",
                start: "2025-05-28T07:00:00",
            },
            {
                title: "Click for Google",
                url: "http://google.com/",
                start: "2025-06-15",
            },
        ],
    });

    calendar.render();
});
