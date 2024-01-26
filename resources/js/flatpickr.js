import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js"

flatpickr("#event_date", {
    "locale": Japanese,
    minDate: "today",
    maxDate: new Date().fp_incr(30) 
});

const setting = {
    "locale": Japanese,
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    minTime: "10:00",
    maxTime: "22:30",
    minuteIncrement: 30
}

flatpickr("#start_time", setting);

flatpickr("#end_time", setting);



flatpickr("#calendar", {
    "locale": Japanese,
    //minDate: "today",
    maxDate: new Date().fp_incr(90),
    onChange: function(selectedDates, dateStr, instance) {
        // 選択された日付に基づいて表示される日付を更新
        updateDisplayDates(selectedDates[0]);
    }
});

