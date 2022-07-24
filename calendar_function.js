var q = MindFusion.Scheduling;

// create a calendar example
var calendar = new q.Calendar(document.getElementById("calendar"));

calendar.theme = "peach";
calendar.selectionEnd.addEventListener(handleSelection);
calendar.headerClick.addEventListener(handleHeaderClick);

// visual of the calendar
calendar.render();

function handleHeaderClick(sender, args){
    if(sender.currentView === q.CalendarView.Timetable){
        sender.date = sender.timetableSettings.dates.items()[0];
        sender.currentView = q.CalendarView.SingleMonth;
    }
}

function handleSelection(sender, args) {
    if(sender.currentView === q.CalendarView.SingleMonth){
        // cancel the previous behaviour
        args.cancel = true;

        var start = args.startTime;
        var end = args.endTime;

        // clear all date from the timetable
        sender.timetableSettings.dates.clear();

        // if the selection dates are correct, we add to timetableSettings to be rendered
        while(start < end){
            sender.timetableSettings.dates.add(start);
            start = q.DateTime.addDays(start, 1);
        }

        sender.currentView = q.CalendarView.Timetable;
    }
}